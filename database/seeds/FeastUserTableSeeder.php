<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeastUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('feast_user')->insert([
          'feast_id' => 1,
          'user_id' => 2,
      ]);

      DB::table('feast_user')->insert([
          'feast_id' => 2,
          'user_id' => 3,
      ]);

      DB::table('feast_user')->insert([
          'feast_id' => 1,
          'user_id' => 4,
      ]);

      DB::table('feast_user')->insert([
          'feast_id' => 2,
          'user_id' => 4,
      ]);
    }
}
