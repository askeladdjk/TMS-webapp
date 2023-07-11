@extends('layout.adminsidebar')
@section('content')
<div class="roomview">
    <h1>ROOM</h1>
    <table class="table caption-top">

        <thead>
          <tr>
            <th>ROOM NUMBER</th>
            <th>TENANT</th>
            <th>OCCUPIED SINCE</th>
          </tr>
        </thead>
        <tbody id="report-data">

            @foreach ($userinfo as $ui)
            <tr>
                <td>{{ $ui->roomnumber }}</td>
                <td>
                    @if ($ui->personalinfo)
                        {{$ui->personalinfo->name}}
                    @endif
                </td>
                <td>
                    @if ($ui->personalinfo)
                        {{$ui->personalinfo->tenant_since}}
                    @endif
                </td>
            </tr>
        @endforeach

                </tbody>
    </table>
@endsection
