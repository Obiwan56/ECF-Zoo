@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajout d'un ou d'une employé(e)</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
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
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror

                <button class="btn btn-outline toggle-password" type="button">
                    <i class="bi bi-eye"></i>
                </button>
            </div>

            <div class="mt-3">
                <label for="role" class="form-label">Fonction</label>
                <select id="role" class="form-select" aria-label="Default select example" name="role"
                    value="{{ old('role') }}">
                    <option value="employe">Employé(e)</option>
                    <option value="veto">Vétérinaire</option>
                    {{-- <option value="admin">admin</option> --}}


                </select>
                @error('role')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter</button>
            <a href="/gestionEmploye" class="btn btn-primary mt-4">Retour</a>


        </div>
    </form>

    <script src="{{ asset('js/ajoutEmploye.js') }}"></script>
@endsection
