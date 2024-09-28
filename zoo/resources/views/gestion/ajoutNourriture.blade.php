@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter un Aliment</h2>
            <div class="mb-3">
                <label for="aliment" class="form-label">Aliment</label>
                <input type="text" class="form-control" id="aliment" name="aliment" value="{{ old('aliment') }}">
                @error('aliment')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="animal_id" class="form-label">animal</label>
                <select id="animal_id" name="animal_id" class="form-control">
                    <option value="">Sélectionnez un animal</option>
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}" {{ old('animal_id') == $animal->id ? 'selected' : '' }}>
                            {{ $animal->race }}
                        </option>
                    @endforeach
                </select>
                @error('animal_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter l'Aliment</button>
            <a href="/gestionAnimal" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
