<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = json_decode(file_get_contents('database/json/students.json'));
        foreach($students  as $student){
            student::create([
                'name' =>$student->name,
                'email' => $student->email
            ]);
        }
        // $students = collect( [
        //     [
        //         'name' =>'abul',
        //         'email' => 'abul@jamal.com'
        //     ],
        //     [
        //         'name' =>'habul',
        //         'email' => 'habul@jamal.com'
        //     ],
        //     [
        //         'name' =>'kabul',
        //         'email' => 'kabul@jamal.com'
        //     ],
            
        // ] );
        // $students->each(function($student){
        //     student::insert($student);
        // });
        // student::create([
        //     'name' =>'Shuvo',
        //     'email' => 'abc@jamal.com'
        // ]);
    }
}
