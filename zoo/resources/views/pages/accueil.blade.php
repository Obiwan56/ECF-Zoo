@extends('squelette')

@section('contenu')
    <div class="p-4">
        @if (session('danger'))
            <div class="alert alert-danger m-4">
                {{ session('danger') }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <h1 class="text-primary text-center">Bienvenue au parc Arcadia</h1>

    <div class="p-4">

        <h2 class="text-center p-4 text-primary">Découvrez nos habitats</h2>
        <div class="row">
            @foreach ($habitats as $habitat)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="width: 100%; background-color: #D3D3D3;">
                        <!-- Ajustement de la taille de l'image -->
                        <img src="{{ asset('storage/' . $habitat->img1) }}" class="card-img-top img-fluid"
                            style="height: 200px; width: 100%; object-fit: contain;"
                            alt="Image de l'habitat {{ $habitat->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $habitat->nom }}</h5>
                            <a href="{{ route('detailHabitat', $habitat->id) }}" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-center p-4 text-primary">Découvrez nos ami(e)s pensionnaires</h2>
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="width: 100%; background-color: #D3D3D3;">
                        <!-- Ajustement de la taille de l'image -->
                        <img src="{{ asset('storage/' . $animal->img1) }}" class="card-img-top img-fluid"
                            style="height: 200px; width: 100%; object-fit: contain;"
                            alt="Image de l'animal {{ $animal->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $animal->nom }}</h5>
                            <a href="{{ route('detailAnimaux', $animal->id) }}" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-center p-4 text-primary">Découvrez nos services et animations</h2>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="width: 100%; background-color: #D3D3D3;">
                        <!-- Ajustement de la taille de l'image -->
                        <img src="{{ asset('storage/' . $service->img1) }}" class="card-img-top img-fluid"
                            style="height: 200px; width: 100%; object-fit: contain;"
                            alt="Image du service {{ $service->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->nom }}</h5>
                            <a href="{{ route('detailHabitat', $service->id) }}" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <table class="table table-striped" id="tablCom">
            <caption class="caption-top">Les dix derniers commentaires</caption>
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
                        <td colspan="2">Aucun commentaire trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="row justify-content-center m-1">
        <div class="col-xl-6">
            <a href="/formCommentaire" class="btn btn-primary mb-3 btn-block">Laissez-nous votre témoignage, impression ou
                commentaire</a>
            <a href="/allCommentaire" class="btn btn-primary mb-3 btn-block">Afficher tous les commentaires</a>
        </div>
    </div>
    </div>
@endsection
