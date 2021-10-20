<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'nome_fantasia',
        'razao_social',
        'data_inicio_atividade',
        'cnae_fiscal',
        'descricao_matriz_filial',
        'endereco',
        'nome_contato',
        'email',
        'tel_fixo',
        'tel_celular',
    ];
}
