<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexo1= DB::table('sexos')->select('id')->take(1)->get();
        $municipio1= DB::table('municipios')->select('id')->take(1)->get();
        $departamento1= DB::table('departamentos')->select('id')->take(1)->get();
        $pais1= DB::table('paises')->select('id')->take(1)->get();


        DB::table('perfiles')->insert([
            'nombres'=> 'Richard',
            'apellidos'=> 'Taicus',
            'sexo_id'=> $sexo1[0]->id,
            'municipio_id'=>  $municipio1[0]->id,
            'departamento_id'=> $departamento1[0]->id,
            'pais_id'=>  $pais1[0]->id,
            'carnet'=> '2154654',

        ]);


        $sexo2= DB::table('sexos')->select('id')->take(2)->get();
        $municipio2= DB::table('municipios')->select('id')->take(2)->get();
        $departamento2= DB::table('departamentos')->select('id')->take(2)->get();
        $pais2= DB::table('paises')->select('id')->take(2)->get();


        DB::table('perfiles')->insert([
            'nombres'=> 'Ian',
            'apellidos'=> 'Moriano',
            'sexo_id'=> $sexo2[1]->id,
            'municipio_id'=>  $municipio2[1]->id,
            'departamento_id'=> $departamento2[1]->id,
            'pais_id'=>  $pais2[1]->id,
            'carnet'=> '2154654',

        ]);
    }
}
