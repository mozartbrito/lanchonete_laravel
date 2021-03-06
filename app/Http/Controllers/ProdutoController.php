<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request->pesquisa != '') {
           $produtos = Produto::where('nome', 'like', '%'.$request->pesquisa.'%')->paginate(4);
        } else {
    	   $produtos = Produto::paginate(4);
        }
    	return view('produtos.index', compact('produtos'));
    }
    public function add()
    {
        $categorias = Categoria::pluck('nome', 'id');
        return view('produtos.add', compact('categorias'));
    }
    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect('produtos')->with('success', 'Produto salvo com sucesso!');
    } 
    public function edit($id)
    {
        $categorias = Categoria::pluck('nome', 'id');
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto', 'categorias'));
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect('produtos')->with('success', 'Produto salvo com sucesso!');
    }

    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('produtos')->with('success', "Produto ({$produto->nome}) excluído com sucesso!");

    }
}
