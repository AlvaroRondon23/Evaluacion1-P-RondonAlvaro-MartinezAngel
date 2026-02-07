<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MascotasModelo extends Model
{
    protected $fillable = ['apodo', 'edad', 'peso', 'ultimaCita'];
}
