<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'first_name' => 'Nikko',
            'middle_name' => 'Boloron',
            'last_name' => 'Fulloso',
            'course' => 'BSIT',
            'gender' => 'Male',
            'address' => 'Dauis,bohol',
            'contact_number' => '09123962831'
        ]);
        DB::table('students')->insert([
            'first_name' => 'Joser',
            'middle_name' => 'wew',
            'last_name' => 'sy',
            'course' => 'BSMT',
            'gender' => 'Female',
            'address' => 'talibon,bohol',
            'contact_number' => '09123962831'
        ]);
        DB::table('students')->insert([
            'first_name' => 'Nikka',
            'middle_name' => 'By',
            'last_name' => 'Tiu',
            'course' => 'BSIT',
            'gender' => 'Female',
            'address' => 'Carme,bohol',
            'contact_number' => '09123962831'
        ]);

    }
}
