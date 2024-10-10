@extends('squelette')

@section('contenu')
    <form action="{{ route('modifMdp', ['id' => Auth::user()->id]) }}" method="post" class="form-group">
        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Modification du mot de passe</h2>

            <div class="mb-3">
                <label for="password" class="form-label">Nouveau Mot de passe</label>
                <input type="password" class="form-control password-input" id="password" name="password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <button class="btn btn-outline toggle-password" type="button">
                    <i class="bi bi-eye"></i>
                </button>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmer nouveau Mot de passe</label>
                <input type="password" class="form-control password-input" id="password_confirmation"
                    name="password_confirmation" required>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <button class="btn btn-outline toggle-password" type="button">
                    <i class="bi bi-eye"></i>
                </button>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier</button>
            <a href="/" class="btn btn-primary mt-4">Retour</a>
        </div>
    </form>

    <script src="{{ asset('js/ajoutEmploye.js') }}"></script>
@endsection
