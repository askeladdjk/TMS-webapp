@extends('layout.usersidebar')
@section('content')
<style>

        th{
            text-align:center;
        }
</style>
<h1>USER PAYMENT SECTION</h1>
<div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: dark;font-size: 25px;"><strong>BILLING SECTION</strong></p>
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
          </div>

        </div>
        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0Ca ;" class="text-white">
              <tr>
                  <th scope="col">ROOM</th>
                  <th scope="col">AMOUNT</th>
                  <th scope="col">DUE DATE</th>
                  <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr>
                        <td style="text-align: center;">{{ $bill->room}}</td>
                        <td style="text-align: center;">{{ $bill->amount}}</td>
                        <td style="text-align: center;">{{ $bill->due_date}}</td>
                        <td style="text-align: center;">
                            <a href="{{ url('paymentsection/'.$bill->tenant) }}" class="btn btn-primary">PAY</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </tbody>

          </table>
        </div>
        <hr>

      </div>
    </div>
  </div>
@endsection
