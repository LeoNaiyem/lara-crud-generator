@extends('layouts.main')
@section('content')
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @include('products._form', ['mode' => 'edit', 'product' => $product])
    </form>
@endsection