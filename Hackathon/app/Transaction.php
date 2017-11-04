<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['bidId','advertisementId','status','photo'];

    public function Advertisement()
    {
      return $this->belongsTo('App\Advertisement','advertisementId','id');
    }

    public function Bid(){
      return $this->belongsTo('App\Bid','bidId','id');
    }
}
