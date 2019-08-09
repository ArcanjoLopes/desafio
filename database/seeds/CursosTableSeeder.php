<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('cursos')->count() == 0)
        {
        	DB::table('cursos')->insert([
        		
        		[
        			'id_curso' => '101010',
        			'nome_curso' => 'Ciencia da Computacao',
        			'id_professor' => '55123',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_curso' => '202020',
        			'nome_curso' => 'Engenharia da Computacao',
        			'id_professor' => '55456',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_curso' => '303030',
        			'nome_curso' => 'Engenharia de Software',
        			'id_professor' => '55789',
                     'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        	]);//close insert

        	echo 'insercao realizada com sucesso !!!!! \n';
        }//close IF
        else { echo 'Tabela Cursos nao esta vazia!!!! \n'; }
    }
}
