<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $table = 'surveys';
  protected $fillable = ['email','age','address','job','hobby','socmed','suggestion'];
}
