<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Eloquent es muy importante en la comunicación con la base de datos

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nombre','apellido', 'direccion', 'id_empleado'];
    protected $hidden = ['created_at','updated_at'];
}