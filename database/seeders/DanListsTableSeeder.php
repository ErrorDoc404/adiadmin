<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 1st Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 2nd Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 3rd Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 4th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 5th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 6th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 7th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 8th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 9th Dan',
      ]);

      DB::table('dan_lists')->insert([
          'dan' => 'Black Belt 10th Dan',
      ]);
    }
}
