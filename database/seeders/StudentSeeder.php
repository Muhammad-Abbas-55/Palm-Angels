<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students = collect([
            [
                'name' => 'Abbas Alvi',
                'age' => '27'
            ],
            [
                'name' => 'Anwar Alvi',
                'age' => '25'
            ]
        ]);

        $students->each(function ($student) {
            Student::create([
                'name' => $student['name'],
                'age' => $student['age']
            ]);
        });
    }
}
