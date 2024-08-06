@extends('FrontEnd.layout.main')
@push('title')
<title>RGU | Home</title>
@endpush
@section('main-section')


{{-- carousel --}}
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/rgu1.jpeg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/rgu2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- /carousel --}}



{{-- section1 --}}
<section class="py-5 " style="background-color: #f2f5f5;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Why RGU</h2>
                <hr class="mx-auto" style="width: 150px; height: 5px; background-color: rgb(255, 3, 3); border: none;">
                <p class="text-justify">Recognized by UGC, AIU, State Government and many other credible institutes,
                    Royal Global University seeks to
                    inspire and nurture students' potential so they can become a part of the workforce in today's
                    leading companies like
                    ICICI, Infosys, Capgemini etc. We offer contemporary, industry-oriented, & research-driven
                    courses.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- /section1 --}}




{{-- section2 --}}
<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Programmes Offered</h2>
                <hr class="mx-auto" style="width: 150px; height: 5px; background-color: rgb(255, 3, 3); border: none;">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4 rounded">
                <img src="{{ asset('images/student.jpg') }}" class="img-fluid rounded" alt="Programs Image">
            </div>
            <div class="col-md-5">
                <div class="card h-100 shadow">
                    <div class="card-body ">
                        <ul class="list-group">
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 1</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 2</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 3</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 4</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 5</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 6</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 7</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 8</a></li>
                            <li class="mb-2"><span class="text-danger"> &#x2022;</span><a href="" class="hover"> Lorem
                                    ipsum dolor sit amet. Programme 9</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /section2 --}}


@endsection