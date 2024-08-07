@extends('Admin.layout.main')
@section('content')
<div class="container">
  <h3 class="text-center mt-5">Create New Subject</h3>

  <form action="{{ route('admin.subject.store') }}" method="POST" class="mt-4">
    @csrf


    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="department_name">Department Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <select name="department_id" id="department" class="form-control">
          @foreach ($departments as $department)
          <option value="{{ $department->id }}">{{ $department->department_name }}</option>
          @endforeach
        </select>
        <span class="text-danger">
          @error('department_id')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>

    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="subject_name">Subject Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="text" id="subject_name" name="subject_name" class="form-control" value="{{ old('subject_name') }}">
        <span class="text-danger">
          @error('subject_name')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>

    <div class="mb-3 row">
      <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

</div>
@endsection