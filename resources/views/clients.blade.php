<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Listes des clients</h1>
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
                    echo "<td>
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
</body>
</html>
