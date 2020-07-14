<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'cpf', 'telefone',
    ];


    public function veiculo(){
        return $this->belongsToMany(Veiculo::class,'clientes_veiculos');
    }
}
