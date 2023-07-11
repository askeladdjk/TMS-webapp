@extends('layout.adminsidebar')
@section('content')

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

<div class="tenantview">
    <h1>  TENANT PROFILES</h1>
    <table class="table caption-top">

        <thead>
          <tr>
            <th>TENANT NAME</th>
            <th>TENANT SINCE</th>
            <th>CONTACT NUMBER</th>
            <th>HOME ADDRESS</th>
            <th>CONTACT PERSON</th>
            <th>RELATIONSHIP</th>
            <th>CONTACT NUMBER</th>
            <th>HOME ADDRESS</th>
            <th>ACTION</th>
            </tr>
        </thead>
        <tbody id="report-data">
            @foreach ($tenantinfo as $info )
                <tr>
                    <td>{{ $info ->name }} </td>
                    <td>{{ $info ->tenant_since }} </td>
                    <td>{{ $info ->contact_number }} </td>
                    <td>{{ $info ->home_address }} </td>
                    <td>{{ $info ->contact_person }} </td>
                    <td>{{ $info ->relationship}} </td>
                    <td>{{ $info ->contact_person_number }} </td>
                    <td>{{ $info ->contact_person_address}} </td>
                    <td>
                        <a href="{{ url('edittenantinfo/'.$info->name) }}" class="btn btn-success">EDIT</a>
                        <hr>
                        <form action="{{ url('deleteinfo/'.$info->name) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
