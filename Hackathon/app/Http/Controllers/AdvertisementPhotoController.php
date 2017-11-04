<?php

namespace App\Http\Controllers;

use App\AdvertisementPhoto;
use Illuminate\Http\Request;
use Storage;
use Session;
class AdvertisementPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdvertisementPhoto  $advertisementPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(AdvertisementPhoto $advertisementPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdvertisementPhoto  $advertisementPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvertisementPhoto $advertisementPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdvertisementPhoto  $advertisementPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertisementPhoto $advertisementPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdvertisementPhoto  $advertisementPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvertisementPhoto $id)
    {
      Storage::disk('public')->delete($id->path);
      $id->delete();
      session()->flash('status', 'Delete advertisement photo was successful!');
      return redirect()->route('advertisement.show',['advertisement' => $id->advertisementId]);
    }
}
