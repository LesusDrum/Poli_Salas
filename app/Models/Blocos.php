<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blocos extends Model
{
    protected $table='blocos';
    protected $fillable=['nome_bloco', 'descricao_bloco', 'piso'];
    protected $primaryKey = 'cod_bloco';

    public function relSalas()
    {
        return $this->hasMany('App\Models\Salas', 'cod_bloco');
    }
    
}
