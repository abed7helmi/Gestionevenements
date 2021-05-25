<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    //

    public function index(){
        // $allevens=Evenement::all();
        // // 
        // $evens=Evenement::where('Organisateur',Auth::user()->id)->get();

        // // dd($evens);
        return view('AcceuilEpisen');
  
    }
}
