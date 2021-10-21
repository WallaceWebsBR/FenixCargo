<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_veiculo',
        'placa',
        'tipo'
    ];

    function gastos(){
        return $this->belongsTo(Gastos::class, 'id_veiculo', 'id');
    }
}
