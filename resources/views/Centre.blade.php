@extends('layouts.app')

@section('content')
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Récent</h2>
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
                @foreach($centres->where('accepte', '<>', 'terminer')->sortByDesc('updated_at') as $key => $centre)
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
                        @elseif($centre->accepte==null)
                        <h5>Aucun</h5>
                        @elseif($centre->accepte=="refuse")
                        <span class="status return">Refusé</span>
                        @endif
                    </td>
                    <!-- MEDCIN -->
                  <!-- MEDCIN -->
<td class="text-center">
    @if($centre->accepte==null || $centre->accepte=="refuse")
    <form method="POST" action="{{route('updatecentre') }}">
        @csrf
        <input type="hidden" name="idu" value="{{$centre->id}}" />
       
        <select name="idm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Choisir un medcin</option>
        @foreach($medecins as $key=>$medecin)
            
            <option value="{{$medecin->id_me}}" @if($centre->idm == $medecin->id_me) selected @endif>{{ $medecin->nom}}</option>
            @endforeach
        </select>
        @if(sizeof($medecins)>0)
        <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-400 hover:border-transparent rounded-sm">send</button>
        @endif
    </form>
    @else
    @foreach($medecins as $key=>$medecin)
    @if($centre->idm == $medecin->id_me)
    {{ $medecin->nom}}
    @endif
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
    @if($centre->idm == $medecin->id_me)
    {{ $medecin->nom}}
    @endif
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