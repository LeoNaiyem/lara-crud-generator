@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $doctor->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone', $doctor->phone ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Designation id</label>
    <select name="designation_id" class="form-control">
        <option value="">Select Designation id</option>
        @foreach ($designations as $option)
            <option value="{{ $option->id }}" {{ old('designation_id', $doctor->designation_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Department id</label>
    <select name="department_id" class="form-control">
        <option value="">Select Department id</option>
        @foreach ($departments as $option)
            <option value="{{ $option->id }}" {{ old('department_id', $doctor->department_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>