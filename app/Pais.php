<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Channels\DatabaseChannel;

class Pais extends Model
{
    protected $table='paises';


    public function perfiles(){

        return $this->hasMany(Perfil::class);
    }

    public function departamentos(){

        return $this->hasMany(Departamento::class);
    }
}
