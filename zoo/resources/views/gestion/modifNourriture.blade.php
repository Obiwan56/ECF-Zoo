@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $nourriture->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier la nourriture</h2>
            <div class="mb-3">
                <label for="aliment" class="form-label">aliment</label>
                <input type="text" class="form-control" id="aliment" name="aliment" value="{{ $nourriture->aliment }}">
                @error('aliment')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="animal_id" class="form-label">Animal</label>
                <select id="animal_id" name="animal_id" class="form-control">
                    <option value="">Sélectionner un animal</option>
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}" {{ $nourriture->animal_id == $animal->id ? 'selected' : '' }}>
                            {{ $animal->race }}
                        </option>
                    @endforeach
                </select>
                @error('animal_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-4">Modifier la nourriture</button>
            <a href="/gestionNourriture" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
