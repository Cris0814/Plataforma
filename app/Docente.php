<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'edad',
        'programa',
        'asignatura',
        'num_estudiante',
        'num_m',
        'num_h',
        'semestre',
        'modalidad',

    ];
}
