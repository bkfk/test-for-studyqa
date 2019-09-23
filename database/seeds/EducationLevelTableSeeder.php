<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('education_levels')->insert([
          'title' => 'Bachelor',
      ]);

      DB::table('education_levels')->insert([
          'title' => 'Master',
      ]);

      DB::table('education_levels')->insert([
          'title' => 'PhD',
      ]);
    }
}
