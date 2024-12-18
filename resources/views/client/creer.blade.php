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
            <div class="form-group d-flex flex-column align-items-center gap-2">
                <input type="text" class="form-control w-75" id="raisonSociale" name="raisonSociale" placeholder="Raison sociale" value="{{ old('raisonSociale') }}" required>
                <input type="text" class="form-control w-75" id="adresseClient" name="adresseClient" placeholder="Adresse" value="{{ old('adresseClient') }}" required>
                <input type="text" class="form-control w-75" id="codePostalClient" name="codePostalClient" placeholder="Code Postal" value="{{ old('codePostalClient') }}" required>

                <input type="text" class="form-control w-75" id="villeClient" name="villeClient" placeholder="Ville" value="{{ old('villeClient') }}" required>

                <input type="number" class="form-control w-75" id="CA" name="CA" placeholder="Chiffre d'affaires" value="{{ old('CA') }}" required>

                <input type="number" class="form-control w-75" id="effectif" name="effectif" placeholder="Effectif" value="{{ old('effectif') }}" required>

                <input type="text" class="form-control w-75" id="telephoneClient" name="telephoneClient" placeholder="Téléphone" value="{{ old('telephoneClient') }}" required>

                <input type="text" class="form-control w-75" id="typeClient" name="typeClient" placeholder="Type" value="{{ old('typeClient') }}">

                <input type="text" class="form-control w-75" id="natureClient" name="natureClient" placeholder="Nature" value="{{ old('natureClient') }}">

                <textarea class="form-control w-75" id="commentaireClient" placeholder="Commentaire" name="commentaireClient">{{ old('commentaireClient') }}</textarea>
                <button type="submit" class="btn btn-primary mt-2">Ajouter le client</button>
            </div>

        </form>
    </div>
@endsection
