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

            </div>
            <div class="col-md-6">
                <h3>Rapport</h3>
                <h6>{{ $rapports->updated_at->addHours(2) }}</h6>
                <div class="container pcarrosserie">{{ $rapports->detail }}</div>
                <br>
            </div>
        </div>

        <a href="/gestionRapportVeto" class="btn btn-primary mt-4">Retour à la liste des rapport</a>
    </div>
@endsection
