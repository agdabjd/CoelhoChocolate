<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chocolate;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $chocolates = Chocolate::with('fornecedor')->get();
        $fornecedores = Fornecedor::all();
        return view('produtos.index', compact('chocolates', 'fornecedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:50',
            'tipo' => 'required|string|max:50',
            'gramas' => 'required|integer|min:1',
            'fornecedor_id' => 'required|exists:fornecedores,id'
        ]);

        Chocolate::create($request->all());

        return redirect()->route('produtos.index')->with('success', 'Chocolate cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        $chocolate = Chocolate::findOrFail($id);
        $chocolate->delete();

        return redirect()->route('produtos.index')->with('success', 'Chocolate deletado com sucesso!');
    }
}
