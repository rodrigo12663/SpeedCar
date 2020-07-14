<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'name', 'preco', 'imagem','descricao'
    ];

    public function cliente(){
        return $this->hasMany(Cliente::class,'clientes_veiculos');
    }
}
