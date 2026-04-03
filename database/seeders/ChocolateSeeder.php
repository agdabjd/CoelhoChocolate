<?php

namespace Database\Seeders;

use App\Models\Chocolate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChocolateSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chocolate::create([
            'nome' => 'Chocolate ao Leite Clássico',
            'tipo' => 'Ao Leite',
            'gramas' => 100,
            'fornecedor_id' => 1,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate Amargo 70%',
            'tipo' => 'Amargo',
            'gramas' => 85,
            'fornecedor_id' => 1,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate Branco Delicioso',
            'tipo' => 'Branco',
            'gramas' => 100,
            'fornecedor_id' => 2,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate com Avelã',
            'tipo' => 'Com Nozes',
            'gramas' => 150,
            'fornecedor_id' => 2,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate Ao Leite com Morango',
            'tipo' => 'Ao Leite',
            'gramas' => 120,
            'fornecedor_id' => 3,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate Amargo Premium',
            'tipo' => 'Amargo',
            'gramas' => 100,
            'fornecedor_id' => 3,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate ao Leite com Amendoim',
            'tipo' => 'Ao Leite',
            'gramas' => 120,
            'fornecedor_id' => 4,
        ]);

        Chocolate::create([
            'nome' => 'Chocolate Belga Premium',
            'tipo' => 'Amargo',
            'gramas' => 100,
            'fornecedor_id' => 4,
        ]);
    }
}
