<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financiamento extends Model
{
    protected $fillable = [
        'valor', 'nparcela', 'taxa','pgto',
    ];



    public function user(){
        return $this->hasMany(User::class,'financiamentos_users');
    }
}
