@extends('squelette')

@section('contenu')
<form action="" method="post" class="form-group" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" style="display: none" value="{{ $repas->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier le Repas de l'animal</h2>

            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité en grammes</label>
                <input type="number" class="form-control" id="quantite" name="quantite" value="{{ old('quantite', $repas->quantite) }}" step="0.01" min="0">
                @error('quantite')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', \Carbon\Carbon::parse($repas->date)->format('Y-m-d')) }}">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="observation" class="form-label">Remarque</label>
                <textarea id="observation" class="form-control" name="observation">{{ old('observation', $repas->observation) }}</textarea>
                @error('observation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="animal_id" class="form-label">Choisir un animal</label>
                <select id="animal_id" name="animal_id" class="form-control">
                    <option value="">Sélectionnez un animal</option>
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}" {{ $repas->animal_id == $animal->id ? 'selected' : '' }}>
                            {{ $animal->prenom }}
                        </option>
                    @endforeach
                </select>
                @error('animal_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nourriture_id" class="form-label">Choisir une nourriture</label>
                <select id="nourriture_id" name="nourriture_id" class="form-control">
                    <option value="">Sélectionnez une nourriture</option>
                    @foreach ($nourritures as $nourriture)
                        <option value="{{ $nourriture->id }}" {{ $repas->nourriture_id == $nourriture->id ? 'selected' : '' }}>
                            {{ $nourriture->aliment }}
                        </option>
                    @endforeach
                </select>
                @error('nourriture_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier le Repas</button>
            <a href="/gestionRepasAnimal" class="btn btn-primary mt-4">Retour</a>
        </div>

    </form>
@endsection
