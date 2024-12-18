@extends('index')

@section('title', 'Liste des contacts')

@section('content')
    <div>
        <h1 class="text-center">Listes des contacts</h1>
            <table class="table table-striped table table-bordered">
                <thead>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">ID Client</th>
                    <th scope="col" class="text-center">ID Fonction</th>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Prénom</th>
                    <th scope="col" class="text-center">Téléphone</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Durée</th>
                </thead>
                <?php
                    foreach($contacts as $contact){
                        echo "<tr scope='row'>";
                        echo "<td class='text-center'> $contact[idContact] </td>";
                        echo "<td class='text-center'> $contact[idClient] </td>";
                        echo "<td class='text-center'> $contact[idFonc] </td>";
                        echo "<td class='text-center'> $contact[nomContact] </td>";
                        echo "<td class='text-center'> $contact[prenomContact] </td>";
                        echo "<td class='text-center'> $contact[telContact] </td>";
                        echo "<td class='text-center'> $contact[emailContact] </td>";
                        echo "<td class='text-center'> $contact[duree] </td>";
                        echo "</tr>";
                    }
                ?>
                <tfoot>
                    <tr scope="row">
                        <td colspan="12" class="text-center"><a href="" class="text-dark">Ajouter un contact</a></td>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection
