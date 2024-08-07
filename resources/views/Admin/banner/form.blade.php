@extends('Admin.layout.main')
@section('content')
<div class="container">
  <h3 class="text-center mt-5">Create New Banner</h3>

  <form action="{{ route('admin.banner.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf

    <div class="mb-3 row">
      <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span
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