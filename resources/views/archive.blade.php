@extends('layouts.app')

@section('content')
<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Old</h2>
                        <!-- <a href="" class="btn">View All</a> -->
                    </div>
                    <table>
                        <thead>
      <tr>
        <th>N demande</th>
        <th>Date et heure</th>
        <th>NOM PATIENT</th>
        <!-- <th>ID MEDECIN</th> -->
        <!-- <th>Etat</th> -->
        <th>NOM URGENCE</th>
        <th>STATUS</th>
        <th>medcin</th>
        <th>Accéder</th>
       

      </tr>
    </thead>
    <tbody>
        @foreach($centres as $key=>$centre1)
      <tr>
        <td>{{ $centre1->id}}</td>
        <td>{{ $centre1->updated_at}}</td>
        <td>{{ $centre1->nom_patient }}</td>

        <!-- <td>{{ $centre->idm}}</td> -->
        <!-- <td>{{ $centre->accepte}}</td> -->
        <td>{{ $centre1->nomurgence}}</td>
        <td>
          @if($centre->accepte=="attend")
          <span class="status pending">En attente</span>
           @elseif($centre->accepte=="accepter")
           <span class="status inProgress">En cours de consultation</span>
           @elseif($centre->accepte=="terminer")
           <span class="status delivered">Terminé</span>
           @elseif($centre->accepte==null)
           <h5>Aucun</h5>
           @elseif($centre->accepte=="refuse")
           <span class="status return">Refusé</span>
       @endif
          </form> 
         
        </td>
         <!-- MEDCIN -->
        <td >
        <form  method="POST" action="{{route('updatecentre') }}">
            @csrf
          <input  type="hidden" name="idu" value="{{$centre->id}}"     />
  @if($centre->accepte==null || $centre->accepte=="refuse")
          <select name="idm">
       @foreach($medecins as $key=>$medecin)
            <option value="{{$medecin->id_me}}">{{ $medecin->nom}}</option>
       @endforeach      
          </select>
       @if(sizeof($medecins)>0)
          <button type="submit" class="btn btn-success">send</button>
       @endif
   @elseif($centre->accepte=="attend" || $centre->accepte=="accepter" || $centre->accepte=="terminer")
          @foreach($medecins as $key=>$medecin)
          {{ $medecin->nom}}
          @endforeach 
   @endif
</td>
        <td class="text-center">
    <a href="{{ route('detailspatient', ['id' => $centre->idp]) }}">
        <i style="font-size: 29px; margin-left: -50px;" class="fa" id="details">&#xf06e;</i>
    </a>
</td>



      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
<!-- ---------------------NEW TABLE---------------------------- -->

<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent </h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
      <tr>
        <th>N demande</th>
        <th>Date et heure</th>
        <th>NOM PATIENT</th>
        <!-- <th>ID MEDECIN</th> -->
        <!-- <th>Etat</th> -->
        <th>NOM URGENCE</th>
        <th>STATUS</th>
        <th>medcin</th>
        <th>Accéder</th>
       

      </tr>
    </thead>
    <tbody>
        @foreach($centres as $key=>$centre)
       
      <tr>
         @if($centre->accepte==null || $centre->accepte=="refuse")
        <td>{{ $centre->id}}</td>
        <td>{{ $centre->updated_at}}</td>
        <td>{{ $centre->nom_patient }}</td>

        <!-- <td>{{ $centre->idm}}</td> -->
        <!-- <td>{{ $centre->accepte}}</td> -->
        <td>{{ $centre->nomurgence}}</td>
        <td>
           @if($centre->accepte==null)
           <h5>pas encore</h5>
           @elseif($centre->accepte=="refuse")
           <span class="status return">Refusé</span>
       @endif
          </form> 
         
        </td>
         <!-- MEDCIN -->
        <td >
        <form  method="POST" action="{{route('updatecentre') }}">
            @csrf
          <input  type="hidden" name="idu" value="{{$centre->id}}"     />
  @if($centre->accepte==null || $centre->accepte=="refuse")
          <select name="idm">
       @foreach($medecins as $key=>$medecin)
            <option value="{{$medecin->id_me}}">{{ $medecin->nom}}</option>
       @endforeach      
          </select>
       @if(sizeof($medecins)>0)
          <button type="submit" class="btn btn-success">send</button>
       @endif
   
   @endif
</td>
        <td class="text-center">
    <a href="{{ route('detailspatient', ['id' => $centre->idp]) }}">
        <i style="font-size: 29px; margin-left: -50px;" class="fa" id="details">&#xf06e;</i>
    </a>
</td>



      </tr>
      @endif
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection
