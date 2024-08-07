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
    <h3>Banners</h3>
    <a href="{{ route('admin.banner.add') }}" class="btn btn-primary">New Banner</a>
  </div>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($banners as $banner)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
          <img src="{{ asset('backend_images/'.$banner->image) }}" alt="banner" class="image-fluid" height="100">
        </td>
        <td>
          @if($banner->status == 1)
            <span class="label label-success">active</span>
          @else
           <span class="label label-danger">Inactive</span>  
          @endif
        </td>
        <td>
          @if($banner->status == 1)
            <a href="{{ route('admin.banner.status',['id'=>$banner->id]) }}" class="btn btn-danger btn-sm">Disable</a>
          @else
          <a href="{{ route('admin.banner.status',['id'=>$banner->id]) }}" class="btn btn-success btn-sm">Enable</a>
          @endif
         

          <form action="{{ route('admin.banner.delete',['id'=>$banner->id]) }}" method="POST"
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