@extends('squelette')

@section('contenu')
    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-danger m-4">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center fw-bold">{{ $animal->race }} {{ $animal->prenom }}</h1>
                <img id="imagePrincipale" src="{{ asset('storage/' . $animal->img1) }}" class="d-block w-100" alt="...">
                <!-- Galerie d'images -->
                <div class="row mt-3 galerie-images">
                    @for ($i = 1; $i <= 5; $i++)
                        @if (!empty($animal["img$i"]))
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $animal["img$i"]) }}" class="img-thumbnail miniature"
                                    alt="...">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="col-md-6">
                <h3>Un petit mot sur cette gentille bête</h3>
                <div class="container pcarrosserie">{{ $animal->etat }}</div>
                <br>

                <!-- Affichage de l'habitat -->
                @if ($animal->habitat)
                    <h3>Habitat</h3>
                    <p>{{ $animal->habitat->nom }}</p>
                    <img src="{{ asset('storage/' . $animal->habitat->img1) }}" class="d-block w-100 img-thumbnail" alt="Habitat de l'animal">
                    <a href="{{ route('detailHabitat', $animal->habitat->id) }}" class="btn btn-primary mt-3">Voir l'habitat</a>
                @else
                    <p>Aucun habitat trouvé pour cet animal.</p>
                @endif

            </div>
        </div>

        <a href="/animaux" class="btn btn-primary mt-4">Retour à la liste des animaux</a>
    </div>

    <script>
        // Sélection des miniatures
        const miniatures = document.querySelectorAll('.miniature');

        // Ajout d'un écouteur d'événement pour chaque miniature
        miniatures.forEach(miniature => {
            miniature.addEventListener('click', () => {
                const imagePath = miniature.getAttribute('src');
                const imagePrincipale = document.getElementById('imagePrincipale');
                imagePrincipale.setAttribute('src', imagePath);
            });
        });
    </script>
@endsection
