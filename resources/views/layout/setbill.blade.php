<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SET BILL SECTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        @if(session('Success'))
            <div class="alert alert-success">{{ session('Success') }}</div>
        @endif

        <h1>Set Bill Section</h1>
        <form class="form-group" action="{{ url('setbill') }}" method="POST">
            @csrf
        <div class="form-group">
                <label for="tenant">TENANT:</label>
                <input type="text" name="tenant" class="form-control" value="{{$info->name}}" required>
            </div>

            <div class="form-group">
                <label for="room">ROOM:</label>
                <input type="number" name="room" class="form-control"required>
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" step="0.01" name="amount" class="form-control" placeholder="Enter Amount" required>
            </div>

            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>


            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">SET BILL</button>
            </div>

            <div class="form-check d-flex justify-content-end mb-5">
                <a href="{{url ('/billingview')}}">BACK TO BILLING SECTION</a>
            </div>
        </form>
    </div>
</body>
</html>
