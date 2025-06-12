@extends('layouts.main')
@section('content')
    <h2>View Product</h2>
<div class="mb-2">
    <strong>Id:</strong> {{ $product->id }}
</div>
<div class="mb-2">
    <strong>Name:</strong> {{ $product->name }}
</div>
<div class="mb-2">
    <strong>Price:</strong> {{ $product->price }}
</div>
<div class="mb-2">
    <strong>Description:</strong> {{ $product->description }}
</div>
<div class="mb-2">
    <strong>Created at:</strong> {{ $product->created_at }}
</div>
<div class="mb-2">
    <strong>Updated at:</strong> {{ $product->updated_at }}
</div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection