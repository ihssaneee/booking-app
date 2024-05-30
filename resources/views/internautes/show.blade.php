@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'internaute</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $internaute->nom }} {{ $internaute->prenom }}</h5>
            <p class="card-text"><strong>Adresse:</strong> {{ $internaute->adresse }}</p>
            <p class="card-text"><strong>Date de Naissance:</strong> {{ $internaute->date_naissance }}</p>
            <p class="card-text"><strong>CIN:</strong> {{ $internaute->cin }}</p>
            <a href="{{ route('internautes.index') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
</div>
@endsection
