@extends('layout.usersidebar')
@section('content')

      <div class="card">
        <div class="card-body">
          <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
              <hr>
            </div>

            <div class="container">
              <div class="col-md-12">
                <div class="text-center">
                  <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                </div>

              </div>


              <div class="row">
                <div class="col-xl-4">
                  <p class="text-muted">TRANSACTION HISTORY</p>
                </div>
              </div>

              <div class="row my-2 mx-1 justify-content-center">
                <table class="table table-striped table-borderless">
                  <thead style="background-color:#84B0CA ;" class="text-white">
                    <tr>
                        <th scope="col">TRANSACTION ID</th>
                        <th scope="col">TENANT</th>
                        <th scope="col">DUE DATE</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">TRANSACTION DATE</th>
                    </tr>
                  </thead>
                  <tbody id="transaction-data">
                    @foreach ($transactionhistory as $transaction)
                    <tr>
                      <td>{{ $transaction->transactionid}}</td>
                      <td>{{ $transaction->tenant }}</td>
                      <td>{{ $transaction->due_date }}</td>
                      <td>{{ $transaction->amount }}</td>
                      <td>{{ $transaction->created_at }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <hr>

            </div>
          </div>
        </div>
      </div>
@endsection
