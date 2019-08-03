<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesarrolladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desarrolladores')->insert([
            'nombres'=> 'Richard',
            'apellidos'=> 'Taicus',
            'telefono'=> '124568',
            'email'=> 'rich@gmail.com'
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=> 'Darwin',
            'apellidos'=> 'Salinas',
            'telefono'=> '124568',
            'email'=> 'darwin@gmail.com'
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=> 'Jhosell',
            'apellidos'=> 'Garcia',
            'telefono'=> '124568',
            'email'=> 'Jhosell@gmail.com'
        ]);

    }
}
