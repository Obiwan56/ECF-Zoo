@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des votes du parc</h1>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="p-4">
        <div class="col-xl">
            <div>
                <a href="/ajoutAnimalVote">Ajouter un animal pour le vote <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des animaux</caption>
                <thead>
                    <tr>
                        <th scope>Nom</th>
                        <th scope>race</th>
                        <th scope>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($votes as $vote)
                        <tr>
                            <td>{{ $vote->name }}</td>
                            <td>{{ $vote->race }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $vote->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $vote->id }}"
                            aria-labelledby="modal_{{ $vote->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer ce vote?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/deleteVote/{{ $vote->id }}" class="btn btn-warning">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
