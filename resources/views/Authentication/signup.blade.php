<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>

    @vite('resources/css/app.css')

    <style>
        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid black;
            outline: none;
            background-color: transparent;
        }

        input[type="radio"]:checked::before {
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            margin: 3px;
            border-radius: 50%;
            background-color: black;
        }

        input[type="radio"]:checked {
            background-color: #333;
        }
        section {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(47,109,100,1) 35%, rgba(0,212,255,1) 100%);
        }
    </style>

</head>
<body>
    <section class="vh-100" style="background-color: black;>
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Tenant Registration Form</h3>

                <form class="mx-1 mx-md-4" method="post" action="{{route('register_user')}}">
                  @if(Session::get('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::get('fail'))
                    <div class="alert alert-success">{{Session::get('fail')}}</div>
                  @endif
                    @csrf


                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="firstname" name = "firstname" class="form-control form-control-lg" value = "{{ old('firstname')}}" required/>
                          <label class="form-label" for="firstname">First Name</label>
                          @error('firstname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                        </div>


                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="lastname" name = "lastname" class="form-control form-control-lg" value = "{{ old('lastname')}}" required/>
                          <label class="form-label" for="lastname">Last Name</label>
                          @error('lastname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                         </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                          <input type="date"  name = "birthdate" class="form-control form-control-lg" id="birthdate" value = "{{ old('birthdate')}}" required/>
                          <label for="birthdate" class="form-label">Birthday</label>
                          @error('birthdate')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                      </div>

                      <div class="col-md-6 mb-4">
                        <h6 class="mb-2 pb-1">Gender:</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                            {{ old('gender') == 'female' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="femaleGender">Female</label>
                            @error('gender')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male"
                            {{ old('gender') == 'male' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="maleGender">Male</label>
                            @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other"
                            {{ old('gender') == 'other' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="otherGender">Other</label>
                            @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                          <input type="email" id="email" name ="email" class="form-control form-control-lg" value = "{{ old('email')}}" required/>
                          <label class="form-label" for="email">Email</label>
                          @error('email')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                        </div>

                    </div>

                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                          <input type="tel" id="phonenumber" name = "phonenumber" class="form-control form-control-lg" value = "{{ old('phonenumber')}}" required/>
                          <label class="form-label" for="phonenumber">Phone Number</label>
                          @error('phonenumber')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                        </div>

                      </div>

                      <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="password" id="password" name = "password" class="form-control form-control-lg" value = "{{ old('password')}}" required/>
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                      </div>
                    </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" value = "{{ old('password_confirmation')}}" required/>
                        <label class="form-label" for="password_confirmation">Verify Password</label>
                    </div>
                  </div>

                    </div>
                    <div class="row">
                      <div class="col-12">

                        <select class="select form-control-lg" name="roomnumber" value = "{{ old('roomnumber')}}" required>
                            <option value="" disabled selected>Choose Room Number</option>
                            <option value="1">Room 1</option>
                            <option value="2">Room 2</option>
                            <option value="3">Room 3</option>
                            <option value="4">Room 4</option>
                            <option value="5">Room 5</option>
                            <option value="6">Room 6</option>
                            <option value="7">Room 7</option>
                        </select>
                        <label class="form-label select-label">Room Number</label>
                        @error('roomnumber')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                      </div>
                    </div>

                    <div class="mt-4 pt-2">
                      <button type="submit" class="btn btn-dark btn-lg" value = "Register">Register</button>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">

                        <a href="{{url ('/login')}}">GO BACK TO LOGIN PAGE</a>
                        </label>
                        </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
