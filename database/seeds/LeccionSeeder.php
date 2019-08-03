<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nivel1= DB::table('niveles')->select('id')->take(1)->get();


        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Descripcion de Leccion 1',
            'nivel_id'=> $nivel1[0]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Descripcion de Leccion 2',
            'nivel_id'=> $nivel1[0]->id
        ]);

        $nivel2= DB::table('niveles')->select('id')->take(2)->get();


        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Descripcion de Leccion 1',
            'nivel_id'=> $nivel2[1]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Descripcion de Leccion 2',
            'nivel_id'=> $nivel2[1]->id
        ]);


        $nivel3= DB::table('niveles')->select('id')->take(3)->get();

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Descripcion de Leccion 1',
            'nivel_id'=> $nivel3[2]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Descripcion de Leccion 2',
            'nivel_id'=> $nivel3[2] ->id
        ]);
    }
}
