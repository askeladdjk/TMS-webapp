<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
{{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script> --}}

    @vite('resources/css/app.css')

  <style>
      section {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(47,109,100,1) 35%, rgba(0,212,255,1) 100%);
   }
    </style>
</head>
<body>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">TENANT MANAGEMENT SYSTEM</h2>
              <p class="text-white-50 mb-5">ENTER YOUR EMAIL AND PASSWORD</p>

                <form class="mx-1 mx-md-4" method="post" action="{{ route('userlogin')}}">
                @if(Session::get('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::get('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf

              <div class="form-outline form-white mb-4">
                <input type="email" id="email" name = "email" class="form-control form-control-lg" value="{{ old('email') }}" required/>
                <label class="form-label" for="email">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password" name = "password" class="form-control form-control-lg" value="{{ old('password') }}" required />
                <label class="form-label" for="password">Password</label>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot Password</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

            </div>

            <div>
              <p class="mb-0">Make an Account:   <a href="/signup" class="text-white-50 fw-bold"> Sign Up</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
