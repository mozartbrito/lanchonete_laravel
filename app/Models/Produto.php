<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [ 'nome', 'preco', 'qtd', 'descricao', 'categoria_id' ];


    public function getPrecoAttribute($value)
    {
        return number_format($value,2,',','.');
    }
    public function setPrecoAttribute($value)
    {
        $value = str_replace('.', '', $value);
        $value = str_replace(',', '.', $value);
        $this->attributes['preco'] = $value;
    }
    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');   
    }
}
