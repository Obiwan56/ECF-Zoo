@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="p-4">Laissez-nous votre impression sur notre parc</h1>
        </div>
    </div>
    <form action="" method="post" class="form-group">

        @csrf

        <div class="container p-4">

            <form action="/contact" method="post">
                <div class="mb-3">
                    <label for="pseudo" class="form-label">Votre prénom ou pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" value="{{ old('pseudo') }}">
                    @error('pseudo')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="commentaire" class="form-label">Votre commentaire</label>
                    <textarea id="commentaire" class="form-control" name="commentaire">{{ old('commentaire') }}</textarea>
                    @error('commentaire')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-5">
                    <button type="submit" class= "btn btn-primary">Envoyer</button>
                    <a href="/" class="btn btn-primary">Retour</a>
                </div>

                <p class="text-danger">Tout contenu inapproprié ou offensant ne sera pas publié.</p>
            </form>
        </div>
    </form>
@endsection
