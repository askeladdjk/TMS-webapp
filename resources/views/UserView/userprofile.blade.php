@extends('layout.usersidebar')
@section('content')
<section>

    @if(session('Success'))
    <div class="alert alert-success">{{ session('Success') }}</div>
    @endif

    @if(session('Error'))
    <div class="alert alert-danger">{{ session('Error') }}</div>
    @endif

    <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item dark" aria-current="page">TENANT INFORMATION</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">ID: </p>
                </div>
                <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user_id}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">ROOM NUMBER: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$roomnumber}}</p>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">FULLNAME: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user_fname}} {{$user_lname}}</p>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">FIRSTNAME: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user_fname}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">LASTNAME: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user_lname}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">BIRTHDATE: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user_bdate}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">GENDER: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user_gender}}</p>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">PHONENUMBER: </p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$user_phonenumber}}</p>
                </div>
              </div>
              <hr>

              <hr>
              <a href="{{ url('addinfo') }}" class="btn btn-success">ADD ADDTIONAL INFORMATION</a>
              @csrf
              @method('GET')
            </div>
          </div>
        </div>
      </div>

</section>
@endsection
