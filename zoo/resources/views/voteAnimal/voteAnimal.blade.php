@extends('squelette')

@section('contenu')
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center mt-4">
                {{ $votes->links() }}
            </div>
            @foreach ($votes as $vote)
                <div class="col-md-3 mb-3">
                    <div class="card text-center" style="padding: 0.5rem;">
                        <div style="height: 150px; overflow: hidden; border-radius: 10px;">
                            <img src="{{ asset('storage/' . $vote->photo) }}" class="card-img-top img-fluid"
                                 alt="{{ $vote->name }}"
                                 style="height: 100%; width: 100%; object-fit: contain;">
                        </div>
                        <div class="card-body p-2">
                            <h6 class="card-title fw-bold">{{ $vote->name }}</h6>
                            <p class="card-title text-muted mb-1">{{ $vote->race }}</p>
                            <p class="card-text">Votes: <strong>{{ $vote->votes }}</strong></p>
                            <form action="{{ route('animal_votes.increment', $vote) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm w-100">Vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
