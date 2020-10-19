<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    protected $table='periodos';
    protected $fillable=['cod_curso', 'periodo', 'hora_entrada', 'hora_saida'];
    protected $primaryKey = 'cod_periodo';

    public function relCursos()
    {
        return $this->hasOne('App\Models\Curso', 'cod_curso', 'cod_curso');
    }
}
