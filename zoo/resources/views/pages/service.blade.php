@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Nos Services</h1>
        </div>
    </div>
    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <section>
        @foreach ($services as $key => $service)
            <article class="service-article {{ $key % 2 != 0 ? 'fond-noir' : '' }}">
                <div class="container p-4">
                    <h2 class="text-center text-primary">{{ $service->nom }}</h2>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <p class="pcarrosserie">{{ $service->description }}</p>
                            {{-- <div class="bouton p-4">
                                <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                            </div> --}}
                        </div>
                        <div class="col-12 col-md-6 d-none d-md-block">
                            <div id="carouselExampleInterval{{ $service->id }}" class="carousel slide"
                                data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="{{ asset('storage/' . $service->img1) }}" class="d-block w-100 carousel-img" alt="Image 1">
                                    </div>
                                    @if($service->img2)
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset('storage/' . $service->img2) }}" class="d-block w-100 carousel-img" alt="Image 2">
                                        </div>
                                    @endif
                                    @if($service->img3)
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset('storage/' . $service->img3) }}" class="d-block w-100 carousel-img" alt="Image 3">
                                        </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleInterval{{ $service->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleInterval{{ $service->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </section>

    <style>
        .fond-noir {
            color: grey;
            background-color: #262526;
        }

        /*  taille fixe images du carrousel */
        .carousel-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Inverse ordre des colonnes sur écran taille moyenne et plus grands */
        @media (min-width: 768px) {
            .service-article:nth-child(even) .row-cols-2 .col:first-child {
                order: 2;
            }

            .service-article:nth-child(even) .row-cols-2 .col:last-child {
                order: 1;
            }
        }
    </style>
@endsection
