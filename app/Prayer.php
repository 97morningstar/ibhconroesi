<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion', 'mensaje'];
    
}
