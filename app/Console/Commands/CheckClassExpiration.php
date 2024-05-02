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
            return strpos($table, 'STU') === 0;
        });

        foreach ($stuTables as $table) {
            // 找到所有课程
            $classes = DB::table($table)->get();

            foreach ($classes as $class) {
                $classEndDate = Carbon::createFromFormat('Y-m-d', $class->classend);

                if ($today->gte($classEndDate)) {
                    // 删除过期课程
                    DB::table($table)->where('classname', $class->classname)->delete();
                }
            }
        }

        $this->info('Expired courses deleted successfully.');
    }
}
