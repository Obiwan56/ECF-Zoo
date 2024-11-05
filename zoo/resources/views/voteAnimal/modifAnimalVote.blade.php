@extends('squelette')

@section('contenu')
    <form action="{{ route('modifVote', $votes->id) }}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $votes->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier l'animal pour le vote</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $votes->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="race" class="form-label">Race</label>
                <input type="text" id="race" class="form-control" name="race" value="{{ $votes->race }}">
                @error('race')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label for="votes" class="form-label">Vote</label>
                <input type="number" id="votes" class="form-control" name="votes" value="{{ $votes->votes }}">
                @error('votes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control">
                <input type="hidden" name="image_old" value="{{ $votes->photo }}">
                @if ($votes->photo)
                    <img src="{{ asset('storage/' . $votes->photo) }}" alt="" style="max-width: 150px;">
                @endif
                @error('photo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-4">Modifier la fiche de l'animal pour le vote</button>
            <a href="/gestionVoteAnimal" class="btn btn-primary mt-4">Retour</a>
        </div>
    </form>
@endsection
