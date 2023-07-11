@extends('layout.adminsidebar')
@section('content')

  <title>Transaction History Dashboard</title>
  <style>

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Transaction History Dashboard</h1>

  <table>
    <thead>
      <tr>
        <th>TRANSACTION ID</th>
        <th>TENANT</th>
        <th>DUE DATE</th>
        <th>AMOUNT</th>
        <th>TRANSACTION DATE</th>
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
@endsection
