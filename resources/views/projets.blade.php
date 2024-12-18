@extends('index')

@section('title', 'Liste des projets')

@section('content')
    <div>
        <h1 class="text-center">Listes des projets</h1>
            <table class="table table-striped table table-bordered">
                <thead>
                    <th scope="col" class="text-center">Code</th>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Abréviation</th>
                    <th scope="col" class="text-center">Type</th>
                    <th scope="col" class="text-center">Modif / Suppr</th>
                </thead>
                <?php
                    foreach($projets as $projet){
                        echo "<tr scope='row'>";
                        echo "<td class='text-center'> $projet[codeProjet] </td>";
                        echo "<td class='text-center'> $projet[nomProjet] </td>";
                        echo "<td class='text-center'> $projet[abregeProjet] </td>";
                        echo "<td class='text-center'> $projet[typeProjet] </td>";
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
                        <td colspan="12" class="text-center"><a href="" class="text-dark">Ajouter un projet</a></td>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection
