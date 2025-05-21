<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
  public function run(): void
  {
    DB::table('students')->insert([
      [
        'name' => 'Avav Abdillah Sam',
        'student_id_number' => 'F55123020',
        'email' => 'Avav@gmail.com',
        'phone_number' => '1234567890',
        'birth_date' => '2005-08-26',
        'gender' => 'Male',
        'status' => 'Active',
        'major_id' => 1,
      ],
      [
        'name' => 'Juan',
        'student_id_number' => 'S123461',
        'email' => 'Juan@gmail.com',
        'phone_number' => '123458888',
        'birth_date' => '2004-06-01',
        'gender' => 'Male',
        'status' => 'Active',
        'major_id' => 2,
      ],
    ]);
  }
}
