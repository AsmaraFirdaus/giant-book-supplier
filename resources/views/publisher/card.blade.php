<div class="col">
    <div class="card h-100">
        <div class="row g-0 h-100">
            <div class="col-md-4 d-flex align-items-center">
                <img src="{{ Storage::url($publisher->image) }}" class="img-fluid rounded"
                    alt="{{ $publisher->name . ' image' }}">
            </div>
            <div class="col-md-8">
                <div class="card-body h-100 d-flex flex-column">
                    <h5 class="card-title">{{ $publisher->name }}</h5>
                    <p class="card-text ">{{ $publisher->address }}</p>
                    <a href="#" class="btn btn-primary mt-auto" style="width: fit-content">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
