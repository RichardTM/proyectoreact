<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table='paises';


    public function sexo(){

        return $this->belongsTo(Sexo::class);
    }

    public function municipio(){

        return $this->belongsTo(Municipio::class);
    }

    public function departamento(){

        return $this->belongsTo(Departamento::class);
    }

    public function pais(){

        return $this->belongsTo(Pais::class);
    }
}
