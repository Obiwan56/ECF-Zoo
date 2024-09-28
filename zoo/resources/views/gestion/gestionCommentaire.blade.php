@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des commentaires</h1>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="p-4">
        <a href="/listeComPubli">Voir les commentaires publiés</a>
    </div>

    <div class="p-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coms as $com)
                    <tr>
                        <td>{{ $com->pseudo }}</td>
                        <td>{{ $com->commentaire }}</td>
                        <td>
                            <a href="/aprouvCom/{{ $com->id }}" class="btn btn-primary">Approuver</a>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $com->id }}">Supprimer</button>
                        </td>
                    </tr>

                    <!-- Modal spécifique à chaque commentaire -->
                    <div class="modal fade dark" id="modal{{ $com->id }}" aria-labelledby="modal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Supprimer</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Etes-vous sûr de vouloir supprimer ce commentaire?</p>
                                </div>
                                <div class="modal-footer m-4">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="close">Fermer</button>
                                    <a href="/deleteCom/{{ $com->id }}" class="btn btn-danger">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection





