@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter un Animal</h2>
            <div class="mb-3">
                <label for="race" class="form-label">Race</label>
                <input type="text" class="form-control" id="race" name="race" value="{{ old('race') }}">
                @error('race')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">
                @error('prenom')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="etat" class="form-label">Rapport sur l'animal</label>
                <textarea id="etat" class="form-control" name="etat">{{ old('etat') }}</textarea>
                @error('etat')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img1">Photo</label>
                <input type="file" name="img1" id="img1" class="form-control">

                @error('img1')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="img2">Photo 2 (facultative)</label>
                <input type="file" name="img2" id="img2" class="form-control">

                @error('img2')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="img3">Photo 3 (facultative)</label>
                <input type="file" name="img3" id="img3" class="form-control">

                @error('img3')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="img4">Photo 4 (facultative)</label>
                <input type="file" name="img4" id="img4" class="form-control">

                @error('img4')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="img5">Photo 5 (facultative)</label>
                <input type="file" name="img5" id="img5" class="form-control">

                @error('img5')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter l'Animal</button>
            <a href="/gestionAnimal" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
