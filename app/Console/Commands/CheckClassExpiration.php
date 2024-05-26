<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CheckClassExpiration extends Command
{
    protected $signature = 'class:check-expiration';

    protected $description = 'Check class expiration and delete expired courses';

    public function handle()
    {
        $today = Carbon::now();

        // 获取所有学生表名称
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        // 过滤以 "STU" 开头的学生表
        $stuTables = array_filter($tables, function ($table) {
            return strpos($table, 'stu') === 0;
        });

        foreach ($stuTables as $table) {
            // 找到所有课程
            $classes = DB::table($table)->get();

            foreach ($classes as $class) {
                // 检查课程对象是否包含结束日期属性
                if (property_exists($class, 'classend')) {
                    if ($class->classend !== null) {
                        $classEndDate = Carbon::createFromFormat('Y-m-d', $class->classend);

                        if ($today->gt($classEndDate)) {
                            // 删除过期课程
                            DB::table($table)->where('classname', $class->classname)->delete();
                        }
                    }
                }
            }
        }

        $this->info('Expired courses deleted successfully.');
    }
}
