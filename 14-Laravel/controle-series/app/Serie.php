<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //por padrão o laravel pega o nome da classe e inclui o plural e define como o nome da tabela, não sendo necessário a declaração abaixo. 
    protected $tabela = 'series' ;
    
    public $timestamps = false;
    
}
