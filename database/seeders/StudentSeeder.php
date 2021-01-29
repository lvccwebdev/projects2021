<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Load the CSV
        $students_file = "webdev2-students.csv";
        if (file_exists($students_file)) {
            error_log("File Exists");
            $f = file($students_file);
            $headers = explode(',', $f[0]);
            for ($i = 1; $i < count($f) - 1; $i++) {
                $row = explode(',', $f[$i]);
                $record = [];
                for ($x = 0; $x < count($row); $x++) {
                    $record[ trim($headers[$x]) ] = $row[$x];
                }
                Student::newStudent($record);
                // $student = new Student;
                // $student->program = $record['program'];
                // $student->student_number = $record['student_number'];
                // $student->email = $record['email'];
                // $student->first_name = $record['first_name'];
                // $student->middle_name = $record['middle_name'];
                // $student->last_name = $record['last_name'];
                // $student->nick_name = $record['nick_name'];
                // $student->save();
            }
        } else {
            erorr_log("File does not exist");
        }
        // Iterate and insert records to students table using the model
    }
}
