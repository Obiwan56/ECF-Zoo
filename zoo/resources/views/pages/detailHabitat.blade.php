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
                <h1 class="text-center fw-bold">{{ $habitat->nom }}</h1>
                <img id="imagePrincipale" src="{{ asset('storage/' . $habitat->img1) }}" class="d-block w-100" alt="...">
                <!-- Galerie d'images -->
                <div class="row mt-3 galerie-images">
                    @for ($i = 1; $i <= 3; $i++)
                        @if (!empty($habitat["img$i"]))
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $habitat["img$i"]) }}" class="img-thumbnail miniature"
                                    alt="...">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="col-md-6">
                <h3>Voilà ou ils habitent</h3>

                <div class="container pcarrosserie">{{ $habitat->description }}</div>
                <br>


            </div>
        </div>

        <a href="/habitat" class="btn btn-primary">Retour à la liste des habitats</a>
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
