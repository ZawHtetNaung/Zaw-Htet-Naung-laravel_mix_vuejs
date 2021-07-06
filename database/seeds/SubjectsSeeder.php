<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([

            [
                'id' => 1,
                'student_id' => 1,
                'name' => 'Math',
                'date' => '2000-01-01'
            ],

            [
                'id' => 2,
                'student_id' => 2,
                'name' => 'Physic',
                'date' => '2020-06-07'
            ]
           
        ]);
    }
}
