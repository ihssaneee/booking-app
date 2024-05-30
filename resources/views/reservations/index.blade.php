@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-md-12'>
    <h1>Réservations</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Internaute</th>
                <th>ID Hôtel</th>
                <th>Date Début Séjour</th>
                <th>Date Fin Séjour</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->id_internaute }}</td>
                <td>{{ $reservation->id_hotel }}</td>
                <td>{{ $reservation->date_debut_sejour }}</td>
                <td>{{ $reservation->date_fin_sejour }}</td>
                <td>{{ $reservation->titre }}</td>
                <td>
                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('reservations.create') }}" class="btn btn-success">Ajouter une Réservation</a>
</div>
@endsection
