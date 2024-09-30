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

    <h1 class="text-primary text-center p-4 ">Bienvenue au parc Arcadia</h1>

    <div class="p-4">
        <table class="table table-striped" id="tablCom">
            <caption class="caption">Les dix derniers commentaires</caption>
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
                        <td colspan="3">Aucun commentaire trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center m-1">
        <div class="col-xl-6">
            <a href="/formCommentaire" class="btn btn-primary mb-3 btn-block">Laissez-nous votre témoignage,
                impression ou commentaire</a>
            <a href="/allCommentaire" class="btn btn-primary mb-3 btn-block">Afficher tous les commentaires</a>
        </div>
    </div>
    </div>
@endsection
