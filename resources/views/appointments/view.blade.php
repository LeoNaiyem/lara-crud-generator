@extends('layouts.main')
@section('content')
    <h2>View Appointment</h2>
<div class="mb-2">
    <strong>Id:</strong> {{ $appointment->id }}
</div>
<div class="mb-2">
    <strong>Patient id:</strong> {{ $appointment->patient->name ?? $appointment->patient_id }}
</div>
<div class="mb-2">
    <strong>Doctor id:</strong> {{ $appointment->doctor->name ?? $appointment->doctor_id }}
</div>
<div class="mb-2">
    <strong>Appointment at:</strong> {{ $appointment->appointment_at }}
</div>
<div class="mb-2">
    <strong>Cc:</strong> {{ $appointment->cc }}
</div>
<div class="mb-2">
    <strong>Created at:</strong> {{ $appointment->created_at }}
</div>
<div class="mb-2">
    <strong>Updated at:</strong> {{ $appointment->updated_at }}
</div>

    <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
@endsection