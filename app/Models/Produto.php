<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /*
    protected $table = 'bigbasket';
    protected $fillable = ['Produto', 'Marca', 'Preço', 'Desconto', 'Url_Image', 'Quantidade', 'Categoria', 'SubCategoria', 'Url_Absoluto'];
    */
    use HasFactory;
    protected $table = 'bigbasket';
    public $timestamps = false;
}
