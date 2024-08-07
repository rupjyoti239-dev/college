<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <title>RGU | Admin Login</title>
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      max-width: 400px;
      width: 100%;
      border-radius: 0.5rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      border-bottom: 1px solid #e9ecef;
      padding: 1rem;
      border-radius: 0.5rem 0.5rem 0 0;
    }

    .form-check-label {
      margin-left: 0.5rem;
    }
  </style>
</head>

<body>

  <div class="card">
    <div class="card-header">
      <h4 class="mb-0">Admin Login</h4>
    </div>

    @if (session('error'))
    <div class="alert alert-danger w-75 mx-auto mt-2" role="alert">
      {{ session('error') }} 
    </div>
    @endif


    <div class="card-body p-4">
      <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          @error('email')
          <div class="text-danger text-small">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          @error('password')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>
       
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>
</body>

</html>