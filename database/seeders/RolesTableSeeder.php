<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
          'name' => 'Super Admin',
          'key' => 'super_admin',
      ]);

      DB::table('roles')->insert([
          'name' => 'Admin',
          'key' => 'admin',
      ]);

      DB::table('roles')->insert([
          'name' => 'Editor',
          'key' => 'editor',
      ]);
    }
}
