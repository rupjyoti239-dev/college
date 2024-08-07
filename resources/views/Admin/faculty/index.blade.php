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
    <h3>Faculties</h3>
    <a href="{{ route('admin.faculty.add') }}" class="btn btn-primary">New Faculty</a>
  </div>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>Sl No</th>
        <th>Faculty Name</th>
        <th>Designation</th>
        <th>email</th>
        <th>Department Name</th>
        <th>Subject name</th>
        <th>Joining Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($faculties as $faculty)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $faculty->name }}</td>
        <td>{{ $faculty->designation }}</td>
        <td>{{ $faculty->email }}</td>
        <td>{{ $faculty->department->department_name }}</td>
        <td>{{ $faculty->subject->subject_name }}</td>
        <td>{{ $faculty->joining_date }}</td>
        <td>
          <a href="{{ route('admin.faculty.edit',['id'=>$faculty->id]) }}" class="btn btn-warning btn-sm">Edit</a>

          <form action="{{ route('admin.faculty.delete',['id'=>$faculty->id]) }}" method="POST" style="display:inline;">
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