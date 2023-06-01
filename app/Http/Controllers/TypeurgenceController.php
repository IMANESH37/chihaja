<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeurgence;
use Illuminate\Support\Facades\DB;
class TypeurgenceController extends Controller
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
        $typeurgences  =  Typeurgence::Where('id_urgence','=',$request->id)->get() ;
        return view('Typeurgence',['typeurgences' =>$typeurgences,'urgence'=>$request->nom,'idd'=>$request->id]);
    }

    public function addtype(Request $request)
    {  
        return view('Addtype',['idd'=>$request->id]);
    }

    public function store(Request $request)
    {  
        $typeurgences = new Typeurgence;

        $typeurgences->id_urgence=$request->id;
        $typeurgences->nom=$request->titre;
        $typeurgences->text=$request->text;
        $typeurgences->save();
        return redirect('/urgencehome');  
    
    
    }

    public function delete(Request $request)
    {  
        

        $res=Typeurgence::where("id","=",$request->id)->delete();
        return redirect('/urgencehome');  
    
    
    }


    public function edit(Request $request)
    {  
        
        $res=Typeurgence::where("id","=",$request->id)->get();
 

        return view('Typeurgenceupdate',['type' =>$res ]);
       
    
    
    
    }

    public function update(Request $request)
    {  
        
        $Annonce=DB::update("UPDATE `typeurgences` SET `nom`='$request->titre',`text`='$request->text'WHERE id='$request->id'");   




        return redirect('/urgencehome');
 

    
       
    
    
    
    }



}
