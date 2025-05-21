<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('majors')->insert([
      [
        'name' => 'S1 Teknik Informatika',
        'code' => '00001',
        'description' => 'Study of computer systems and computational processes.',
      ],
      [
        'name' => 'S1 Sistem Informasi',
        'code' => '00002',
        'description' => 'Focus on the design and management of information systems.',
      ],
    ]);
  }
}
