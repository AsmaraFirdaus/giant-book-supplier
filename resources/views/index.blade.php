@extends('master')
@section('content')
    <h2 class="w-100 text-center">Book List</h2>
    <div class="px-5 py-3">
        <div class="row row-cols-4">
            @foreach ($books as $b)
                <div class="col">
                    <div class="card">
                        <img src="{{ Storage::url($b->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->title }}</h5>
                            <p class="card-text">{{ $b->author }}</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
