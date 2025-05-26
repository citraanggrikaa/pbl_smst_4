@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4>Hasil pencarian untuk: <strong>{{ $query }}</strong></h4>

    @if($results->count())
        <div class="row">
            @foreach($results as $result)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/'.$result->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $result->title }}</h5>
                            <p class="card-text">{{ Str::limit($result->description, 100) }}</p>
                            <a href="{{ route('destination', $result->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Tidak ada hasil ditemukan.</p>
    @endif
</div>
@endsection
