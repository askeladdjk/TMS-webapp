@extends('layout.adminsidebar')
@section('content')

<style>
    th
    {
        text-align: center;
    }
</style>

    <div class="card">
        <div class="card-body">
          <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
              <div class="col-xl-9">
                <p style="color: #7e8d9f;font-size: 20px;"><strong>BILLING SECTION</strong></p>
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
                        <th scope="col">TENANT</th>
                        <th scope="col">ROOM</th>
                        <th scope="col">SET BILL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tbody>
                        @foreach ($personalinfo as $info)
                        <tr>
                            <td style="text-align: center;">{{ $info->name }}</td>
                            <td style="text-align: center;">{{ $info->tms_user->roomnumber }}</td>
                            <td style="text-align: center;">
                                <a href="{{ url('savebill/'.$info->name) }}" class="btn btn-danger">SET BILL</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>
@endsection
