@extends('index')

@section('title', 'Accueil')

@section('content')
    <div class="d-flex flex-column gap-5 align-items-center justify-content-around h-100">
        <h1>ACTIVE BRETAGNE INFORMATIQUE'</h1>
        <section class="welcome">
            <h2>Bienvenue sur le site ABI Gestion Commerciale</h2>
        </section>

        <section class="geolocation">
            <h3 class="text-center">Notre emplacement :</h3>
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21132.11858686135!2d-1.636178540674578!3d48.54252907554478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ebb4bd59ebb85%3A0x1cf7ba4e8a49570c!2sLa%20Petite%20Claye%2C%2035610%20Pleine-Foug%C3%A8res!5e0!3m2!1sfr!2sfr!4v1734361956130!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>
@endsection
