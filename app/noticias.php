<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    //explicando que a chave primaria tem o nome diferente de Id
    protected $primarykay = 'id_noticia';
}
