<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page principale</title>
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

    <main class="w-75 mx-auto d-flex flex-column gap-5 align-items-center">
        <h1>ACTIVE BRETAGNE INFORMATIQUE'</h1>
        <section class="welcome">
            <h2>Bienvenue sur le site ABI Gestion Commerciale</h2>
        </section>

        <section class="geolocation">
            <h3>Notre emplacement :</h3>
            <iframe class="w-100 h-50" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21132.11858686135!2d-1.636178540674578!3d48.54252907554478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ebb4bd59ebb85%3A0x1cf7ba4e8a49570c!2sLa%20Petite%20Claye%2C%2035610%20Pleine-Foug%C3%A8res!5e0!3m2!1sfr!2sfr!4v1734361956130!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2024 ABI Gestion Commerciale. Tous droits réservés.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
