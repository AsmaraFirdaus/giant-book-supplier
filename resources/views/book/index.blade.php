@extends('master')
@section('title', 'Book List')
@section('content')
    <div class="px-5 py-3">
        <div class="row row-cols-4 gy-4">
            @foreach ($books as $b)
                @include('book.card', ['book' => $b])
            @endforeach
        </div>
    </div>
@endsection
