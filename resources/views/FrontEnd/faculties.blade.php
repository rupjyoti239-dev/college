@extends('FrontEnd.layout.main')
@push('title')
<title>RGU | Faculties</title>
@endpush
@section('main-section')

   {{-- section1 --}}
   <section>
          <div class="col-12">
            <img src="{{ asset('images/rgu1.jpeg') }}" class="img-fluid w-100" alt="Descriptive text"
              style="height: 30vh;">
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
              <div class="col d-flex justify-content-center">
                <a href="#" class="text-decoration-none">
                  <div class="card" style="max-width: 320px;">
                    <img src="{{ asset('images/teacher.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div>
            
              <div class="col d-flex justify-content-center">
                <a href="#" class="text-decoration-none">
                  <div class="card" style="max-width: 320px;">
                    <img src="{{ asset('images/teacher.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
              {{-- /card --}}

            </div>
          </div>
        </div>
      </section>    
    {{-- section 2 --}}

@endsection