<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';
    protected $fillable = [
        'user_id',
        'Name',
        'CPF',
        'Rg',
        'Sexo',
        'Endereco',
        'Mãe',
        'Pai',
        'CEP e N°',
        'Cidade',
        'Estado',
    ];
    protected $guarded = ['id'];
}
