@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion du personnel</h1>

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
                <a href="/ajoutEmploye">Ajouter un ou une employé(e) <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des employé(e)s</caption>
                <thead>
                    <tr>
                        <th scope>Email</th>
                        <th scope class="d-none d-lg-table-cell">Nom</th>
                        <th scope class="d-none d-lg-table-cell">Prénom</th>
                        <th scope class="d-none d-sm-table-cell">Role</th>
                        <th scope>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td class="d-none d-lg-table-cell">{{ $user->name }}</td>
                            <td class="d-none d-lg-table-cell">{{ $user->prenom }}</td>
                            <td class="d-none d-sm-table-cell">{{ $user->role }}</td>
                            <td>
                                <a href="/modifEmploye/{{ $user->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $user->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $user->id }}"
                            aria-labelledby="modal_{{ $user->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer cet employé?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effacerEmploye/{{ $user->id }}" class="btn btn-warning">Supprimer</a>
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
