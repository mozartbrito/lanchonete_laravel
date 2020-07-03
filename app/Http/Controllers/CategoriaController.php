<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	$categorias = Categoria::paginate();
    	return view('categorias.index', compact('categorias'));
    }
    public function add()
    {
    	return view('categorias.add');
    }
    public function store(Request $request)
    {
    	Categoria::create($request->all());
    	return redirect('categorias')->with('success', 'Categoria salva com sucesso!');
    }
    public function edit($id)
    {
    	$categoria = Categoria::find($id);
    	return view('categorias.edit', compact('categoria'));
    }
    public function update(Request $request, $id)
    {
    	$categoria = Categoria::find($id);
    	$categoria->update($request->all());
    	return redirect('categorias')->with('success', 'Alterado com sucesso!');
    }
    public function delete($id)
    {
    	$categoria = Categoria::find($id);
    	$categoria->delete();
    	return redirect('categorias')->with('success', 'Deletado com sucesso!');
    }
}
