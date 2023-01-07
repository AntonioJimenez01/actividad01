<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Salones extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'lugar',
    'fecha',
    'estatus',
    'encargado',
    'observaciones',
  ];
 // protected $dates = ['deleted_at'];

}
