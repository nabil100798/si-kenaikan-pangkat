@extends('layouts.app')

@section('content')
  <div class="container">

      <div class="row">

          <div class="col-md-12">

              <div class="panel panel-default">

                  <div class="panel-heading">Manage Permission</div>


                  <div class="panel-body">


                      @if(checkPermission(['user','admin','superadmin']))

                      <a href="{{ url('permissions-all-users') }}"><button>Access All Users</button></a>
                      {{-- yang bisa Access All User cuman User,admin,SuperAdmin --}}
                      @endif


                      @if(checkPermission(['admin','superadmin']))

                      <a href="{{ url('permissions-admin-superadmin') }}"><button>Access Admin and Superadmin</button></a>

                      @endif


                      @if(checkPermission(['superadmin']))

                      <a href="{{ url('permissions-superadmin') }}"><button>Access Only Superadmin</button></a>

                      @endif


                  </div>

              </div>

          </div>

      </div>

  </div>
@endsection
