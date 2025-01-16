@extends('tables')

@section('tableau')

    @section('h1', 'Liste des contacts')
        @section('thead')
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">ID Client</th>
            <th scope="col" class="text-center">ID Fonction</th>
            <th scope="col" class="text-center">Nom</th>
            <th scope="col" class="text-center">Prénom</th>
            <th scope="col" class="text-center">Téléphone</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Durée</th>
        @endsection
        @section('tbody')
            @foreach($contacts as $contact)
                <tr scope='row'>
                    <td class='text-center'> {{ $contact->idContact }} </td>
                    <td class='text-center'> {{ $contact->idClient }} </td>
                    <td class='text-center'> {{ $contact->idFonc }} </td>
                    <td class='text-center'> {{ $contact->nomContact }} </td>
                    <td class='text-center'> {{ $contact->prenomContact }} </td>
                    <td class='text-center'> {{ $contact->telContact }} </td>
                    <td class='text-center'> {{ $contact->emailContact }} </td>
                    <td class='text-center'> {{ $contact->duree }} </td>
                </tr>
            @endforeach
        @endsection
        @section('tfoot')
            <tr scope="row">
                <td colspan="12" class="text-center"><a href="/" class="text-dark">Ajouter un contact</a></td>
            </tr>
        @endsection
    </div>
@endsection
