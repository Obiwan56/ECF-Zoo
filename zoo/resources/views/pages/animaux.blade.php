@extends('squelette')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Nos Ami(e)s pensionnaires</h1>
        </div>
    </div>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-danger m-4">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container-fluid mt-4">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
            @foreach ($animals as $animal)
                <input type="text" name="id" style="display: none" value="{{ $animal->id }}">

                <div class="col mb-4">
                    <div class="card">
                        <div id="carouselExampleInterval{{ $animal->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $animal->img1) }}" class="d-block w-100" alt="Image 1">
                                </div>
                                @if ($animal->img2)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $animal->img2) }}" class="d-block w-100" alt="Image 2">
                                    </div>
                                @endif
                                @if ($animal->img3)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $animal->img3) }}" class="d-block w-100" alt="Image 3">
                                    </div>
                                @endif
                                @if ($animal->img4)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $animal->img4) }}" class="d-block w-100" alt="Image 4">
                                    </div>
                                @endif
                                @if ($animal->img5)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $animal->img5) }}" class="d-block w-100" alt="Image 5">
                                    </div>
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval{{ $animal->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval{{ $animal->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $animal->prenom }}</h5>
                            <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="/detailAnimaux/{{ $animal->id }}">Voir détail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

<style>
.carousel-inner {
    height: 300px; /* Ajustez la hauteur selon vos besoins */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Remplit le conteneur en recadrant l'image */
}
</style>
