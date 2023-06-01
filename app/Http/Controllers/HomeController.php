<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $id = Auth::id();
        $user = User::find($id);
if($user->admin==0){
    return view('Prestatiare');
}
else{
return view('home');
    }
//return view('home');
    }

    protected function redirectTo()
{
    if (Auth::user()->id == 1) {
        return view('home'); //1admin
    } elseif (Auth::user()->id == 2) {
        return view('Prestatiare'); //2prestataire
    } 
}

}
