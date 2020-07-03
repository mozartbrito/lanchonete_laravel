<div class="form-group">
    <label for="nome">Nome:</label>
    {{ Form::text('nome', null, ['class'=>'form-control', 'required'=> 'true']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>