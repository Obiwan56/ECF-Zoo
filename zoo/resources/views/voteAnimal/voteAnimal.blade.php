@extends('squelette')

@section('contenu')
    <div class="container p-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Ajouter un animal pour le vote</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf

                    <!-- Champ pour le nom -->
                    <div class="form-group">
                        <label for="name" class="form-label">Nom :</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                {{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Champ pour la race -->
                    <div class="form-group">
                        <label for="race" class="form-label">Race :</label>
                        <input type="text" name="race" class="form-control" value="{{ old('race') }}">
                        @error('race')
                            <span class="text-danger">
                                {{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Champ pour la photo -->
                    <div class="form-group">
                        <label for="photo" class="form-label">Photo :</label>
                        <input type="file" name="photo" class="form-control">
                        @error('photo')
                            <span class="text-danger">
                                {{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Bouton de soumission -->
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
