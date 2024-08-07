<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('title')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  {{-- custome css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <div
    class="py-2 bg-dark text-light d-flex flex-column flex-sm-row justify-content-between align-items-center px-3 px-sm-5">
    <div class="d-flex flex-column flex-sm-row align-items-center mb-3 mb-sm-0">
      <p class="text-light mx-3 mb-0"><i class="fa-regular fa-envelope-open"></i> contact@rgu.org</p>
      <p class="text-light mx-3 mb-0"><i class="fa-solid fa-phone"></i> +1-3435-2356-222</p>
    </div>
    <ul class="nav d-sm-flex flex-sm-row justify-content-center mb-0">
      <li class="nav-item mx-2">
        <a class="nav-link text-light active" aria-current="page" href="#">Alumni</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-light" href="#">Calendar</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-light" href="{{ route('admin.login.form') }}">Admin</a>
      </li>
    </ul>
  </div>



  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="" style="width: 150px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('faculties') }}" class="nav-link">Our Faculties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- /navbar --}}