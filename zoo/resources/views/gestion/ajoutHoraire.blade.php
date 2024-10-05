@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">
        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter une ou deux horaires au site</h2>



            <div class="mb-3">
                <label for="horaire1" class="form-label">Horaire 1</label>
                <input type="text" class="form-control" id="horaire1" name="horaire1" value="{{ old('horaire1') }}">
                @error('horaire1')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="horaire2" class="form-label">Horaire 2</label>
                <input type="text" class="form-control" id="horaire2" name="horaire2" value="{{ old('horaire2') }}">
                @error('horaire2')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary mt-4">Ajouter l'horaire ou les horaires'</button>
            <a href="/gestionHoraire" class="btn btn-primary mt-4">Retour</a>
        </div>

    </form>
@endsection
