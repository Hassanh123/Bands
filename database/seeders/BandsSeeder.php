<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('bands')->insert([
            'name' => 'Band 1',
            'genre' => 'Rock',
            'founded' => 2000,
            'active_till' => 'Heden',
        ]);

        DB::table('bands')->insert([
            'name' => 'Band 2',
            'genre' => 'Pop',
            'founded' => 2005,
            'active_till' => 'Heden',
        ]);

        DB::table('bands')->insert([
            'name' => 'Band 3',
            'genre' => 'Metal',
            'founded' => 2010,
            'active_till' => 'Heden',
        ]);
    }
}
