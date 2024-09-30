@extends('squelette')

@section('contenu')
<form action="" method="post" class="form-group" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" style="display: none" value="{{ $rapport->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier le rapport de l'animal</h2>


            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', \Carbon\Carbon::parse($rapport->date)->format('Y-m-d')) }}">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Remarque</label>
                <textarea id="detail" class="form-control" name="detail">{{ old('detail', $rapport->detail) }}</textarea>
                @error('detail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="animal_id" class="form-label">Choisir un animal</label>
                <select id="animal_id" name="animal_id" class="form-control">
                    <option value="">Sélectionnez un animal</option>
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}" {{ $rapport->animal_id == $animal->id ? 'selected' : '' }}>
                            {{ $animal->prenom }}
                        </option>
                    @endforeach
                </select>
                @error('animal_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-4">Modifier le rapport</button>
            <a href="/gestionRapportVeto" class="btn btn-primary mt-4">Retour</a>
        </div>

    </form>
@endsection
