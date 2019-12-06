<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SC extends Controller
{
    //

    public function index()
    {
    	$dataku = \App\siswa::all();
    	$datake2 = \App\materi::orderBy('id', 'DESC')->limit(1)->get();
        $datake3 = \App\jumsis::orderBy('id','DESC')->limit(1)->get();
        return view('share.index', ['dataku'=>$dataku, 'datake2'=>$datake2, 'datake3'=>$datake3]);
    }
}
