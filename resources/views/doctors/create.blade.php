@extends('layouts.main')
@section('content')
    <h2>Create Doctor</h2>
    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @include('doctors._form', ['mode' => 'create', 'doctor' => new App\Models\Doctor])
    </form>
@endsection