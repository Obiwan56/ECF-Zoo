<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoo Arcadia</title>
</head>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="/"> <img src="{{ asset('logo/logo1.png') }}"
                        width="100px" alt="">
                </a>
                <h1 class="text-primary">Zoo Arcadia</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    {{-- <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <span class="nav-link dropdown-toggle text-success" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->prenom }}</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/deconnexion">Déconnexion</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul> --}}



                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Gestion
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/gestionEmploye">Gestion des employé(e)s</a></li>
                                <li><a class="dropdown-item" href="/gestionCommentaire">Gestion des commentaires</a>
                                </li>
                                <li><a class="dropdown-item" href="/gestionService">Gestion des services</a></li>

                                <li><a class="dropdown-item" href="/gestionVehicule">Gestion des messages</a></li>
                                <li><a class="dropdown-item" href="/gestionAnimaux">Gestion des animaux</a></li>
                                <li><a class="dropdown-item" href="/gestionHabitat">Gestion des Habitats</a></li>
                                <li><a class="dropdown-item" href="/gestionSante">Gestion de la santé des animaux</a>
                                </li>
                            </ul>
                        </li>




                            <li class="nav-item">
                                <a class="nav-link" href="/">Accueil</a>
                            </li>

                            <li class="nav-item"> <a class="nav-link" href="/animaux">Les animaux </a></li>

                            <li class="nav-item"> <a class="nav-link" href="/habitat">Leurs maisons </a></li>

                            <li class="nav-item"> <a class="nav-link" href="/service">Les Services du parc </a></li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/connexion">Connexion</a>
                            </li>


                    </ul>
                </div>
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
                    <p>emplacement 1</p>
                </div>
                <div class="col-6 col-lg-4">
                    <p>emplacement 2</p>

                </div>
                <div class="col-6 col-lg-4">
                    <a class="navbar-brand text-primary " href="/"> <img class="rounded-circle"
                            src="{{ asset('logo/logo2.png') }}" width="100px" alt="">
                    </a>

                </div>
            </div>
        </div>
    </footer>

</body>



</html>
