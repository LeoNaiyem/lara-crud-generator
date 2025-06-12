@extends('layouts.main')
@section('content')
    <h2>Edit Service</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @include('services._form', ['mode' => 'edit', 'service' => $service])
    </form>
@endsection