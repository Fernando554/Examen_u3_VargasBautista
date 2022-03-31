<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public function maestro()
    {
        return $this->belongsTo('App\Models\Maestro');
    }
    public function alumno()
    {
        return $this->hasMany('App\Models\Alumno');
    }
}
