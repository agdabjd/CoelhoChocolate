<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::withCount('chocolates')->get();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:50',
            'cnpj' => 'required|numeric|digits:14|unique:fornecedores,cnpj',
            'cidade' => 'required|string|max:50',
            'estado' => 'required|string|size:2'
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::withCount('chocolates')->findOrFail($id);

        if ($fornecedor->chocolates_count > 0) {
            return redirect()->route('fornecedores.index')->with('error', 'Não é possível deletar um fornecedor que possui chocolates cadastrados!');
        }

        $fornecedor->delete();

        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor deletado com sucesso!');
    }
}
