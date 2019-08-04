<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            'pais' => 'Nicaragua'
        ]);

        DB::table('paises')->insert([
            'pais' => 'Colombia'
        ]);

        DB::table('paises')->insert([
            'pais' => 'España'
        ]);
    }
}
