<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Page principale')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="vh-100">
    <header class="d-flex justify-content-between mx-3 my-1 border-bottom border-dark">
        <!-- Logo -->
        <a href="/"><img src="/images/logoAbi-sansFond.png" class="w-50" alt=""></a>
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
        <div class="login d-flex flex-column justify-content-center">
        <h2 class="fs-5 text-center">Connexion</h2>
            <form id="loginForm" class="d-flex flex-column">
                <!-- Identifiants -->
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
            <div id="error-message" class="error"></div>
        </div>
    </header>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="text-center mt-3">
        <p>&copy; 2024 ABI Gestion Commerciale. Tous droits réservés.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
