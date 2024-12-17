@extends('index')

@section('title', 'Liste clients')

@section('content')
    <div>
        <h1 class="text-center">Listes des clients</h1>
            <table class="table table-striped table table-bordered">
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
                    <th scope="col">Modif / Suppr</th>
                </thead>
                <?php
                    foreach($clients as $client){
                        echo "<tr scope='row'>";
                        echo "<td> $client[idClient] </td>";
                        echo "<td> $client[raisonSociale] </td>";
                        echo "<td> $client[adresseClient] </td>";
                        echo "<td> $client[codePostalClient] </td>";
                        echo "<td> $client[villeClient] </td>";
                        echo "<td> $client[CA] </td>";
                        echo "<td> $client[effectif] </td>";
                        echo "<td> $client[telephoneClient] </td>";
                        echo "<td> $client[typeClient] </td>";
                        echo "<td> $client[natureClient] </td>";
                        echo "<td> $client[commentaireClient] </td>";
                        echo "<td class='text-center'>
                        <a href='index.php?action=suppr&id=$client[idClient]' class='text-dark'>Modifier</a> |
                        <a href='index.php?action=form_modif&id=$client[idClient]' class='text-dark'>Supprimer</a>
                        </td>"; //TODO Faire les lien pour modifier et supprimer les clients de la liste
                        echo "</tr>";
                    }
                ?>
                <tfoot>
                    <tr scope="row">
                        <!-- TODO Faire le page d'ajout de client -->
                        <td colspan="12" class="text-center"><a href="" class="text-dark">Ajouter un client</a></td>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection
