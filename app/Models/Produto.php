<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nmProduto',
        'dsProduto',
        'idCategoria',
        'imagem',
    ];

    public function categoria() {
        return $this->hasOne(Categoria::class);
    }

}
