<div class="row">
    @foreach($products as $product)
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $product->title }}</h3>
                    <p class="text-muted">{{ $product->category ? $product->category->name : 'Uncategorized' }}</p>
                </div>
                <div class="card-body">
                    <p>{{ substr($product->description, 0, 100) }}</p>
                    <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary btn-block">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>