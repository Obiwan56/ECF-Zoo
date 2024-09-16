@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter un habitat</h2>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                @error('nom')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description de l'habitat</label>
                <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
                @error('description')
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

            <button type="submit" class="btn btn-primary mt-4">Ajouter l'habitat</button>
            <a href="/gestionhabitat" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
