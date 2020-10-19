<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    protected $primaryKey = 'cod_curso';

    public function relPeriodos()
    {
        return $this->hasMany('App\Models\Periodos', 'cod_curso');
    }
}
