@extends('layouts.main')
@section('content')
    <h2>Edit Test</h2>
    <form action="{{ route('tests.update', $test->id) }}" method="POST" enctype="multipart/form-data">
        @include('tests._form', ['mode' => 'edit', 'test' => $test])
    </form>
@endsection