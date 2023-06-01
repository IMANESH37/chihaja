<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeurgence;

class SousTypController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $typeurgences  =  Typeurgence::Where('id','=',$request->id)->get() ;
        return view('Soustype',['typeurgences' =>$typeurgences,'urgence'=>$request->nom]);
    }
}
