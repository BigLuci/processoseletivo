<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoProcesso extends Model
{
    protected $table = 'cargo_processos';

    protected $fillable = [
        'nome'
    ];

    public function funcao_cargo()
    {
        return $this->hasMany(FuncaoCargo::class);
    }
}
