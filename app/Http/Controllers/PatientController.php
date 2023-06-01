<?php

namespace App\Http\Controllers;



use App\Models\Patient;
use App\Models\Centreurgence;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class PatientController extends Controller
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
        $patient = Patient::all() ;
        return view('patienthome',['patients' =>$patient ]);
    }

    public function add()
    {
        return view('Addpatient');
    }

    public function store(Request $request)
    {
        $patient=new Patient;
        $patient->cin=$request->cin;
        $patient->nom=$request->nom;
        $patient->mdp=$request->mdp;
        $patient->email=$request->email;
        $patient->sex=$request->sex;
        $patient->tel=$request->tel;
        $patient->age=$request->age;
        $patient->type=0;
        $uploadedFile = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($uploadedFile->getRealPath())->getSecurePath();
        $patient->img=$uploadedFileUrl;
        $patient->save();

        return redirect('/patienthome');

    }


    public function delete(Request $request)
    {
        $res=Patient::where("id_p","=",$request->id)->delete();
      
       

        return redirect('/patienthome');

    }


    public function edit(Request $request)
    {
        $res=Patient::where("id_p","=",$request->id)->get();
 

        return view('Patientupdate',['patient' =>$res ]);
       

      

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

       $Annonce=DB::update("UPDATE `patients` SET `cin`='$request->cin',`nom`='$request->nom',`mdp`='$request->mdp',
        `email`='$request->email',`sex`='$request->sex',`age`='$request->age',`tel`='$request->tel' WHERE id_p='$request->id'");   




        return redirect('/patienthome');

    }
    public function detailspatient($id)
{
    $patient = Patient::find($id);
    
    if ($patient) {
        $centreurgence = $patient->centreurgence;
        return view('detailspatient', ['patient' => $patient, 'centreurgence' => $centreurgence]);
    }
    
    abort(404);
}

    

    
    

    

    


    

    



}
