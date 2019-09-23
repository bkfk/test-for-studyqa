<?php

use Illuminate\Database\Seeder;

class SecondFeastMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\SecondFeastMember::class)->times(25)->create();
    }
}
