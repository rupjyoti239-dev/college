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
    <h3>Subjects</h3>
    <a href="{{ route('admin.subject.add') }}" class="btn btn-primary">New Subject</a>
  </div>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>#</th>
        <th>Subject name</th>
        <th>Department Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($subjects as $subject)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $subject->department->department_name }}</td>
        <td>{{ $subject->subject_name }}</td>
        <td>
          <a href="{{ route('admin.subject.edit',['id'=>$subject->id]) }}" class="btn btn-warning btn-sm">Edit</a>

          <form action="{{ route('admin.subject.delete',['id'=>$subject->id]) }}" method="POST"
            style="display:inline;">
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