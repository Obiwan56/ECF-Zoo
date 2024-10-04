@extends('squelette')

<style>
    .center-content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        /* Alignement vers le haut */
        padding-top: 50px;
        padding-left: 7.5%;
        /* Espace en haut pour éviter que le formulaire ne touche l'en-tête */
    }

    .card-custom {
        width: 100%;
        /* Pour que la carte prenne toute la largeur du col */
        max-width: 500px;
        /* Largeur maximale du formulaire */
    }
</style>

@section('contenu')

    <div class="p-4">
        @if (session('danger'))
            <div class="alert alert-danger m-4">
                {{ session('danger') }}
            </div>
        @endif
    </div>

    <div class="container">
        <h1 class="text-center text-primary mb-4">Réservé au membre du personnel</h1>
        <div class="center-content">
            <div class="col-lg-6">
                <div class="card card-custom">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Adresse Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">{{ __('Connexion') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
