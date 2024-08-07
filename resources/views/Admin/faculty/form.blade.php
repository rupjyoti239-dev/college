@extends('Admin.layout.main')
@section('content')
<div class="container">
  <h3 class="text-center mt-5">Create New Faculty</h3>

  <form action="{{ route('admin.faculty.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf


    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>



    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
        <span class="text-danger">
          @error('email')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>




    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="designation">Designation <span class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="text" id="designation" name="designation" class="form-control" value="{{ old('designation') }}">
        <span class="text-danger">
          @error('designation')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>


    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="department_name">Department Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <select name="department_id" id="department_name" class="form-control">
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
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="subject_id">Subject Name <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <select name="subject_id" id="subject_id" class="form-control">
          @foreach ($subjects as $subject)
          <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
          @endforeach
        </select>
        <span class="text-danger">
          @error('subject_id')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>


    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="joining_date">Joining Date <span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="date" id="joining_date" name="joining_date" class="form-control" value="{{ old('joining_date') }}">
        <span class="text-danger">
          @error('joining_date')
          {{ $message }}
          @enderror
        </span>
      </div>
    </div>


    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Profile Image<span
          class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
        <input type="file" id="image" name="image" class="form-control">
        <span class="text-danger">
          @error('image')
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