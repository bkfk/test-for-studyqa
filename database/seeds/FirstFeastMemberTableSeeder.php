<?php

use Illuminate\Database\Seeder;

class FirstFeastMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\FirstFeastMember::class)->times(25)->create();
    }
}
