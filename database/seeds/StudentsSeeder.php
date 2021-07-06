<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            [
                'id' => 1,
                'name' => 'Zaw Htet Naung',
                'hobby' =>'Reading',
                'address' =>'NO(3),Mingalartaungnyunt',
            ],
            [
                'id' => 2,
                'name' => 'Naythan',
                'hobby' =>'Playing Game',
                'address' =>'NO(3),Tarmwe'
            ]
           
        ]);
    }
}
