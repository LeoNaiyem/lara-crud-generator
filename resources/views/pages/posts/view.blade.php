@extends('layouts.main')
@section('content')
    <!-- Page Header -->
    <div class="card bg-primary mb-3 p-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-item-center ">
                <h3 class=" card-title text-white d-flex align-items-center  m-0">Create __MODEL__</h3>
                <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm" title="Back">
                    <i class="fa fa-arrow-left mr-1"></i> Back
                </a>
            </div>
        </div>
    </div>
    <div class="mb-2">
        <strong>Id:</strong> {{ $post->id }}
    </div>
    <div class="mb-2">
        <strong>Title:</strong> {{ $post->title }}
    </div>
    <div class="mb-2">
        <strong>Body:</strong> {{ $post->body }}
    </div>
    <div class="mb-2">
        <strong>Published at:</strong> {{ $post->published_at }}
    </div>
    <div class="mb-2">
        <strong>Created at:</strong> {{ $post->created_at }}
    </div>
    <div class="mb-2">
        <strong>Updated at:</strong> {{ $post->updated_at }}
    </div>

@endsection