<?php

namespace App\Http\Controllers;
use App\Models\Urgence;
use Illuminate\Http\Request;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class UrgenceController extends Controller
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
        $urgences = Urgence::all() ;
        return view('Urgence',['urgences' =>$urgences ]);
    }


    public function index2()
    {  
        return view('Addurgence');
    }

    


    public function store(Request $request)
    {  
        $urgences = new Urgence;

        $nom = $request->nom;
        $uploadedFile = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($uploadedFile->getRealPath())->getSecurePath();
        $urgences->nom=$nom;
        $urgences->logo=$uploadedFileUrl;
        $urgences->save();
        return redirect('/urgencehome');



      }


      public function delete(Request $request)
      {  
        $res=Urgence::where("id","=",$request->id)->delete();
          return redirect('/urgencehome');
  
  
  
  }
}