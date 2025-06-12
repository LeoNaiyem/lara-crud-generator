@extends('layouts.main')
@section('content')
    <h2>Edit Doctor</h2>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @include('doctors._form', ['mode' => 'edit', 'doctor' => $doctor])
    </form>
@endsection