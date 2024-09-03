@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $services->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier un service</h2>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $services->nom }}">
                @error('nom')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description">{{ $services->description }}</textarea>
                @error('description')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img1">Photo 1</label>
                <input type="file" name="img1" id="img1" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $services->img1 }}">
                @if ($services->img1)
                    <img src="{{ asset('storage/' . $services->img1) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img2">Photo 2</label>
                <input type="file" name="img2" id="img2" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $services->img2 }}">
                @if ($services->img2)
                    <img src="{{ asset('storage/' . $services->img2) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img3">Photo 3</label>
                <input type="file" name="img3" id="img3" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $services->img3 }}">
                @if ($services->img3)
                    <img src="{{ asset('storage/' . $services->img3) }}" alt="" style="max-width: 150px;">
                @endif
                @error('img3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier le service</button>
            <a href="/gestionService" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
