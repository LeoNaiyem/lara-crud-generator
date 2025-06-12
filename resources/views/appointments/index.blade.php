@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Appointment List</h1>
    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Create New</a>
    <table class="table table-bordered">
        <thead><tr><th>Id</th><th>Patient id</th><th>Doctor id</th><th>Appointment at</th><th>Cc</th><th>Created at</th><th>Updated at</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach ($appointments as $item)
            <tr><td>{{ $item->id }}</td><td>{{ optional($item->patient)->name ?? $item->patient_id }}</td><td>{{ optional($item->doctor)->name ?? $item->doctor_id }}</td><td>{{ $item->appointment_at }}</td><td>{{ $item->cc }}</td><td>{{ $item->created_at }}</td><td>{{ $item->updated_at }}</td><td>
    <a href="{{ route('appointments.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
    <a href="{{ route('appointments.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
    <form action="{{ route('appointments.destroy', $item->id) }}" method="POST" style="display:inline;">
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