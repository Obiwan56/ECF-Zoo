@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des Rapports de l'équipe des vétérinaires</h1>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container">
        <div class="col-xl">
            @if (auth()->user()->role === 'veto')
                <div>
                    <a href="/ajoutRapportVeto">Ajouter un rapport sur un animal <i class="bi bi-plus-lg icon2"></i></a>
                </div>
            @endif

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des Rapports à ce jour</caption>
                <thead>
                    <tr>
                        <th scope>Animal</th>
                        <th scope>Date</th>
                        <th scope class="d-none d-lg-table-cell">Detail</th>
                        <th scope class="d-none d-lg-table-cell">Date de modification</th>
                        <th scope>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rapports as $rapport)
                        <tr>
                            <td>{{ $rapport->animal->prenom }}</td>
                            <td>{{ \Carbon\Carbon::parse($rapport->date)->format('d-m-Y') }}</td>
                            <td class="d-none d-lg-table-cell">{{ Str::limit($rapport->detail, 50) }}</td>
                            <td class="d-none d-lg-table-cell">{{ $rapport->updated_at->addHours(2)->format('d-m-Y H:i') }}
                            </td>
                            <td>
                                @if (auth()->user()->role === 'veto')
                                    <a href="/modifRapportVeto/{{ $rapport->id }}" class="btn btn-primary">Modifier</a>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#idmodal_{{ $rapport->id }}">Supprimer</button>
                                @endif

                                @if (auth()->user()->role === 'admin')
                                    <a href="/detailRapportVeto/{{ $rapport->id }}" class="btn btn-secondary">Détail</a>
                                @endif

                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $rapport->id }}"
                            aria-labelledby="modal_{{ $rapport->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer ce rapport?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/deleteRapport/{{ $rapport->id }}" class="btn btn-warning">Supprimer</a>
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
