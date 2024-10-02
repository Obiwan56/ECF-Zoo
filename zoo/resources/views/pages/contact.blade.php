@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Formulaire de contact</h1>
        </div>
    </div>

    <div class="container p-4">
        <h2 class="text-primary">Contactez-nous</h2>

        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Votre nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Carther" value="{{ old('name') }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Votre prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Sam" value="{{ old('prenom') }}">
                @error('prenom')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Votre e-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="sam@sg1.fr" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Votre numéro de téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0123456789" value="{{ old('phone') }}">
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea id="message" class="form-control" name="message" placeholder="Ça c'est du message">{{ old('message') }}</textarea>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" id="btnContact" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
@endsection
