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
                    <th class="text-center">N demande</th>
                    <th class="text-center">Date et heure</th>
                    <th class="text-center">NOM PATIENT</th>
                    <!-- <th class="text-center">ID MEDECIN</th> -->
                    <!-- <th class="text-center">Etat</th> -->
                    <th class="text-center">NOM URGENCE</th>
                    <th class="text-center">STATUS</th>
                    <th class="text-center">medcin</th>
                    <th class="text-center">Accéder</th>
                </tr>
            </thead>
            <tbody>
                @foreach($centres->sortByDesc('updated_at') as $key => $centre)
                <tr>
                    <td class="text-center">{{ $centre->id}}</td>
                    <td class="text-center">{{ $centre->updated_at}}</td>
                    <td class="text-center">{{ $centre->nom_patient }}</td>
                    <td class="text-center">{{ $centre->nomurgence}}</td>
                    <td class="text-center">
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
                    </td>
                    <!-- MEDCIN -->
                    <td class="text-center">
                        <form method="POST" action="{{route('updatecentre') }}">
                            @csrf
                            <input type="hidden" name="idu" value="{{$centre->id}}"     />
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
                        </form> 
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
</div>

<!-- ---------------------NEW TABLE---------------------------- -->

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Terminé</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="text-center">N demande</th>
                    <th class="text-center">Date et heure</th>
                    <th class="text-center">NOM PATIENT</th>
                    <th class="text-center">NOM URGENCE</th>
                    <th class="text-center">STATUS</th>
                    <th class="text-center">medcin</th>
                    <th class="text-center">Accéder</th>
                </tr>
            </thead>
            <tbody>
                @foreach($centres->where('accepte', 'terminer')->sortByDesc('updated_at') as $key => $centre)
                <tr>
                    <td class="text-center">{{ $centre->id}}</td>
                    <td class="text-center">{{ $centre->updated_at}}</td>
                    <td class="text-center">{{ $centre->nom_patient }}</td>
                    <td class="text-center">{{ $centre->nomurgence}}</td>
                    <td class="text-center">
                        @if($centre->accepte=="terminer")
                        <span class="status delivered">Terminé</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @foreach($medecins as $key=>$medecin)
                        {{ $medecin->nom}}
                        @endforeach
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
</div>

<style>
    .text-center {
        text-align: center;
        vertical-align: middle;
    }
</style>

@endsection
