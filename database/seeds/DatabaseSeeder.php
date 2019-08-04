<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'cursos',
            'niveles',
            'lecciones',
            'desarrolladores',
            'lenguas',
            'sexos',
            'municipios',
            'departamentos',
            'paises',
            'perfiles'
        ]);


        $this->call(DesarrolladorSeeder::class);
        $this->call(LenguaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(LeccionSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(PerfilSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
