<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
  protected $fillable = ['userId','link'];
  public $timestamps = false;

  public function User(){
    return $this->belongsTo('App\User','id','userId');
  }
}
