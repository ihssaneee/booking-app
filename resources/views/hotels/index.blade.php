@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Hôtels</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Adresse</th>
                    <th>Prix Unitaire</th>
                    <th>Type de Chambre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->titre }}</td>
                    <td>{{ $hotel->adresse }}</td>
                    <td>{{ $hotel->prix_unitaire }}</td>
                    <td>{{ $hotel->type_chambre }}</td>
                    <td>
                        <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('hotels.create') }}" class="btn btn-success">Ajouter un Hôtel</a>
    </div>
</div>
@endsection
