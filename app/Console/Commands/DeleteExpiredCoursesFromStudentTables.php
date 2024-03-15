<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteExpiredCoursesFromStudentTables extends Command
{
    protected $signature = 'courses:delete-expired-student-tables';

    protected $description = 'Delete expired courses from student tables';

    public function handle()
    {
        // Get all student tables
        $tables = DB::select('SHOW TABLES LIKE "stu%"');

        foreach ($tables as $table) {
            $tableName = reset($table);

            // Check if the table has records for expired courses
            if (Schema::hasTable($tableName)) {
                $expiredCourses = DB::table($tableName)
                    ->where('classend', '<', Carbon::now())
                    ->get();

                foreach ($expiredCourses as $course) {
                    // Delete the expired course record from the student table
                    DB::table($tableName)
                        ->where('id', $course->id)
                        ->delete();

                    // Delete the student record from the course list
                    DB::table($course->classname)
                        ->where('student_account', $tableName)
                        ->delete();
                }
            }
        }

        $this->info('Expired courses from student tables deleted successfully.');
    }
}
