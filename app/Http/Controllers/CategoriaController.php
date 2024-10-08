<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria()
    {
        $categorias = Produto::select('Categoria')->distinct()->get();
        return view('Categoria', compact('categorias'));
    }
    public function produto($nomeCategoria)
    {
        // Retorna uma lista de produtos referente à categoria selecionada
        $produtos = Produto::select('Produto', 'Categoria')
            ->where('Categoria', $nomeCategoria)
            ->distinct()
            ->get();

        return view('produto', compact('produtos', 'nomeCategoria'));
    }
}