<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table= 'departamentos';

    public function perfiles(){

        return $this->hasMany(Perfil::class);
    }


    public function pais(){

        return $this->belongsTo(Pais::class);
    }
}
