@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Doctor List</h1>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Create New</a>
    <table class="table table-bordered">
        <thead><tr><th>Id</th><th>Name</th><th>Phone</th><th>Designation id</th><th>Department id</th><th>Created at</th><th>Updated at</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach ($doctors as $item)
            <tr><td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->phone }}</td><td>{{ optional($item->designation)->name ?? $item->designation_id }}</td><td>{{ optional($item->department)->name ?? $item->department_id }}</td><td>{{ $item->created_at }}</td><td>{{ $item->updated_at }}</td><td>
    <a href="{{ route('doctors.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
    <a href="{{ route('doctors.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
    <form action="{{ route('doctors.destroy', $item->id) }}" method="POST" style="display:inline;">
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