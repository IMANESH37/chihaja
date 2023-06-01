
@extends('layouts.app')

@section('content')
<div class="cardBox">
               <a href="./patienthome">

                <div class="card">
                    <div>
                        <div class="numbers">43</div>
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
                        <div class="numbers">6</div>
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
                        <div class="numbers">10</div>
                        <div class="cardName">Urgences</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <div class="card">
                    <div>
                        <div class="numbers">7,842</div>
                        <div class="cardName">Demandes</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                </a>
            </div>

@endsection