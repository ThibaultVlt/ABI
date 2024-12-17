@extends('index')

@section('title', 'Liste des contacts')

@section('content')
    <main>
        <h1 class="text-center">Listes des contacts</h1>
            <table class="table table-striped table table-bordered">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">ID Client</th>
                    <th scope="col">ID Fonction</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Durée</th>
                </thead>
                <?php
                    foreach($contacts as $contact){
                        echo "<tr scope='row'>";
                        echo "<td> $contact[idContact] </td>";
                        echo "<td> $contact[idClient] </td>";
                        echo "<td> $contact[idFonc] </td>";
                        echo "<td> $contact[nomContact] </td>";
                        echo "<td> $contact[prenomContact] </td>";
                        echo "<td> $contact[telContact] </td>";
                        echo "<td> $contact[emailContact] </td>";
                        echo "<td> $contact[duree] </td>";
                        echo "<td class='text-center'>
                        <a href='index.php?action=suppr&id=$contact[idClient]' class='text-dark'>Modifier</a> |
                        <a href='index.php?action=form_modif&id=$contact[idClient]' class='text-dark'>Supprimer</a>
                        </td>"; //TODO Faire les lien pour modifier et supprimer
                        echo "</tr>";
                    }
                ?>
                <tfoot>
                    <tr scope="row">
                        <!-- TODO Faire le page d'ajout -->
                        <td colspan="12" class="text-center"><a href="" class="text-dark">Ajouter un client</a></td>
                    </tr>
                </tfoot>
            </table>
    </main>
@endsection
