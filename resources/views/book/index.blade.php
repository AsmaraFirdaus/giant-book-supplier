@extends('master')
@section('title', 'Book List')
@section('content')
    <div class="px-5 py-3">
        <div class="row row-cols-4">
            @foreach ($books as $b)
                <div class="col">
                    <div class="card">
                        <img src="{{ Storage::url($b->image) }}" class="card-img-top" alt="{{ $b->title . ' Image' }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->title }}</h5>
                            <p class="card-text"><i>by</i> {{ $b->author }}</p>
                            <a href="{{ route('book.detail', $b->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
