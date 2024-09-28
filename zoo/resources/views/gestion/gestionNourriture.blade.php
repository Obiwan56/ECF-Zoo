@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des aliments donnée aux Animaux du parc</h1>

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
                <a href="/ajoutNourriture">Ajouter un Aliment <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des Aliments enregistrés</caption>
                <thead>
                    <tr>
                        <th scope="col">Aliment</th>
                        <th scope="col">Race de l'animal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nourritures as $nourriture)
                        <tr>
                            <td>{{ $nourriture->aliment }}</td>
                            <td>{{ $nourriture->animal->race ?? 'Aucun animal associé' }}</td>
                            <td>
                                <a href="/modifNourriture/{{ $nourriture->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $nourriture->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $nourriture->id }}"
                            aria-labelledby="modal_{{ $nourriture->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer cette nourriture?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effacerNourriture/{{ $nourriture->id }}" class="btn btn-warning">Supprimer</a>
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
