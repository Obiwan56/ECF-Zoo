@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $animals->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier un animal</h2>
            <div class="mb-3">
                <label for="race" class="form-label">Race</label>
                <input type="text" class="form-control" id="race" name="race" value="{{ $animals->race }}">
                @error('race')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $animals->prenom }}">
                @error('prenom')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="etat" class="form-label">Rapport sur l'animal</label>
                <textarea id="etat" class="form-control" name="etat">{{ $animals->etat }}</textarea>
                @error('etat')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img1">Photo 1</label>
                <input type="file" name="img1" id="img1" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $animals->img1 }}">
                @if ($animals->img1)
                    <img src="{{ asset('storage/' . $animals->img1) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img2">Photo 2</label>
                <input type="file" name="img2" id="img2" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $animals->img2 }}">
                @if ($animals->img2)
                    <img src="{{ asset('storage/' . $animals->img2) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img3">Photo 3</label>
                <input type="file" name="img3" id="img3" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $animals->img3 }}">
                @if ($animals->img3)
                    <img src="{{ asset('storage/' . $animals->img3) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img4">Photo 3</label>
                <input type="file" name="img4" id="img4" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $animals->img4 }}">
                @if ($animals->img4)
                    <img src="{{ asset('storage/' . $animals->img4) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img4')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img5">Photo 3</label>
                <input type="file" name="img5" id="img5" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $animals->img5 }}">
                @if ($animals->img5)
                    <img src="{{ asset('storage/' . $animals->img5) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img5')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier l'animal</button>
            <a href="/gestionanimal" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
