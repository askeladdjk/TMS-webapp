@extends('layout.adminsidebar')
@section('content')

<style>

        .card {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
            width: 500px;
            text-align: center;
            }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 0;
        }

    .card h2 {
        font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
    }

    .container
    {
        font-size: 50px;
            font-family: 'Times New Roman', Times, serif;
    }
</style>
<div class="container">
    <h1>Tenant Management System - Admin Home</h1>

    <div class="card">
      <h2>Total Tenants</h2>
      <p id="total-tenants">0</p>
    </div>

    <div class="card">
      <h2>Total Occupied Rooms</h2>
      <p id="total-apartments">0</p>
    </div>

    <div class="card">
      <h2>Income This Month</h2>
      <p id="income-month">0</p>
    </div>
  </div>
@endsection
