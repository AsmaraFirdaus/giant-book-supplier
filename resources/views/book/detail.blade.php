@extends('master')
@section('title', 'Book Detail')
@section('content')
    <div class="row">
        <div class="col-lg-2" style="width: 18rem;">
            <img src="{{ asset($book->image) }}" class="img-thumbnail" alt="{{ $book->title . ' Image' }}" />
        </div>
        <div class="col">
            <h5>{{ $book->title }}</h5>
            <p><span class="text-secondary">Author: </span> {{ $book->author }}</p>
            <p><span class="text-secondary">Publisher: </span> {{ $book->publisher->name }}</p>
            <p><span class="text-secondary">Year: </span> {{ $book->year }}</p>
            <p class="m-0"><span class="text-secondary">Synopsis: </span> </p>
            <p class="text-justify">{{ $book->synopsis }}</p>
            <div class="d-flex align-items-center">
                <span class="text-secondary">Category: </span>
                <div class="d-flex">
                    @foreach ($book->categories as $c)
                        <a href="{{ route('category.detail', $c->id) }}"
                            class="mx-2 px-2 py-1 btn btn-outline-dark">{{ $c->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
