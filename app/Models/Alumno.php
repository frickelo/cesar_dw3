<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $table = 'alumnos';
    public $fillable =[
        'cursos_id',
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'gmail' ,
        'profesión' ,
        'genero' ,
        'fechanac'
    ];
    public function cursos(){
        return $this->belongTo('App\Model\Curso');
    }
}
