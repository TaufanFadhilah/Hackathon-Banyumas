<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyUser extends Model
{
  protected $table = 'survey_users';
  protected $fillable = ['survey_id','promotion','symbol','character'];
  public $timestamps = false;
}
