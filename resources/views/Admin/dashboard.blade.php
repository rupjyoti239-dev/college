@extends('Admin.layout.main')
@section('content')
 <div class="row mt-5">
  <div class="col-sm-4 ">
    <div class="card">
      <div class="card-body text-center">
        <h4>Total Departments</h4>
        <p>{{ $department }}</p>
      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="card">
      <div class="card-body text-center">
        <h4>Total Subjects</h4>
        <p>{{ $subject }}</p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body text-center">
       <h4>Total Faculties</h4>
       <p>{{ $faculty }}</p>
      </div>
    </div>
  </div>


</div>
@endsection
    