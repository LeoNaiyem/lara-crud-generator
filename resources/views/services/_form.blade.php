@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $service->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Description</label>
    <input type="text" name="description" value="{{ old('description', $service->description ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Price</label>
    <input type="text" name="price" value="{{ old('price', $service->price ?? '') }}" class="form-control">
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>