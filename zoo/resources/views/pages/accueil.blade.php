@extends('squelette')

@section('contenu')
    <div class="p-4">
        @if (session('danger'))
            <div class="alert alert-danger m-4">
                {{ session('danger') }}
            </div>
        @endif

        @if (session('status') || session('success'))
            <div class="alert alert-success m-4">
                {{ session('status') ?? session('success') }}
            </div>
        @endif
    </div>

    {{-- Section accueil --}}
    <section class="text-center my-5">
        <h1 class="text-primary display-1">Bienvenue au parc Arcadia</h1>
        <p class="lead">Découvrez un monde fascinant d'animaux, d'habitats et de services uniques!</p>
        <a href="/voteAnimal" class="btn btn-primary btn-lg mt-3">Votez pour votre Animal préféré</a>
    </section>

    {{-- Section habitats --}}
    <section class="container my-5">
        <h2 class="text-center text-primary">Découvrez nos habitats</h2>
        <div class="row g-4">
            @foreach ($habitats as $habitat)
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $habitat->img1) }}" class="card-img-top img-fluid"
                            style="max-height: 250px; max-width: 100%; object-fit: contain;"
                            alt="Image de l'habitat {{ $habitat->nom }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $habitat->nom }}</h5>
                            <a href="{{ route('detailHabitat', $habitat->id) }}" class="btn btn-outline-primary">Voir
                                plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Section animaux --}}
    <section class="container my-5">
        <h2 class="text-center text-primary">Découvrez nos ami(e)s pensionnaires</h2>
        <div class="row g-4">
            @foreach ($animals as $animal)
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $animal->img1) }}" class="card-img-top img-fluid"
                            style="max-height: 250px; max-width: 100%; object-fit: contain;"
                            alt="Image de l'animal {{ $animal->prenom }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $animal->prenom }}</h5>
                            <a href="{{ route('detailAnimaux', $animal->id) }}" class="btn btn-outline-primary">Voir
                                plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Section services --}}
    <section class="container my-5">
        <h2 class="text-center text-primary">Découvrez nos services et animations</h2>
        <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100 border-0 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $service->img1) }}" class="card-img-top img-fluid"
                            style="max-height: 250px; max-width: 100%; object-fit: contain;"
                            alt="Image du service {{ $service->nom }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $service->nom }}</h5>
                            <a href="{{ route('detailHabitat', $service->id) }}" class="btn btn-outline-primary">Voir
                                plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Section 10 derniers com --}}
    <section class="container my-5">
        <h2 class="text-center text-primary">Les dix derniers commentaires</h2>
        <table class="table table-hover border">
            <caption>Les derniers avis de nos visiteurs</caption>
            <thead>
                <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($coms) && count($coms) > 0)
                    @foreach ($coms as $com)
                        <tr>
                            <td>{{ $com->pseudo }}</td>
                            <td>{{ $com->commentaire }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">Aucun commentaire pour le moment.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </section>

    {{-- Section commentaires --}}
    <section class="container text-center my-5">
        <a href="/formCommentaire" class="btn btn-primary mb-3">Laissez-nous votre témoignage, impression ou commentaire</a>
        <a href="/allCommentaire" class="btn btn-primary mb-3">Afficher tous les commentaires</a>
    </section>
@endsection
