@extends('index')

@section('title', 'Liste des projets')

@section('content')
    <main>
        <h1 class="text-center">Listes des projets</h1>
            <table class="table table-striped table table-bordered">
                <thead>
                    <th scope="col">Code</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Abréviation</th>
                    <th scope="col">Type</th>
                </thead>
                <?php
                    foreach($projets as $projet){
                        echo "<tr scope='row'>";
                        echo "<td> $projet[codeProjet] </td>";
                        echo "<td> $projet[nomProjet] </td>";
                        echo "<td> $projet[abregeProjet] </td>";
                        echo "<td> $projet[typeProjet] </td>";
                        echo "<td  class='text-center'>
                        <a href='index.php?action=suppr&id=$projet[idClient]' class='text-dark'>Modifier</a> |
                        <a href='index.php?action=form_modif&id=$projet[idClient]' class='text-dark'>Supprimer</a>
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
