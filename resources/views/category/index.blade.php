@extends('master')
@section('title', 'Category: ' . $category->name)
@section('content')
    <div class="px-5 py-3">
        <div class="row row-cols-4">
            @foreach ($category->books as $b)
                @include('book.card', ['book' => $b])
            @endforeach
        </div>
    </div>
@endsection
