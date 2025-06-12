@extends('layouts.main')
@section('content')
    <h2>Create Company</h2>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @include('companies._form', ['mode' => 'create', 'company' => new App\Models\Company])
    </form>
@endsection