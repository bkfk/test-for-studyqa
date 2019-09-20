<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'SuperAdmin',
          'email' => 'super-admin@super.admin',
          'password' => bcrypt('123456'),
          'is_super_admin' => true,
      ]);

      DB::table('users')->insert([
          'name' => 'Admin-1',
          'email' => 'admin-1@admin.admin',
          'password' => bcrypt('123456'),
          'is_super_admin' => false,
      ]);

      DB::table('users')->insert([
          'name' => 'Admin-2',
          'email' => 'admin-2@admin.admin',
          'password' => bcrypt('123456'),
          'is_super_admin' => false,
      ]);
    }
}
