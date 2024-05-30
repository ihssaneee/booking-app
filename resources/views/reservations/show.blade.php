@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Réservation</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $reservation->titre }}</h5>
            <p class="card-text"><strong>ID Internaute:</strong> {{ $reservation->id_internaute }}</p>
            <p class="card-text"><strong>ID Hôtel:</strong> {{ $reservation->id_hotel }}</p>
            <p class="card-text"><strong>Date Début Séjour:</strong> {{ $reservation->date_debut_sejour }}</p>
            <p class="card-text"><strong>Date Fin Séjour:</strong> {{ $reservation->date_fin_sejour }}</p>
            <a href="{{ route('reservations.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
</div>
@endsection
