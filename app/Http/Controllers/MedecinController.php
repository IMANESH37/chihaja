<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;
use Illuminate\Support\Facades\DB;
class MedecinController extends Controller
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
        $medecins = Medecin::all() ;
        return view('medecinhome',['medecins' =>$medecins ]);
    }


    public function add()
    {
        return view('Addmedecin');
    }


    public function store(Request $request)
    {
        $Medecin=new Medecin;
        $Medecin->cin=$request->cin;
        $Medecin->nom=$request->nom;
        $Medecin->mdp=$request->mdp;
        $Medecin->email=$request->email;
        $Medecin->tel=$request->tel;
        $Medecin->specialite=$request->specialite;
      
        $Medecin->type=1;
        $Medecin->save();

        return redirect('/medecinhome');

    }


    public function delete(Request $request)
    {
        $res=Medecin::where("id_me","=",$request->id)->delete();
      
       

        return redirect('/medecinhome');

    }


    public function edit(Request $request)
    {
        $res=Medecin::where("id_me","=",$request->id)->get();
 

        return view('Medecinupdate',['medecin' =>$res ]);
       

      

    }


    
    public function update(Request $request)
    {
      
      /*  $patient=Patient::where("id_p",$request->id);
        $patient->cin=$request->cin;
        $patient->nom=$request->nom;
        $patient->mdp=$request->mdp;
        $patient->email=$request->email;
        $patient->sex=$request->sex;
        $patient->tel=$request->tel;
        $patient->age=$request->age;*/
       // $patient->save();

       $Annonce=DB::update("UPDATE `medecins` SET `cin`='$request->cin',`nom`='$request->nom',`mdp`='$request->mdp',`specialite`='$request->specialite',
        `email`='$request->email',`tel`='$request->tel' WHERE id_me='$request->id'");   




        return redirect('/medecinhome');

    }








}
