<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidade= collect(['Presidente Prudente', 'Araçatuba', 'Araraquara', 'Dracena', 
        'São Paulo', 'Birigui', 'Ribeirão Preto', 'Guararapes', 'Jaú', 'Pidadamanhacaba' ]);

        $estado= collect(['SP', 'MT', 'RJ', 'MS', 'RN', 'RS']);

        for($i = 0; $i<400; $i++){
            Usuario::create([
                'nome' => 'Mariana',
                'email' => $i .'mariana@gmail.com',
                'telefone'=> $i .'189987455',
                'estado_civil' => 'Solteira',
                'data_nascimento' => rand(1950, 2005) . '-' . rand(1,12) . '-' . rand(1,28),
                'cidade'=> $cidade->random(),
                'estado' => $estado->random(),
                'endereco' => 'Rua João Pessoa',
                'cep'=> '23456',
                'password' => '12345'
            ]);
        }
        
    }
}
