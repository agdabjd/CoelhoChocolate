<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'Chocolates Finos Premium',
            'cnpj' => 12345678901234,
            'cidade' => 'São Paulo',
            'estado' => 'SP',
        ]);

        Fornecedor::create([
            'nome' => 'Doces da Serra',
            'cnpj' => 98765432109876,
            'cidade' => 'Belo Horizonte',
            'estado' => 'MG',
        ]);

        Fornecedor::create([
            'nome' => 'Chocolate Artesanal Brasil',
            'cnpj' => 55555555555555,
            'cidade' => 'Rio de Janeiro',
            'estado' => 'RJ',
        ]);

        Fornecedor::create([
            'nome' => 'Confeitaria Delícia',
            'cnpj' => 11111111111111,
            'cidade' => 'Curitiba',
            'estado' => 'PR',
        ]);
    }
}
