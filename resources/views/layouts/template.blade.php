
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Kenaikan Pangkat</title>
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}" />
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
@yield('css')

<link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

  </head>
  <body id="mimin" class="dashboard">
    <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
          <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
            </div>
              @yield('brand')
              <a href="{{ url('/') }}" class="navbar-brand">
               <b>SIKP</b>
              </a>


            <ul class="nav navbar-nav navbar-right user-nav" style="margin-right:1px">
              @yield('profile')

            </ul>
          </div>
        </div>
      </nav>
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
          <div id="left-menu">
            <div class="sub-left-menu scroll">
              <ul class="nav nav-list">
                  <li><div class="left-bg"></div></li>
                  <li class="time">
                    <h1 class="animated fadeInLeft">21:00</h1>
                    <p class="animated fadeInRight">Sat,October 1st 2029</p>
                  </li>
                  @if (checkPermission(['superadmin']))
                    <li id="user" class="active ripple">
                      <a href="{{ url('admin/home') }}">
                         <span class="icon icon-people"></span>Kelola User
                      </a>
                    </li>
                  @endif
                  @if (checkPermission(['admin']))
                    <li id="user" class="active ripple">
                      <a href="{{ url('/users') }}">
                         <span class="icon icon-people"></span>Kelola User
                      </a>
                    </li>
                  @endif
                @if (checkPermission(['user','admin','superadmin']))
                  <li class="">
                    <a class="tree-toggle nav-header"><span class="icons icon-docs"></span> Laporan
                      <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                      <li><a href="#">Dupak</a></li>
                      <li><a href="#">PAK</a></li>
                    </ul>
                  </li>
                  <li class="">
                    <a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Input
                      <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree">
                      <li><a href="{{ route('pengajuan.index') }}">Form Pengajuan</a></li>
                      <li><a href="{{ url('/pak') }}">Input PAK</a></li>
                      <li><a href="{{ route('angkakredit') }}">Angka Kredit</a></li>

                    </ul>
                  </li>
                @endif
                @yield('leftmenu')

                </ul>
              </div>
          </div>
        <!-- end: Left Menu -->


        <!-- start: content -->
          @yield('content')
        <!-- end: content -->




    </div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/main.js')}}"></script>
  @yield('javascript')
  </body>
</html>
