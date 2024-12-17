document.addEventListener("DOMContentLoaded", function() {
    const nomUtilisateurTape = document.querySelector('#nomUtilisateur');
    const mdpTape = document.querySelector('#mdp');
    const formulaireConnexion = document.querySelector('#connexion');
    const msgErreur = document.querySelector('.msg-erreur');

    //Fonction de validation du nom d'utilisateur
    function validerNomUtilisateur(nomUtilisateur) {
        const nomUtilisateurRegex = /^[a-zA-Z0-9]{3,15}$/;//Longueur entre 3 et 15
        return nomUtilisateurRegex.test(nomUtilisateur);
    }

    //Fonction de validation du mot de passe
    function validerMdp(motDePasse) {
        const mdpRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/; //Minimum 6 caractères, au moins 1 lettre et 1 chiffre
        return mdpRegex.test(motDePasse);
    }

    //Valider en temps réel lors de la saisie
    nomUtilisateurTape.addEventListener('input', () => {
        if (!validerNomUtilisateur(nomUtilisateurTape.value)) {
            nomUtilisateurTape.style.borderColor = 'red';
        } else {
            nomUtilisateurTape.style.borderColor = 'green';
        }
    });

    mdpTape.addEventListener('input', () => {
        if (!validerMdp(mdpTape.value)) {
            mdpTape.style.borderColor = 'red';
        } else {
            mdpTape.style.borderColor = 'green';
        }
    });

    //Validation lors de la soumission du formulaire
    formulaireConnexion.addEventListener('submit', function(e) {
        e.preventDefault(); //Empêche l'envoi du formulaire par défaut
        msgErreur.innerHTML = ''; //Efface les messages précédents

        const nomUtilisateur = nomUtilisateurTape.value;
        const motDePasse = mdpTape.value;

        let isValid = true;

        if (!validerNomUtilisateur(nomUtilisateur)) {
            msgErreur.innerHTML += "Le nom d'utilisateur est incorrect !<br>";
            isValid = false;
        }

        if (!validerMdp(motDePasse)) {
            msgErreur.innerHTML += "Le mot de passe est incorrect !<br>";
            isValid = false;
        }

        if (isValid) {
            alert('Formulaire validé avec succès !');
            //Envoyer les données
            formulaireConnexion.submit();
        }
    });
});
