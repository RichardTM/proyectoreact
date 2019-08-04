<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'municipio'=> 'Nueva Guinea'
        ]);

        DB::table('municipios')->insert([
            'municipio'=> 'juigalpa'
        ]);

        DB::table('municipios')->insert([
            'municipio'=> 'Managua'
        ]);
    }
}
