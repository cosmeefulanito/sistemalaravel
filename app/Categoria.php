<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    //protected $table = 'my_flights';
    protected $fillable = ['nombre', 'descripcion', 'condicion'];


}
