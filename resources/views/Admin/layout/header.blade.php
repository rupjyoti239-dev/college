<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @stack('title')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  
  {{-- custome css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Admin Panel</title>
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      height: 100%;
      width: 250px;
      background-color: #343a40;
      color: white;
      transition: all 0.3s;
    }

    .sidebar .nav-link {
      color: #fff;
    }

    .sidebar .nav-link.active {
      background-color: #495057;
    }

    .sidebar .nav-link:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }

    @media (max-width: 991px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <nav id="sidebar" class="sidebar">
    <div class="p-3">
      <h4>Admin Panel</h4>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}"" href="{{ route('admin.dashboard') }}">
          <i class="fa-solid fa-tachometer-alt"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'admin.department.list' ? 'active' : '' }}" href="{{ route('admin.department.list') }}">
          <i class="fa-solid fa-users"></i> Departments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'admin.subject.list' ? 'active' : '' }}" href="{{ route('admin.subject.list') }}">
          <i class="fa-solid fa-box"></i> Subjects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'admin.faculty.list' ? 'active' : '' }}" href="{{ route('admin.faculty.list') }}">
          <i class="fa-solid fa-cog"></i> Faculties
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form action="{{ route('admin.logout') }}" method="post">
              @csrf
              <button type="submit"><i class="fa-solid fa-sign-out-alt"></i> Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">


    
     