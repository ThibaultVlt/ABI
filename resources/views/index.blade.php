<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Page principale')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body class="vh-100">
    <header class="d-flex justify-content-between border-bottom border-dark">
        <!-- Logo -->
        <a href="/"><img src="/images/logoAbi-sansFond.png" class="w-50 ms-2" alt=""></a>
        <!-- Menu navigation -->
        <nav class="d-flex align-items-center">
            <ul class="list-unstyled d-flex gap-5">
                <li><a href="/" class="text-decoration-none text-black">Accueil</a></li>
                <li><a href="/clients" class="text-decoration-none text-black">Clients</a></li>
                <li><a href="/contacts" class="text-decoration-none text-black">Contacts</a></li>
                <li><a href="/projets" class="text-decoration-none text-black">Projets</a></li>
            </ul>
        </nav>
        <!-- Endroit pour la connexion -->
        <div class="login d-flex flex-column justify-content-center me-3">
        <h2 class="fs-5 text-center">Connexion</h2>
            <form id="connexion" class="d-flex flex-column">
                <!-- Identifiants -->
                <input type="text" id="nomUtilisateur" name="nom utilisateur" placeholder="Nom d'utilisateur" required>
                <input type="password" id="mdp" name="mot de passe" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
            <div id="msg-erreur" class="erreur"></div>
        </div>
    </header>
    <main class="container mt-3 rounded-2 h-75">
        @yield('content')
    </main>
    <footer class="position-absolute w-100 d-flex align-items-center">
        <p class="text-center">&copy; 2024 ABI Gestion Commerciale. Tous droits réservés.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
