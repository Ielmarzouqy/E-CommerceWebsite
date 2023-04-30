@foreach ($products as $product)
    <div class="product">
        <h2>{{ $product->title }}</h2>
        <p>{{ $product->description }}</p>
        <img src="{{ $product->cover }}" alt="{{ $product->title }}">
        <p>Price: {{ $product->price }}</p>
    </div>
@endforeach
