<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FeastTableSeeder::class);
        $this->call(FeastUserTableSeeder::class);
        $this->call(EducationLevelTableSeeder::class);
        // $this->call(FirstFeastMemberTableSeeder::class);
        // $this->call(SecondFeastMemberTableSeeder::class);
        $this->call(SectionTableSeeder::class);
    }
}
