@extends('index')

@section('title', 'Fiche client')

@section('content')
    <h1 class="text-center">Fiche client : {{ $client->raisonSociale }}</h1>

    <table class="table table-bordered w-50 mx-auto">
        <tr>
            <th>Raison sociale</th>
            <td>{{ $client->raisonSociale }}</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>{{ $client->adresseClient }}</td>
        </tr>
        <tr>
            <th>Code postal</th>
            <td>{{ $client->codePostalClient }}</td>
        </tr>
        <tr>
            <th>Ville</th>
            <td>{{ $client->villeClient }}</td>
        </tr>
        <tr>
            <th>Chiffre d'affaires</th>
            <td>{{ $client->CA }}</td>
        </tr>
        <tr>
            <th>Effectif</th>
            <td>{{ $client->effectif }}</td>
        </tr>
        <tr>
            <th>Téléphone</th>
            <td>{{ $client->telephoneClient }}</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>{{ $client->typeClient }}</td>
        </tr>
        <tr>
            <th>Nature</th>
            <td>{{ $client->natureClient }}</td>
        </tr>
        <tr>
            <th>Commentaire</th>
            <td>{{ $client->commentaireClient }}</td>
        </tr>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{ route('clients') }}" class="btn btn-secondary">Retour à la liste des clients</a>
    </div>
@endsection
