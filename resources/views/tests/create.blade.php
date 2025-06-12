@extends('layouts.main')
@section('content')
    <h2>Create Test</h2>
    <form action="{{ route('tests.store') }}" method="POST" enctype="multipart/form-data">
        @include('tests._form', ['mode' => 'create', 'test' => new App\Models\Test])
    </form>
@endsection