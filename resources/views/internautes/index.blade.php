@extends ('layouts.app')
@section ('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Internautes</h1>
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Date de naissance</th>
                        <th>Cin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($internautes as $internaute)
                        <tr>
                            <td>{{ $internaute->nom }}</td>
                            <td>{{ $internaute->prenom }}</td>
                            <td>{{ $internaute->adresse }}</td>
                            <td>{{ $internaute->date_naissance }}</td>
                            <td>{{ $internaute->cin }}</td>
                            <td>
                                <a href="{{ route('internautes.show', $internaute->id) }}" class="btn btn-primary">Voir</a>
                                <a href="{{ route('internautes.edit', $internaute->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('internautes.destroy', $internaute->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('internautes.create') }}" class="btn btn-success">Ajouter un internaute</a>
        </div>
    </div>
@endsection