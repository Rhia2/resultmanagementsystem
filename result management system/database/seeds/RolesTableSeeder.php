<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'Slug' => 'admin',
            'Description' => 'Admin Role',
            'Level' => '1',
        ]);

        DB::table('roles')->insert([
            'name' => 'Hod',
            'Slug' => 'Hod',
            'Description' => 'final authorise result',
            'Level' => '2',
        ]);

        DB::table('roles')->insert([
            'name' => 'Course adviser',
            'Slug' => 'course.adviser',
            'Description' => 'input result',
            'Level' => '3',
        ]);

        DB::table('roles')->insert([
            'name' => 'Exam officer',
            'Slug' => 'exam.officer',
            'Description' => 'authorise result after being posted',
            'Level' => '4',
        ]);

        DB::table('roles')->insert([
            'name' => 'Student',
            'Slug' => 'student',
            'Description' => 'student can update and register their and check result',
            'Level' => '5',
        ]);
    }
}
