@extends('layouts.main')
@section('content')
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products._form', ['mode' => 'create', 'product' => new App\Models\Product])
    </form>
@endsection