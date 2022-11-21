@extends('master')
@section('title', 'Publisher')
@section('content')
    <div class="px-5 py-3 container">
        <div class="row row-cols-2 gx-3 gy-3">
            @foreach ($publishers as $p)
                @include('publisher.card', ['publisher' => $p])
            @endforeach
        </div>
    </div>
@endsection
