@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Tous les commentaires</h1>
        </div>
    </div>

    <div class="container p-4">
        <table class="table table-striped" id="tablCom">
            <caption class="caption">Tous les commentaires</caption>
            <tbody>
                @if (isset($coms) && count($coms) > 0)
                    @foreach ($coms as $com)
                        <th scope="row">{{ $com->pseudo }}</th>
                        <td>{{ $com->commentaire }}</td>
                        <td>{{ $com->created_at->format('d/m/Y à H:i') }}</td>
                        {{-- <td>{{ $com->created_at->format('d/m/Y H:i:s') }}</td> --}}

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Aucun commentaire trouvé.</td>
                    </tr>
                @endif

            </tbody>
        </table>

        {{ $coms->links() }}

        <div class="container">
            <a href="/" class="btn btn-primary mb-3 btn-block">Revenir à l'accueil</a>
        </div>

    </div>

@endsection
