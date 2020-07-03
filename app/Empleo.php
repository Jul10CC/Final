<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Eloquent es muy importante en la comunicación con la base de datos

class Empleo extends Model
{
    protected $table = 'empleo';
    protected $primaryKey = 'id_empleo';
    protected $fillable = ['id_empleo','nombre','descripcion'];
    protected $hidden = ['created_at','updated_at'];
}