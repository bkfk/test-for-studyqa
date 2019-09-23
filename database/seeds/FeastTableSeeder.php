<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('feasts')->insert([
          'title' => 'Мероприятие А',
          'members_model' => 'App\FirstFeastMember',
          'sub_view' => '_first_feast'
      ]);

      DB::table('feasts')->insert([
          'title' => 'Мероприятие Б',
          'members_model' => 'App\SecondFeastMember',
          'sub_view' => '_second_feast'
      ]);
    }
}
