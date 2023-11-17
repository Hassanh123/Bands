<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('albums')->insert([
            'name' => 'Album 1',
            'year' => 2020,
            'times_sold' => 10000,
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 2',
            'year' => 2018,
            'times_sold' => 8000,
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 3',
            'year' => 2015,
            'times_sold' => 12000,
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 4',
            'year' => 2013,
            'times_sold' => 9000,
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 5',
            'year' => 2010,
            'times_sold' => 15000,
        ]);
    }
}
