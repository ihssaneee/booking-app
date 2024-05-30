@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Hôtel</h1>
    <form action="{{ route('hotels.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire</label>
            <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire" required>
        </div>
        <div class="form-group">
            <label for="type_chambre">Type de Chambre</label>
            <input type="text" class="form-control" id="type_chambre" name="type_chambre" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
