@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New</a>
    <table class="table table-bordered">
        <thead><tr><th>Id</th><th>Name</th><th>Price</th><th>Description</th><th>Created at</th><th>Updated at</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach ($products as $item)
            <tr><td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->price }}</td><td>{{ $item->description }}</td><td>{{ $item->created_at }}</td><td>{{ $item->updated_at }}</td><td>
    <a href="{{ route('products.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
    <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
    <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</td></tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection