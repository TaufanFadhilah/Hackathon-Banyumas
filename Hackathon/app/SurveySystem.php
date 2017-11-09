<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveySystem extends Model
{
  protected $table = 'survey_systems';
  protected $fillable = ['survey_id','interface','operation','color','placement','error'];
  public $timestamps = false;
}
