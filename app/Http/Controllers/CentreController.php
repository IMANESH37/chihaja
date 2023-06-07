<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centreurgence;
use App\Models\Medecin;
use Illuminate\Support\Facades\DB;



class CentreController extends Controller
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
    



  


     public function index()
     {
         $centres = DB::table('centreurgences')
         ->leftJoin('patients', 'centreurgences.idp', '=', 'patients.id_p')
         ->select('centreurgences.*', 'patients.nom as nom_patient')
         ->get();
     
        //  $medecins = Medecin::where('online','=',1)->get() ;
        //  return view('Centre',['centres' =>$centres,'medecins' =>$medecins ]);
         $medecins =DB::table('medecins')->get() ;
         return view('Centre',['centres' =>$centres,'medecins' =>$medecins ]);
 
     }
 
   
    public function update(Request $request)
    {
        $centres =DB::update("UPDATE `centreurgences` SET `idm`='$request->idm',`accepte`='attend' WHERE centreurgences.id=$request->idu;");
       
        return redirect('/centre');
    }

    public function archive()
{
    return view('archive');
}

    
}
