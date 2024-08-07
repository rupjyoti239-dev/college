@extends('FrontEnd.layout.main')
@push('title')
<title>RGU | Faculties</title>
@endpush
@section('main-section')

{{-- section1 --}}
<section>
  <div class="col-12">
    <img src="{{ asset('images/rgu1.jpeg') }}" class="img-fluid w-100" alt="Descriptive text" style="height: 30vh;">
  </div>
</section>
{{-- /section1 --}}


{{-- section 2 --}}
<section class="py-5 " style="background-color: #f2f5f5;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mb-4">Our Faculties</h2>
        <hr class="mx-auto" style="width: 150px; height: 5px; background-color: rgb(255, 3, 3); border: none;">

        {{-- card --}}
        <div class="row row-cols-1 row-cols-md-2 g-5">

          @foreach ($faculties as $item)

          <div class="col d-flex justify-content-center">
         <a href="#" class="text-decoration-none">
          <div class="card mb-4" style="max-width: 320px;">
            <div class="position-relative" style="height: 220px; overflow: hidden;">
              <img src="{{ asset('backend_images/'.$item->image) }}" class="card-img-top" alt="Image of {{ $item->name }}">
            </div>
            <div class="card-body">
              <h5 class="card-title">Name: <strong>{{ $item->name }}</strong></h5>
              <p class="card-text text-secondary">Designation: <strong><i>{{ $item->designation }}</i></strong></p>
              <p class="card-text text-secondary">Email: <strong><i>{{ $item->email }}</i></strong></p>
              <p class="card-text text-secondary">Department: <strong><i>{{ $item->department->department_name }}</i></strong>
              </p>
              <p class="card-text text-secondary">Subject: <strong><i>{{ $item->subject->subject_name }}</i></strong></p>
              <p class="card-text text-secondary">Joining Date: <strong><i>{{ $item->joining_date }}</i></strong></p>
            </div>
          </div>
        </a>
          </div>

          @endforeach
        </div>
        {{-- /card --}}

      </div>
    </div>
  </div>
</section>
{{-- section 2 --}}

@endsection