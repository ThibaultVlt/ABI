@extends('index')

@section('title', 'Ajouter un client')

@section('content')
    <div>
        <h1 class="text-center">Ajouter un nouveau client</h1>

        <!-- Affichage des erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire d'ajout de client -->
        <form action="{{ route('client.enregistrer') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="raisonSociale">Raison sociale</label>
                <input type="text" class="form-control" id="raisonSociale" name="raisonSociale" value="{{ old('raisonSociale') }}" required>
            </div>

            <div class="form-group">
                <label for="adresseClient">Adresse</label>
                <input type="text" class="form-control" id="adresseClient" name="adresseClient" value="{{ old('adresseClient') }}" required>
            </div>

            <div class="form-group">
                <label for="codePostalClient">Code Postal</label>
                <input type="text" class="form-control" id="codePostalClient" name="codePostalClient" value="{{ old('codePostalClient') }}" required>
            </div>

            <div class="form-group">
                <label for="villeClient">Ville</label>
                <input type="text" class="form-control" id="villeClient" name="villeClient" value="{{ old('villeClient') }}" required>
            </div>

            <div class="form-group">
                <label for="CA">Chiffre d'affaires</label>
                <input type="number" class="form-control" id="CA" name="CA" value="{{ old('CA') }}" required>
            </div>

            <div class="form-group">
                <label for="effectif">Effectif</label>
                <input type="number" class="form-control" id="effectif" name="effectif" value="{{ old('effectif') }}" required>
            </div>

            <div class="form-group">
                <label for="telephoneClient">Téléphone</label>
                <input type="text" class="form-control" id="telephoneClient" name="telephoneClient" value="{{ old('telephoneClient') }}" required>
            </div>

            <div class="form-group">
                <label for="typeClient">Type</label>
                <input type="text" class="form-control" id="typeClient" name="typeClient" value="{{ old('typeClient') }}" required>
            </div>

            <div class="form-group">
                <label for="natureClient">Nature</label>
                <input type="text" class="form-control" id="natureClient" name="natureClient" value="{{ old('natureClient') }}" required>
            </div>

            <div class="form-group">
                <label for="commentaireClient">Commentaire</label>
                <textarea class="form-control" id="commentaireClient" name="commentaireClient">{{ old('commentaireClient') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le client</button>
        </form>
    </div>
@endsection
