<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Instagram;
use Auth;
use Storage;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index',[
          'data' => User::where('typeId',1)->get()
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      return view('user.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(Auth::user()->typeId == 2){
          return redirect(route('home.admin'));
        }
        $instagram = Instagram::where('userId',Auth::user()->id)->first();
        if (!$instagram) {
          $instagram = '';
        }else{
          $instagram = $instagram->link;
        }
        return view('user.profile',[
          'instagram' => $instagram
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6|confirmed',
        'phone' => 'required|string|min:6',
        'address' => 'required|string',
        'photo' => 'image',
        'instagram' => 'required|string'
      ]);
      if($request->photo){
        $path = $request->photo->store('avatar', 'public');
        if (Auth::user()->photo != "avatar/avatar.png") {
          Storage::disk('public')->delete(Auth::user()->photo);
        }
      }else{
        $path = Auth::user()->photo;
      }
      $result = User::find(Auth::user()->id)->update([
        'firstName' => $request->firstName,
        'lastName' => $request->lastName,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'address' => $request->address,
        'phone' => $request->phone,
        'photo' => $path
      ]);

      $instagram = Instagram::where('userId',Auth::user()->id)->first();
      if (!$instagram) {
        Instagram::create([
          'userId' => Auth::user()->id,
          'link' => $request->instagram
        ]);
      }else{
        $instagram->link = $request->instagram;
        $instagram->save();
      }
      $request->session()->flash('status', 'Update was successful!');
      return redirect(route('home'));
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
