<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyCompetitor extends Model
{
  protected $table = 'survey_competitors';
  protected $fillable = ['survey_id','type','job_vacancy','data_security','editing','cs','price','location'];
  public $timestamps = false;
}
