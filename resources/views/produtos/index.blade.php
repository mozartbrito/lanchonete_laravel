@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-6">
        <h2>Gerenciar produtos <span class="badge badge-info">{{ $produtos->total() }}</span></h2>
    </div>
    <div class="col-4">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="">
      <button class="btn btn-success my-2 my-sm-0" type="submit">
        <i class="fas fa-search"></i>   
      </button>
      <a href="produtos" class="btn btn-warning my-2 my-sm-0">
        <i class="fas fa-trash-alt"></i>
      </a>
    </form>
    </div>
    <div class="col-2">
        <a href="{{ route('produtos.add') }}" class="btn btn-success">Novo</a>
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
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th>Quantidade</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>R$ {{ $produto->preco }}</td>
                                <td>{{ $produto->categoria->nome }}</td>
                                <td>{{ $produto->qtd }}</td>
                                <td>{{ substr($produto->descricao, 0, 50) }}...</td>
                                <td>
                                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning" data-toggle="tooltip" title="Exibir/Editar produto">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    &nbsp;
                                    <a href="{{ route('produtos.delete', $produto->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar produto" onclick="return confirm('Deseja realmente excluir?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $produtos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
