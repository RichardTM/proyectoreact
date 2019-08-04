<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais1= DB::table('lenguas')->select('id')->take(1)->get();

        DB::table('departamentos')->insert([
            'departamento'=> 'Zelaya Central',
            'pais_id'=> $pais1[0]->id
        ]);

        $pais2= DB::table('lenguas')->select('id')->take(1)->get();

        DB::table('departamentos')->insert([
            'departamento'=> 'Rivas',
            'pais_id'=>  $pais1[0]->id
        ]);


        $pais2= DB::table('lenguas')->select('id')->take(2)->get();

        DB::table('departamentos')->insert([
            'departamento'=> 'Nariño',
            'pais_id'=>  $pais2[1]->id
        ]);

        $pais2= DB::table('lenguas')->select('id')->take(2)->get();

        DB::table('departamentos')->insert([
            'departamento'=> 'Antioquia',
            'pais_id'=>  $pais2[1]->id
        ]);

    }
}
