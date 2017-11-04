<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\Transaction;
class AdminController extends Controller
{
    public function advertisement(){
      return view('admin.advertisement.index',[
        'data' => Advertisement::all()
      ]);
    }

    public function advertisementShow(Advertisement $advertisement){
      return view('admin.advertisement.show',[
        'data' => $advertisement
      ]);
    }

    public function bidDone(){
      return view('admin.bid.pay',[
        'title' => 'Bid done',
        'action' => '',
        'data' => Transaction::where('status',4)->get()
      ]);
    }

    public function bidPay(){
      return view('admin.bid.pay',[
        'title' => 'Bid pay',
        'action' => 'Set to paid',
        'data' => Transaction::where('status',3)->get()
      ]);
    }

    public function bidOngoing(){
      return view('admin.bid.pay',[
        'title' => 'Bid ongoing',
        'action' => '',
        'data' => Transaction::where('status',2)->get()
      ]);
    }
}
