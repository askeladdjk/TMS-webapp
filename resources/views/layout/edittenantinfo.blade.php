<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFORMATION SECTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <h1>PERSONAL INFORMATION FORM</h1>
        <form  class="form-group" action="{{ url('updateinfo/'.$info->name) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tenant_name">Tenant Name:</label>
                <input type="text" name="tenant_name" value="{{$info->name}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tenant_since">Tenant Since:</label>
                <input type="date" name="tenant_since" value="{{$info->tenant_since}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" value="{{$info->contact_number}}"class="form-control" required>
            </div>
            <div class="form-group">
                <label for="home_address">Home Address:</label>
                <input type="text" name="home_address" value="{{$info->home_address}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact_person">Contact Person:</label>
                <input type="text" name="contact_person" value="{{$info->contact_person}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="relationship">Relationship:</label>
                <input type="text" name="relationship" value="{{$info->relationship}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact_person_number">Contact Person Number:</label>
                <input type="text" name="contact_person_number" value="{{$info->contact_person_number}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact_person_address">Contact Person Address:</label>
                <input type="text" name="contact_person_address" value="{{$info->contact_person_address}}" class="form-control" required>
            </div>

            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
            <div class="form-check d-flex justify-content-end mb-5">

                <a href="{{url ('/tenantview')}}">BACK TO TENANT VIEW</a>
                </label>
                </div>
        </form>
    </div>
</body>
</html>
