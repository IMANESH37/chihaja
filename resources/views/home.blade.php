@extends('layouts.app')

@section('content')
<!-- <div class="w-100 " style="width:100%">
    <div class="d-flex justify-content-around flex-wrap">
      
    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{ asset('./patient.png') }}" alt="Card image">
        <div class="card-body">
           <h4 class="card-title">Patients</h4>
    
           <a href="./patienthome" class="btn btn-primary">Gestionnaire</a>
        </div>
    </div>



    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{ asset('./Medecin.png') }}" alt="Card image">
        <div class="card-body">
           <h4 class="card-title">Medecins</h4>
         
           <a href="medecinhome" class="btn btn-primary">Gestionnaire</a>
        </div>
    </div>

    <div class="card shadow-sm" style="width:400px">
        <img class="card-img-top" src="{{ asset('./urgence.png') }}" alt="Card image">
        <div class="card-body">
           <h4 class="card-title">Urgences</h4>
 
           <a href="./urgencehome" class="btn btn-primary">Gestionnaire</a>
        </div>
    </div>

   



</div>
</div>
</div> -->

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
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="./urgencehome" >
                <div class="card">
                    <div>
                        <div class="numbers">{{\DB::table('urgences')->count()}}</div>
                        <div class="cardName">Urgence</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <div class="card">
                    <div>
                        <div class="numbers">{{\DB::table('messages')->count()}}</div>
                        <div class="cardName">Messages</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                </a>
            </div>


@endsection
