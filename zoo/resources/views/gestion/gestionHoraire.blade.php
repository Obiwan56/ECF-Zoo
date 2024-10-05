@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des Horaires visible sur le site</h1>

    <div class="p-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>



    <div class="p-4">
        <div class="col-xl">
            <div>
                <a href="/ajoutHoraire">Ajouter horaire <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Horaires affichées</caption>
                <thead>
                    <tr>
                        <th>Plage horaire 1</th>
                        <th>Plage horaire 2</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horaires as $horaire)
                        <tr>
                            <td>{{ $horaire->horaire1 }}</td>
                            <td>{{ $horaire->horaire2 }}</td>



                            <td>
                                <a href="/modifHoraire/{{ $horaire->id }}" class="btn btn-primary">Modifier</a>
                                {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $horaire->id }}">Supprimer</button> --}}
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $horaire->id }}"
                            aria-labelledby="modal_{{ $horaire->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer cette horaire?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/deleteHoraire/{{ $horaire->id }}" class="btn btn-warning">Supprimer</a>
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
