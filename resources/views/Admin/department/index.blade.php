@extends('Admin.layout.main')
@push('title')
<title>RGU | Admin</title>
@endpush
@section('content')


<div class="container">


  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif


  <div class="d-flex justify-content-between align-items-center my-4">
    <h3>Departments</h3>
    <a href="{{ route('admin.department.add') }}" class="btn btn-primary">New Department</a>
  </div>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>#</th>
        <th>Department Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($departments as $department)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $department->department_name }}</td>
        <td>
          <a href="{{ route('admin.department.edit',['id'=>$department->id]) }}" class="btn btn-warning btn-sm">Edit</a>

          <form action="{{ route('admin.department.delete',['id'=>$department->id]) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection