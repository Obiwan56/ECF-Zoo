@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des Animaux du parc</h1>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container">
        <div class="col-xl">
            <div>
                <a href="/ajoutAnimaux">Ajouter un animal <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des Animaux</caption>
                <thead>
                    <tr>
                        <th scope>Race</th>
                        <th scope>Prénom</th>
                        <th scope>Etat</th>
                        <th scope>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animals as $animal)
                        <tr>
                            <td class="d-none d-lg-table-cell">{{ $animal->race }}</td>
                            <td class="d-none d-lg-table-cell">{{ $animal->prenom }}</td>
                            <td class="d-none d-lg-table-cell">{{ $animal->etat }}</td>
                            <td>
                                <a href="/modifanimaux/{{ $animal->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $animal->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $animal->id }}"
                            aria-labelledby="modal_{{ $animal->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer cet animal?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effaceranimal/{{ $animal->id }}" class="btn btn-warning">Supprimer</a>
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
