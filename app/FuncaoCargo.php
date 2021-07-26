<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncaoCargo extends Model
{
    protected $table = 'funcao_cargos';

    protected $fillable = [
        'name'
    ];

    public function cargo_processo()
    {
        return $this->belongsTo(CargoProcesso::class);
    }
}
