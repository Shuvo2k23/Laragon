<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        student::factory(5)->create();
    }
}
