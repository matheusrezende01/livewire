<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarefa::create([
          'nome' =>true,
          'data_hora'=> '2025-02-12 07:00:00',
          'descricao' => 'Teste de Descricao'
        ]);
    }
}
