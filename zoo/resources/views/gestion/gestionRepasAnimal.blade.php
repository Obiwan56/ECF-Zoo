@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des repas donnée aux Animaux du parc</h1>

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
                <a href="/ajoutRepasAnimal">Ajouter un Repas <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des Repas triés par date</caption>
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Quantité</th>
                        <th class="d-none d-lg-table-cell" scope="col">Observation</th>
                        <th scope="col">Animal</th>
                        <th class="d-none d-lg-table-cell" scope="col">Nourriture</th>
                        <th class="d-none d-lg-table-cell" scope="col">Date d'enregistrement</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($repas as $repas)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($repas->date)->format('d/m/Y') }}</td>
                            <td>{{ $repas->quantite }} g</td>
                            <td class="d-none d-lg-table-cell">{{ $repas->observation ?? 'Aucune observation' }}</td>
                            <td>{{ $repas->animal->prenom ?? 'Aucun animal associé' }}</td>
                            <td class="d-none d-lg-table-cell">{{ $repas->nourriture->aliment ?? 'Aucun aliment associé' }}</td>
                            <td class="d-none d-lg-table-cell">{{ $repas->updated_at->addHours(2)->format('d-m-Y H:i') }}</td>

                            <td>
                                <a href="/modifRepasAnimal/{{ $repas->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $repas->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $repas->id }}"
                            aria-labelledby="modal_{{ $repas->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer ce repas?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/deleteRepas/{{ $repas->id }}" class="btn btn-warning">Supprimer</a>
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
