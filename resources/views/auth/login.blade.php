<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISKP</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/icheck/skins/flat/aero.css')}}"/>
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

    </head>

    <body id="mimin" class="" style="background-image:url({{ asset('asset/img/blur1.jpg') }});
    height: auto;background-repeat: no-repeat;position: relative;background-size: 100%;">

      <div class="container">

        <form class="form-signin" method="post" action="{{ route('login') }}" style="margin-top:50px">
          @csrf
          <div class="panel periodic-login" style="background:#24547a80;box-shadow:0 7px 16px #03213d, 0 4px 5px #06253e66;">

              <div class="panel-body text-center">
                  <h4 class="" style="font-size: 5em">SISKP</h4>


                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="username" name="username" class="username"required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" id="password" name="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" id="remember" name="remember"/> Remember me
                  </label>
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="{{asset('asset/js/jquery.min.js')}}"></script>
      <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
      <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>

      <script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
      <script src="{{asset('asset/js/plugins/icheck.min.js')}}"></script>

      <!-- custom -->
      <script src="{{asset('asset/js/main.js')}}"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>
