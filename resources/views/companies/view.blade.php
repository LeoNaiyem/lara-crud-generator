@extends('layouts.main')
@section('content')
    <h2>View Company</h2>
<div class="mb-2">
    <strong>Id:</strong> {{ $company->id }}
</div>
<div class="mb-2">
    <strong>Name:</strong> {{ $company->name }}
</div>
<div class="mb-2">
    <strong>Address:</strong> {{ $company->address }}
</div>
<div class="mb-2">
    <strong>Phone:</strong> {{ $company->phone }}
</div>
<div class="mb-2">
    <strong>Created at:</strong> {{ $company->created_at }}
</div>
<div class="mb-2">
    <strong>Updated at:</strong> {{ $company->updated_at }}
</div>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
@endsection