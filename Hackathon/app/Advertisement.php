<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Bid;
use App\Transaction;
class Advertisement extends Model
{
  use SoftDeletes;
  protected $fillable = ['userId','title','desc','status','price','dueDate'];
  protected $dates = ['deleted_at'];

  public function Photos(){
    return $this->hasMany('App\AdvertisementPhoto','advertisementId','id');
  }

  public function User(){
    return $this->belongsTo('App\User','userId','id');
  }
}
