@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $users->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modification de l'employé(e)</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
            @error('name')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>


            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $users->prenom }}">
            @error('prenom')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Prénom</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
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

                <button id="togglePassword" class="btn btn-outline" type="button">
                    <i class="bi bi-eye"></i>
                </button>
            </div>

            <div class="mt-3">
                <label for="role" class="form-label">Choix des droits</label>
                <select id="role" class="form-select" aria-label="Default select example" name="role"
                    value="{{ $users->role }}">
                    <option value="employe">Employe</option>
                    <option value="admin">Admin</option>

                </select>
                @error('role')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier</button>
            <a href="/gestionEmploye" class="btn btn-primary mt-4">Retour</a>


        </div>
    </form>

    <script src="{{ asset('js/ajoutEmploye.js') }}"></script>

@endsection
