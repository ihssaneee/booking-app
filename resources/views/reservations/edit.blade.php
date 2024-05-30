@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Réservation</h1>
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_internaute">ID Internaute</label>
            <select class="form-control" id="id_internaute" name='id_internaute' required>
            @foreach($internautes as $internaute)
                <option value="{{ $internaute->id }}">{{ $internaute->nom }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_hotel">ID Hôtel</label>
            <select class="form-control" id="id_hotel" name="id_hotel" required>
            @foreach($hotels as $hotel)
                <option value="{{ $hotel->id }}">{{ $hotel->titre }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Date Début Séjour</label>
            <input type="date" class="form-control" id="date_debut_sejour" name="date_debut_sejour" value="{{ $reservation->date_debut_sejour }}" required>
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">Date Fin Séjour</label>
            <input type="date" class="form-control" id="date_fin_sejour" name="date_fin_sejour" value="{{ $reservation->date_fin_sejour }}" required>
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $reservation->titre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
