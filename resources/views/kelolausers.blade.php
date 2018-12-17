@extends('layouts.template')
@section('css')
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/datatables.bootstrap.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/select2.min.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/bootstrap-material-datetimepicker.css')}}" />

  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->

  <!-- end: Css -->
  <link rel="stylesheet" href="{{asset('asset/date/css/datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('asset/date/css/main.css')}}">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

@endsection

@section('profile')
  <li class="user-name"><span>{{auth::user()->username}}</span></li>
                    <li class="dropdown avatar-dropdown">
                     <img src="{{asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                     <ul class="dropdown-menu user-dropdown">
                       <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                       <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><span class="fa fa-power-off"></span> Logout</a></li>
                          {{-- Di panggil pada event onclick --}}
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                        </ul>
                      </li>
@endsection
@section('leftmenu')
@endsection
@section('content')
  <div id="content">
    <div class="col-md-12 animated fadeInUp">
      <div class="panel-heading">
        <h3>Daftar Users</h3>

      <div class="responsive-table">
        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
                  <th>No</th>
                  <th>id pegawai</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Permissions</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th></th>
                </tr>
          </thead>
          <tbody>
            @foreach ($user as $u => $users)
              <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->id_pegawai }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->is_permissions }}</td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->updated_at }}</td>
                    <td><button class=" btn btn-circle btn-mn btn-warning" value="primary">
                                <span class="fa fa-pencil-square-o"></span>
                              </button>
                              <button class=" btn btn-circle btn-mn btn-danger" value="primary">
                                          <span class="fa fa-trash"></span>
                                        </button>
                            </td>
                  </tr>
            @endforeach


          </tbody>
        </table>
      </div>
      </div>
    </div>

  </div>


@endsection
@section('javascript')
  <!-- start: Javascript -->
  <script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>


  <!-- plugins -->
  <script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/jquery.knob.js')}}"></script>
  <script src="{{asset('asset/js/plugins/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/bootstrap-material-datetimepicker.js')}}"></script>
  <script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
  <script src="{{asset('asset/js/plugins/jquery.mask.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/select2.full.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/nouislider.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/jquery.validate.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/jquery.datatables.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/datatables.bootstrap.min.js')}}"></script>

  <!-- custom -->
  <script src="{{asset('asset/js/main.js')}}"></script>
  <script src="{{ asset('asset/js/index.js') }}"></script>
  <script src="{{ asset('js/select.js') }}"></script>
  <!-- end: Javascript -->
  <!-- custom -->
   <script src="{{asset('asset/datejs/datepicker.en-US.js')}}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://fengyuanchen.github.io/js/common.js"></script>
  <script src="{{asset('asset/date/js/main.js')}}"></script>
  <script src="{{asset('asset/date/js/datepicker.js')}}"></script>
  <script>
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>


  <!-- end: Javascript -->
@endsection
