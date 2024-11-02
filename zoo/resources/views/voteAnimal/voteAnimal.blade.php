@extends('squelette')

@section('contenu')
    <div class="container p-4">
        <div class="row">
            @foreach ($votes as $vote)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $vote->photo) }}" class="card-img-top img-fluid"
                            alt="{{ $vote->name }}"
                            style="height: 200px; width: 100%; object-fit: contain; border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vote->name }}</h5>
                            <p class="card-text">Votes: <strong>{{ $vote->votes }}</strong></p>
                            <form action="{{ route('animal_votes.increment', $vote) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">Vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
