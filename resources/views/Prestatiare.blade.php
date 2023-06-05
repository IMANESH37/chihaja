
@extends('layouts.app')

@section('content')
<div class="cardBox">
               <a href="./patienthome">

                <div class="card">
                    <div>
                    <div class="numbers">{{\DB::table('patients')->count()}}</div>
                        <div class="cardName">Patients</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="medecinhome">
                <div class="card">
                    <div>
                    <div class="numbers">{{\DB::table('medecins')->count()}}</div>
                        <div class="cardName">Medcins</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="./urgencehome" >
                <div class="card">
                    <div>
                        <div class="numbers">{{\DB::table('urgences')->count()}}</div>
                        <div class="cardName">Urgences</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>  
                    </div>
                </div>
                </a>
                <div class="card">
                    <div>
                    <div class="numbers">{{\DB::table('messages')->count()}}</div>
                        <div class="cardName">Messages</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                </a>
            </div>

@endsection