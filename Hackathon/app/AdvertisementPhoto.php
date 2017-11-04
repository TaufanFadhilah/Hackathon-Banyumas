<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisementPhoto extends Model
{
    public $timestamps = false;
    protected $fillable = ['advertisementId','path'];
}
