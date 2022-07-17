<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_settings')->insert([
          'user_id' => '1',
          'color_name' => 'red'
      ]);

      DB::table('user_settings')->insert([
          'user_id' => '2',
          'color_name' => 'red'
      ]);

      DB::table('user_settings')->insert([
          'user_id' => '3',
          'color_name' => 'red'
      ]);

      DB::table('user_settings')->insert([
          'user_id' => '4',
          'color_name' => 'red'
      ]);
    }
}
