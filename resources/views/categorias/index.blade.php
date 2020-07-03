@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-6">
        <h2>Gerenciar categorias <span class="badge badge-info">{{ $categorias->total() }}</span></h2>
    </div>
    <div class="col-4">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="">
      <button class="btn btn-success my-2 my-sm-0" type="submit">
        <i class="fas fa-search"></i>   
      </button>
      <a href="categorias" class="btn btn-warning my-2 my-sm-0">
        <i class="fas fa-trash-alt"></i>
      </a>
    </form>
    </div>
    <div class="col-2">
        <a href="{{ route('categorias.add') }}" class="btn btn-success">Nova</a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-hover table-bordered table-striped table-responsive-lg">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->nome }}</td>
                                <td>
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning" data-toggle="tooltip" title="Exibir/Editar categoria">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    &nbsp;
                                    <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar categoria" onclick="return confirm('Deseja realmente excluir?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($categorias->total() < 1)
                        <div class="alert alert-info">Nenhum item encontrado</div>
                    @endif

                    {{ $categorias->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
