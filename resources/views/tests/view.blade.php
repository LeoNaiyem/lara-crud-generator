@extends('layouts.main')
@section('content')
    <h2>View Test</h2>
<div class="mb-2">
    <strong>Id:</strong> {{ $test->id }}
</div>
<div class="mb-2">
    <strong>Name:</strong> {{ $test->name }}
</div>
<div class="mb-2">
    <strong>Created at:</strong> {{ $test->created_at }}
</div>
<div class="mb-2">
    <strong>Updated at:</strong> {{ $test->updated_at }}
</div>

    <a href="{{ route('tests.index') }}" class="btn btn-secondary">Back</a>
@endsection