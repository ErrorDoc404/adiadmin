<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlackBeltsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('black_belts')->insert([
            'full_name' => 'YOGENDRA SHARMA',
            'dan_list_id' => '6',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'PRASHANT RAJPUT',
            'dan_list_id' => '4',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'AJAY PATEL',
            'dan_list_id' => '4',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'DARPAN RAVAL',
            'dan_list_id' => '3',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'OMPRAKASH SINGH',
            'dan_list_id' => '3',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'KAVITA SHARMA',
            'dan_list_id' => '2',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'SAMEER SHAIKH',
            'dan_list_id' => '2',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'ADITYA SHARMA',
            'dan_list_id' => '3',
        ]);

        DB::table('black_belts')->insert([
            'full_name' => 'DHARMENDRA SINGH',
            'dan_list_id' => '3',
        ]);
    }
}
