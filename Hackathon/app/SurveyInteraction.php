<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyInteraction extends Model
{
  protected $table = 'survey_interactions';
  protected $fillable = ['survey_id','first_impression','animation','graphic','come_back'];
  public $timestamps = false;
}
