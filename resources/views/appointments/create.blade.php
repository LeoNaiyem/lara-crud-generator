@extends('layouts.main')
@section('content')
    <h2>Create Appointment</h2>
    <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
        @include('appointments._form', ['mode' => 'create', 'appointment' => new App\Models\Appointment])
    </form>
@endsection