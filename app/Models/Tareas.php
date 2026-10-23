<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table = 'tareas';
    protected $primaryKey = 'id';
    protected $fillable = ['Descripcion', 'fecha', 'user_id', 'estado'];
    protected $dates = ['fecha'];
}
