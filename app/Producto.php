<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamps = false;

    protected $fillable = ['referencia', 'nombre','descripcioncorta', 'detalle','valor', 'palabraclave','estado', 'categoria_id','marca_id', 'categoria_id'];

    public function marca(){
        return $this->hasMany(Marca::class,'id','marca_id');
    }

    public function categoria(){
        return $this->hasMany(Categoria::class,'id','categoria_id');
    }

}
