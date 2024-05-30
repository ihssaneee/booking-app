@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Hôtel</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $hotel->titre }}</h5>
            <p class="card-text"><strong>Adresse:</strong> {{ $hotel->adresse }}</p>
            <p class="card-text"><strong>Prix Unitaire:</strong> {{ $hotel->prix_unitaire }}</p>
            <p class="card-text"><strong>Type de Chambre:</strong> {{ $hotel->type_chambre }}</p>
            <a href="{{ route('hotels.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
</div>
@endsection
