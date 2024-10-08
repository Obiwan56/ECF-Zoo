@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des services du parc</h1>

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
                <a href="/ajoutService">Ajouter un service <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des services</caption>
                <thead>
                    <tr>
                        <th scope>Nom</th>
                        <th scope>Description</th>
                        <th scope>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td class="d-none d-lg-table-cell">{{ $service->nom }}</td>
                            <td class="d-none d-lg-table-cell">{{ $service->description }}</td>
                            <td>
                                <a href="/modifService/{{ $service->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $service->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $service->id }}"
                            aria-labelledby="modal_{{ $service->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer ce Service?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effacerService/{{ $service->id }}" class="btn btn-warning">Supprimer</a>
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
