<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['id_aluno','nome_aluno','logradouro','numero','bairro','cidade','estado','cep','id_curso'];
}
