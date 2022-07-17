<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'role_id'=>'1',
          'email' => 'admin@shotokan.com',
          'password' => bcrypt('secret'),
          'pro' => 'yes',
          'created_by' => 'System Generated',
          'modified_by' => 'System Generated'
      ]);

      DB::table('users')->insert([
          'name' => 'Akash',
          'role_id'=>'3',
          'email' => 'akashsinhakvs@gmail.com',
          'password' => bcrypt('secret'),
          'created_by' => 'System Generated',
          'modified_by' => 'System Generated'
      ]);
    }
}
