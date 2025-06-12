@extends('layouts.main')
@section('content')
    <h2>Edit Company</h2>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @include('companies._form', ['mode' => 'edit', 'company' => $company])
    </form>
@endsection