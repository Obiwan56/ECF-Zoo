@foreach ($animals as $animal)
    <div class="col mb-4">
        <div class="card">
            <img src="{{ asset('storage/' . $animal->img1) }}" class="card-img-top" alt="{{ $animal->prenom }}" style="max-height: 250px; object-fit: contain;">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $animal->prenom }} ({{ $animal->race }})</h5>
                <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="/detailAnimaux/{{ $animal->id }}">Voir détail</a>
            </div>
        </div>
    </div>
@endforeach
