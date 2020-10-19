<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{

    protected $table='salas';
    protected $fillable=['cod_bloco', 'nome_sala', 'descricao_sala'];
    protected $primaryKey = 'cod_sala';

    public function relBlocos()
    {
        return $this->hasOne('App\Models\Blocos', 'cod_bloco', 'cod_bloco');
    }
}
