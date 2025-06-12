@extends('layouts.main')
@section('content')
    <h2>Edit Appointment</h2>
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST" enctype="multipart/form-data">
        @include('appointments._form', ['mode' => 'edit', 'appointment' => $appointment])
    </form>
@endsection