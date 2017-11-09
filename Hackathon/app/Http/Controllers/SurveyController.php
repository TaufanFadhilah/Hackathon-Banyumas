<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyCompetitor;
use App\SurveyInteraction;
use App\SurveySystem;
use App\SurveyUser;
use Session;
use Mail;
use App\Mail\SurveySent;
class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('survey.result',[
        'data' => Survey::all(),
        'system' => SurveySystem::all(),
        'user' => SurveyUser::all(),
        'interaction' => SurveyInteraction::all(),
        'ShowUp' => SurveyCompetitor::where('type',1)->get(),
        'others' => SurveyCompetitor::where('type',2)->get(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.survey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socmed = '';
        foreach ($request->socmed as $data) {
          $socmed = $data.' '.$socmed;
        }
        $survey = Survey::create([
          'email' => $request->email,
          'age' => $request->age,
          'address' => $request->address,
          'job' => $request->job,
          'hobby' => $request->hobi,
          'socmed' => $socmed,
          'suggestion' => $request->suggestion,
        ]);
        Mail::send(new SurveySent($survey));
        SurveyCompetitor::create([
          'survey_id' => $survey->id,
          'type' => 1,
          'job_vacancy' => $request->SUJobVacancy,
          'data_security' => $request->SUDataSecurity,
          'editing' => $request->SUEditing,
          'cs' => $request->SUCS,
          'price' => $request->SUPrice,
          'location' => $request->SULocation,
        ]);
        SurveyCompetitor::create([
          'survey_id' => $survey->id,
          'type' => 2,
          'job_vacancy' => $request->OJobVacancy,
          'data_security' => $request->ODataSecurity,
          'editing' => $request->OEditing,
          'cs' => $request->OCS,
          'price' => $request->OPrice,
          'location' => $request->OLocation,
        ]);
        SurveyInteraction::create([
          'survey_id' => $survey->id,
          'first_impression' => $request->interactionFirstImpression,
          'animation' => $request->interactionAnimation,
          'graphic' => $request->interactionGraphic,
          'come_back' => $request->interactionComeBack,
        ]);
        SurveySystem::create([
          'survey_id' => $survey->id,
          'interface' => $request->systemInterface,
          'operation' => $request->systemOperation,
          'color' => $request->systemColor,
          'placement' => $request->systemPlacement,
          'error' => $request->systemError,
        ]);
        SurveyUser::create([
          'survey_id' => $survey->id,
          'promotion' => $request->userPromotion,
          'symbol' => $request->userSymbol,
          'character' => $request->userCharacter,
        ]);
        Session::flash('status', 'Atas bantuan untuk mengisi survey ShowUp!');
        return redirect()->route('survey');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
