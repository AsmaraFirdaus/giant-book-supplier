<div class="col">
    <div class="card h-100">
        <img src="{{ Storage::url($book->image) }}" class="card-img-top" alt="{{ $book->title . ' Image' }}">
        <div class="card-body h-100 d-flex flex-column">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text"><i>by</i> {{ $book->author }}</p>
            <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary mt-auto">Detail</a>
        </div>
    </div>
</div>
