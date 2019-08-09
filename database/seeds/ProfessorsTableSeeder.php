<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('professors')->count() == 0)
        {
        	DB::table('professors')->insert([
        		
        		[
        			'id_professor' => '55123',
        			'nome_professor' => 'Alain da Silva',
        			'data_nascimento' => '25-08-1989',
        			'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_professor' => '55456',
        			'nome_professor' => 'Mackson Garcez',
        			'data_nascimento' => '14-08-1962',
        			'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],

        		[
        			'id_professor' => '55789',
        			'nome_professor' => 'Maria Nazare',
        			'data_nascimento' => '02-02-1962',
        			'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
        		],        		

        	]);//close insert

        	echo 'insercao realizada com sucesso !!!!! \n';
        }//close IF
        else { echo 'Tabela Professores nao esta vazia!!!! \n'; }
    }
}
