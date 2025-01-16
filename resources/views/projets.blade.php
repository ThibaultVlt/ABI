@extends('tables')

@section('tableau')

    @section('h1', 'Liste des projets')
        @section('thead')
            <th scope="col" class="text-center">Code</th>
            <th scope="col" class="text-center">Nom</th>
            <th scope="col" class="text-center">Abréviation</th>
            <th scope="col" class="text-center">Type</th>
        @endsection
            @section('tbody')
            @foreach($projets as $projet)
            <tr scope='row'>
                <td class='text-center'>{{ $projet->codeProjet }} </td>
                <td class='text-center'>{{ $projet->nomProjet }} </td>
                <td class='text-center'>{{ $projet->abregeProjet }} </td>
                <td class='text-center'>{{ $projet->typeProjet }} </td>
            </tr>
            @endforeach
        @endsection
        @section('tfoot')
            <tr scope="row">
                <td colspan="12" class="text-center"><a href="/" class="text-dark">Ajouter un projet</a></td>
            </tr>
        @endsection
</div>
@endsection
