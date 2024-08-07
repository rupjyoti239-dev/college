@extends('Admin.layout.main')
@section('content')
<div class="container">
  <h3 class="text-center mt-5">Update Department</h3>

  <form action="{{ route('admin.department.update',['id'=>$department->id]) }}" method="POST" class="mt-4">
    @csrf
    @method('PUT')

    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="department_name">Department Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="text" id="department_name" name="department_name" class="form-control"
          value="{{ $department->department_name }}">
        <span class="text-danger">
          @error('department_name')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>

    <div class="mb-3 row">
      <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>

</div>
@endsection