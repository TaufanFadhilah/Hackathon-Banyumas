<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Bid;
use App\Advertisement;
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

  public function Bids(){
    return $this->hasMany('App\Bid','advertisementId','id');
  }

  public function checkBid($adsId,$userId){
    $result = Bid::where([
      'userId' => $userId,
      'advertisementId' => $adsId
      ])->count();
      if ($result >= 1) {
        return 1;
      }else{
        return 0;
      }
  }

  public function Transaction()
  {
    return $this->hasOne('App\Transaction','advertisementId','id');
  }

}
