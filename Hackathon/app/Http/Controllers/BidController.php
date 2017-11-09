<?php

namespace App\Http\Controllers;

use App\Bid;
use App\User;
use App\Transaction;
use Auth;
use Storage;
use Session;
use Illuminate\Http\Request;

class BidController extends Controller
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

    public function mine()
    {
      return view('bid.index',[
        'title' => 'Bids',
        'bid' => 1,
        'data' => Bid::where('userId',Auth::id())->get()
      ]);
    }

    public function choosen()
    {
      return view('bid.index',[
        'title' => 'Bids Choosen',
        'action' => 'Get the task',
        'data' => Transaction::has('Bid.User')->where('status',0)->get()
      ]);
    }

    public function confirmation()
    {
      return view('bid.index',[
        'title' => 'Bids Confirmation',
        'action' => 'Confirmation',
        'data' => Transaction::has('Bid.User')->where('status',1)->get()
      ]);
    }

    public function ongoing()
    {
      return view('bid.index',[
        'title' => 'Bids Ongoing',
        'action' => 'Set to done',
        'data' => Transaction::has('Bid.User')->where('status',2)->get()
      ]);
    }

    public function done()
    {
      return view('bid.index',[
        'title' => 'Bids Done',
        'action' => '',
        'data' => Transaction::has('Bid.User')->where('status',4)->get()
      ]);
    }

    public function updateConfirmation(Request $request){
      $path = $request->photo->store('confirmation', 'public');
      $trans = Transaction::find($request->id);
      $trans->status = 2;
      $trans->photo = $path;
      $trans->save();
      $request->session()->flash('status', 'Update bid status was successful!');
      return redirect(route('bid.confirmation'));
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
        Bid::create($request->all());
        $request->session()->flash('status', 'Create bid was successful!');
        return redirect(route('advertisement.show',['advertisement' => $request->advertisementId]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update($id, $status)
    {
      $trans = Transaction::find($id);
      $trans->status = $status;
      $trans->save();
      if ($status == 2) {
        return redirect(route('bid.choosen'));
      }elseif($status == 3){
        return redirect(route('bid.ongoing'));
      }elseif($status == 4){
        return redirect(route('admin.bidPay'));
      }else{
        return redirect(route('home'));
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
