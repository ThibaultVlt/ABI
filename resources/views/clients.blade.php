@extends('tables')

@section('tableau')

    @section('h1', 'Liste des clients')
        @section('thead')
            <th scope="col" class="text-center">ID Client</th>
            <th scope="col" class="text-center">Raison sociale</th>
            <th scope="col" class="text-center">Adresse</th>
            <th scope="col" class="text-center">Code postal</th>
            <th scope="col" class="text-center">Ville</th>
            <th scope="col" class="text-center">CA</th>
            <th scope="col" class="text-center">Effectif</th>
            <th scope="col" class="text-center">Téléphone</th>
            <th scope="col" class="text-center">Type</th>
            <th scope="col" class="text-center">Nature</th>
            <th scope="col" class="text-center">Commentaire</th>
            <th scope="col" class="text-center">Fiche</th>
        @endsection
            @section('tbody')
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
            @endforeach
        @endsection
        @section('tfoot')
            <tr scope="row">
                <td colspan="12" class="text-center"><a href="{{ route('client.creer')}}" class="text-dark">Ajouter un client</a></td>
            </tr>
        @endsection
</div>
@endsection
