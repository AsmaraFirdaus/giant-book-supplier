@extends('master')
@section('title', 'Book Detail')
@section('content')
    <div class="row">
        <div class="col-lg-2" style="width: 18rem;">
            <img src="{{ asset($book->image) }}" class="img-thumbnail" alt="{{ $book->title . ' Image' }}" />
        </div>
        <div class="col">
            <h5>{{ $book->title }}</h5>
            <p>Author: {{ $book->author }}</p>
            <p>Publisher: {{ $book->publisher->name }}</p>
            <p>Year: {{ $book->year }}</p>
            <p class="m-0">Synopsis: </p>
            <p class="text-justify">{{ $book->synopsis }}</p>
        </div>
    </div>
@endsection
