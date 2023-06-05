@extends('layouts.app')

@section('content')
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
            @foreach ( $centresTermines->sortByDesc('updated_at') as $key => $centre)                <tr>
                    <td class="text-center">{{ $centre->id}}</td>
                    <td class="text-center">{{ $centre->updated_at}}</td>
                    <td class="text-center">{{ $centre->nom_patient }}</td>
                    <td class="text-center">{{ $centre->nomurgence}}</td>
                    <td class="text-center">
                   
                        <span class="status delivered">Terminé</span>        
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

@endsection
