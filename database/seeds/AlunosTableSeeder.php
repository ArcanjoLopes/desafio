<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('alunos')->count() == 0)
        {
        	DB::table('alunos')->insert([
        		[
        			'id_aluno'=> '111123',
        			'nome_aluno' => 'Maria Eduarda',
        			'data_nascimento'=> '31-05-1993',
        			'logradouro' => 'Alameda Rio de Janeiro',
        			'numero' => '2234',
        			'bairro' => 'Armando Mendes',
        			'cidade' => 'Manaus',
        			'estado' => 'Amazonas',
        			'cep' => '69081-004',
        			'id_curso' => '101010',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_aluno'=> '111456',
        			'nome_aluno' => 'Marcos Antonio',
        			'data_nascimento'=> '12-05-1993',
        			'logradouro' => 'Alameda Luis Mendes',
        			'numero' => '5050',
        			'bairro' => 'Armando Mendes',
        			'cidade' => 'Manaus',
        			'estado' => 'Amazonas',
        			'cep' => '69081-008',
        			'id_curso' => '101010',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_aluno'=> '111789',
        			'nome_aluno' => 'Chico Marques',
        			'data_nascimento'=> '31-07-1989',
        			'logradouro' => 'Av. Jorge Baird',
        			'numero' => '9090',
        			'bairro' => 'Chapada',
        			'cidade' => 'Manaus',
        			'estado' => 'Amazonas',
        			'cep' => '69082-120',
        			'id_curso' => '202020',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        	]);//close insert

        	echo 'insercao realizada com sucesso !!!!! \n';
        }//close IF
        else { echo 'Tabela nao esta vazia!!!!'; }
    }
}
