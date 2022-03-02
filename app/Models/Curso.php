<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name','description','categoria'];//CAMPOS PERMITIDOS

    protected $guarded=[];//CAMPOS PROTEGIDOS, DEJAMOS EN BLANDO SI NO LO TENEMOS
}
