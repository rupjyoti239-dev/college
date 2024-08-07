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
    <h3>Contacts</h3>
    
  </div>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contacts as $contact)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->subject }}</td>
        <td>{{ $contact->message }}</td>
        <td><a href="{{ route('admin.contact.delete',['id'=>$contact->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection