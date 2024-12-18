@extends('index')

@section('title', 'Liste clients')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
    <h1 class="text-center">Liste des clients</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <th scope="col">ID Client</th>
            <th scope="col">Raison sociale</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code postal</th>
            <th scope="col">Ville</th>
            <th scope="col">CA</th>
            <th scope="col">Effectif</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Type</th>
            <th scope="col">Nature</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Actions</th> <!-- Ajouté une colonne pour l'action -->
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr scope="row">
                    <td>{{ $client->idClient }}</td>
                    <td>{{ $client->raisonSociale }}</td>
                    <td>{{ $client->adresseClient }}</td>
                    <td>{{ $client->codePostalClient }}</td>
                    <td>{{ $client->villeClient }}</td>
                    <td>{{ $client->CA }}</td>
                    <td>{{ $client->effectif }}</td>
                    <td>{{ $client->telephoneClient }}</td>
                    <td>{{ $client->typeClient }}</td>
                    <td>{{ $client->natureClient }}</td>
                    <td>{{ $client->commentaireClient }}</td>
                    <td class="text-center">
                        <a href="{{ route('client.details', $client->idClient) }}" class="text-black">Voir la fiche</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr scope="row">
                <td colspan="12" class="text-center"><a href="{{ route('client.creer')}}" class="text-dark">Ajouter un client</a></td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
