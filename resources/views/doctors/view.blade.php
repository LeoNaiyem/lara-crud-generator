@extends('layouts.main')
@section('content')
    <h2>View Doctor</h2>
<div class="mb-2">
    <strong>Id:</strong> {{ $doctor->id }}
</div>
<div class="mb-2">
    <strong>Name:</strong> {{ $doctor->name }}
</div>
<div class="mb-2">
    <strong>Phone:</strong> {{ $doctor->phone }}
</div>
<div class="mb-2">
    <strong>Designation id:</strong> {{ $doctor->designation->name ?? $doctor->designation_id }}
</div>
<div class="mb-2">
    <strong>Department id:</strong> {{ $doctor->department->name ?? $doctor->department_id }}
</div>
<div class="mb-2">
    <strong>Created at:</strong> {{ $doctor->created_at }}
</div>
<div class="mb-2">
    <strong>Updated at:</strong> {{ $doctor->updated_at }}
</div>

    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
@endsection