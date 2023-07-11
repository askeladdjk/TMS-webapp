<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAYMENT SECTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if(session('Success'))
            <div class="alert alert-success">{{ session('Success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h1>PAYMENT SECTION</h1>

        <form class="form-group" action="{{ route('paymentth', $bills->tenant) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tenant">TENANT:</label>
                <input type="text" name="tenant" class="form-control" value="{{ $bills->tenant }}" readonly>
            </div>

            <div class="form-group">
                <label for="room">ROOM:</label>
                <input type="number" name="room" value="{{ $bills->room }}" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" step="0.01" name="amount" class="form-control" value="{{ $bills->amount }}" readonly>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" name="due_date" class="form-control" value="{{ $bills->due_date }}" readonly>
            </div>

            <hr>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to proceed with the Payment?')">Pay</button>
            </div>
        </form>

        <div class="form-check d-flex justify-content-end mb-5">
            <a href="{{ route('userpaymentView') }}">BACK TO BILLING SECTION</a>
        </div>
    </div>
</body>
</html>
