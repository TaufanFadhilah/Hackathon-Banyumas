<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\AdvertisementPhoto;
use Illuminate\Http\Request;
use Auth;
use Storage;
class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ads.index',[
          'data' => Advertisement::all()
        ]);
    }

    public function myAds(){
      return view('ads.index',[
        'data' => Advertisement::where('userId',Auth::id())->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required|string|max:255',
          'desc' => 'required|string',
          'price' => 'required|integer',
          'dueDate' => 'required|date'
        ]);
        $ads =  Advertisement::create($request->all());
        foreach ($request->photos as $photo) {
          $path = $photo->store('ads', 'public');
          AdvertisementPhoto::create([
            'advertisementId' => $ads->id,
            'path' => $path
          ]);
        }
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('ads.show',[
          'data' => $advertisement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $advertisement->title = $request->title;
        $advertisement->desc = $request->desc;
        $advertisement->price = $request->price;
        $advertisement->dueDate = $request->dueDate;
        $advertisement->save();
        foreach ($request->photos as $photo) {
          $path = $photo->store('ads', 'public');
          AdvertisementPhoto::create([
            'advertisementId' => $advertisement->id,
            'path' => $path
          ]);
        }
        return redirect()->route('advertisement.show',['advertisement' => $advertisement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        foreach ($advertisement->Photos as $photo) {
          Storage::disk('public')->delete($photo->path);
          $photo->delete();
        }
        $advertisement->delete();
        return redirect(route('advertisement.mine'));
    }

    /**
    * Admin function
    **/

    
}
