@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Body</label>
    <input type="text" name="body" value="{{ old('body', $post->body ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Published at</label>
    <input type="text" name="published_at" value="{{ old('published_at', $post->published_at ?? '') }}" class="form-control">
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>