<div class="form-group">
    <label for="nome">Nome:</label>
    {{ Form::text('nome', null, ['class'=>'form-control', 'required'=> 'true']) }}
</div>
<div class="form-group">
    <label for="preco">Preço:</label>
    {{ Form::text('preco', null, ['class'=>'form-control', 'required'=> 'true']) }}
</div>
<div class="form-group">
	<label for="categoria_id">Categoria:</label>
	{!! Form::select('categoria_id', $categorias,null, ['class'=> 'form-control', 'placeholder'=> 'Escolha']) !!}
</div>
<div class="form-group">
    <label for="qtd">Quantidade:</label>
    {{ Form::number('qtd', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="descricao">Descrição:</label>
    {{ Form::textarea('descricao', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>