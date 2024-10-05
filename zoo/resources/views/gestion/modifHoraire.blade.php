@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">
        @csrf

        <input type="hidden" name="id" style="display: none" value="{{ $horaire->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier les horaires d'ouverture</h2>

            <div class="mb-3">
                <label for="horaire1" class="form-label">Plage horaire 1</label>
                <input type="text" class="form-control" id="horaire1" name="horaire1" value="{{ $horaire->horaire1 }}">
                @error('horaire1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="horaire2" class="form-label">Plage horaire 2</label>
                <input type="text" class="form-control" id="horaire2" name="horaire2" value="{{ $horaire->horaire2 }}">
                @error('horaire2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier les horaires</button>
            <a href="/gestionService" class="btn btn-primary mt-4">Retour</a>
        </div>

    </form>
@endsection
