<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestao extends Model
{
    use HasFactory;

     protected $fillable = [
        'titulo',
        'descricao',
       'data_inicio',
       'valor_projeto',
       'satatus',
     ];
  

}
