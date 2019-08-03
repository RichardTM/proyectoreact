<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Name;

class Leccion extends Model
{
    protected $table='lecciones';

    public function nivel(){

        return $this->belongsTo(Nivel::class);
    }
}
