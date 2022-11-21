<div class="col">
    <div class="card">
        <img src="{{ Storage::url($book->image) }}" class="card-img-top" alt="{{ $book->title . ' Image' }}">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text"><i>by</i> {{ $book->author }}</p>
            <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>
