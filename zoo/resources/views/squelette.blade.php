<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Zoo Arcadia</title>

    <meta name="description"
        content="Visitez le Zoo Arcadia, un lieu exceptionnel pour découvrir une variété d'animaux, leur habitat, et participer à des activités éducatives en famille.">
    <meta name="keywords"
        content="zoo, animaux, Arcadia, faune, habitats, activités, éducation, famille, tourisme, nature">
    <meta property="og:title" content="Zoo Arcadia - Découvrez la faune du monde entier">
    <meta property="og:description"
        content="Visitez le Zoo Arcadia et explorez une large gamme d'animaux dans leur environnement naturel recréé.">
    <meta name="robots" content="index, follow">
</head>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="/">
                    <img class="no-border" src="{{ asset('logo/logo1.png') }}" width="100px" alt="">
                </a>
                <h1 class="text-primary">Zoo Arcadia</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <span class="nav-link dropdown-toggle text-warning" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->prenom }}</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/deconnexion">Déconnexion</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('modifMdp', ['id' => Auth::user()->id]) }}">Modifier le mot de
                                            passe</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Gestion</a>
                                <ul class="dropdown-menu">
                                    @auth
                                        @if (auth()->user()->role === 'admin')
                                            <li><a class="dropdown-item" href="/gestionEmploye">Gestion des employé(e)s</a></li>
                                            <li><a class="dropdown-item" href="/gestionHoraire">Gestion des Horaires</a></li>
                                        @endif
                                    @endauth

                                    @auth
                                        @if (auth()->user()->role === 'employe' || auth()->user()->role === 'admin')
                                            <li><a class="dropdown-item" href="/gestionCommentaire">Gestion des commentaires</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/gestionService">Gestion des services</a></li>
                                            <li><a class="dropdown-item" href="#">Gestion des messages</a></li>
                                            <li><a class="dropdown-item" href="/gestionAnimaux">Gestion des animaux</a></li>
                                            <li><a class="dropdown-item" href="/gestionHabitat">Gestion des Habitats</a></li>
                                            <li><a class="dropdown-item" href="/gestionRepasAnimal">Gestion des repas des
                                                    animaux</a></li>
                                            <li><a class="dropdown-item" href="/gestionNourriture">Gestion des aliments</a></li>

                                            <li>
                                                <a class="dropdown-item" href="/gestionVoteAnimal">Gérer les
                                                    Animaux pour le vote</a>
                                            </li>
                                        @endif
                                    @endauth

                                    @auth
                                        @if (auth()->user()->role === 'veto' || auth()->user()->role === 'admin')
                                            <li><a class="dropdown-item" href="/gestionRapportVeto">Gestion des rapports
                                                    vétérinaires</a></li>
                                        @endif
                                    @endauth
                                </ul>
                            </li>
                        @endauth

                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/animaux">Les animaux</a></li>
                        <li class="nav-item"><a class="nav-link" href="/habitat">Leurs maisons</a></li>
                        <li class="nav-item"><a class="nav-link" href="/service">Les Services du parc</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                        <li class="nav-item">
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            @endguest
                        </li>
                    </ul>

                </div>
        </nav>
    </header>

    <div class="main">
        @yield('contenu')
    </div>

    <footer class="bg-dark text-white text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="text-primary">Adresse du site :</h3>
                    <p>Forêt de Brocéliande<br>35380 Painpont</p>
                </div>
                <div class="col-6 col-lg-4">
                    <h3 class="text-primary">Nos horaires</h3>
                    @foreach ($horaires as $horaire)
                        <div>
                            <p>{{ $horaire->horaire1 }}</p>
                            <p>{{ $horaire->horaire2 }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-6 col-lg-4">
                    <a class="navbar-brand text-primary" href="/">
                        <img class="rounded-circle no-border" src="{{ asset('logo/logo2.png') }}" width="100px"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
