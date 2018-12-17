@extends('layouts.template')
@section('css')
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>

  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/nouislider.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/select2.min.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/mediaelementplayer.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/ionrangeslider/ion.rangeSlider.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/icheck/skins/flat/red.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/bootstrap-material-datetimepicker.css')}}" />
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->

  <!-- end: Css -->
  <link rel="stylesheet" href="{{asset('asset/date/css/datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('asset/date/css/main.css')}}">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

@endsection
@section('brand')
  <a href="{{ url('admin/home') }}" class="navbar-brand">
   <b>SIKP</b>
  </a>
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
    <div class="col-md-12" style="top:20px">
      <div class="col-md-8">
        <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>51181,320</h1>
                                        <p>User active</p>
                                        <hr>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Orders</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>51181,320</h1>
                                        <p>New Orders</p>
                                        <hr>
                                      </div>
                                    </div>
                                </div>
                            </div>
      </div>
      <div class="col-md-4">
                            <div class="col-md-12 padding-0">
                              <div class="panel box-v2">
                                  <div class="panel-heading padding-0">
                                    <img src="{{asset('asset/img/bg2.jpg')}}" class="box-v2-cover img-responsive">
                                    <div class="box-v2-detail">
                                      <img src="asset/img/avatar.jpg" class="img-responsive">
                                      <h4>Akihiko Avaron</h4>
                                    </div>
                                  </div>
                                  <div class="panel-body">
                                    <div class="col-md-12 padding-0 text-center">
                                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                          <h3>2.000</h3>
                                          <p>Post</p>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                          <h3>2.232</h3>
                                          <p>share</p>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-12 padding-0">
                                          <h3>4.320</h3>
                                          <p>photos</p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-md-12 padding-0">
                              <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Report</h4>
                                </div>
                                <div class="panel-body">

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-folder icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Document Handling</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">UI/UX Development</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-energy icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Server Optimation</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-user icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">User Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="media">
                                    <div class="media-left">
                                        <span class="icon-fire icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">Firewall Status</h5>
                                        <div class="progress progress-mini">
                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">60% Complete</span>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel-footer bg-white border-none">
                                    <center>
                                      <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none"/>
                                    </center>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-12 padding-0">
                              <div class="panel bg-light-blue">
                                <div class="panel-body text-white">
                                   <p class="animated fadeInUp quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Ut wisi..."</p>
                                    <div class="col-md-12 padding-0">
                                      <div class="text-left col-md-7 col-xs-12 col-sm-7 padding-0">
                                        <span class="fa fa-twitter fa-2x"></span>
                                        <span>22 May, 2015 via mobile</span>
                                      </div>
                                      <div style="padding-top:8px;" class="text-right col-md-5 col-xs-12 col-sm-5 padding-0">
                                        <span class="fa fa-retweet"></span> 2000
                                        <span class="fa fa-star"></span> 3000
                                      </div>
                                    </div>
                                </div>
                              </div>
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


  <!-- custom -->
  <script src="{{asset('asset/js/main.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#signzzzupForm").validate({
        errorElement: "em",
        errorPlacement: function(error, element) {
          $(element.parent("div").addClass("form-animate-error"));
          error.appendTo(element.parent("div"));
        },
        success: function(label) {
          $(label.parent("div").removeClass("form-animate-error"));
        },
        rules: {
          validate_firstname: "required",
          validate_lastname: "required",
          validate_username: {
            required: true,
            minlength: 2
          },
          validate_password: {
            required: true,
            minlength: 5
          },
          validate_confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#validate_password"
          },
          validate_email: {
            required: true,
            email: true
          },
          validate_agree: "required"
        },
        messages: {
          validate_firstname: "Please enter your firstname",
          validate_lastname: "Please enter your lastname",
          validate_username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          validate_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          validate_confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          validate_email: "Please enter a valid email address",
          validate_agree: "Please accept our policy"
        }
      });

      // propose username by combining first- and lastname
      $("#username").focus(function() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        if (firstname && lastname && !this.value) {
          this.value = firstname + "." + lastname;
        }
      });


      $('.mask-date').mask('00/00/0000');
      $('.mask-time').mask('00:00:00');
      $('.mask-date_time').mask('00/00/0000 00:00:00');
      $('.mask-cep').mask('00000-000');
      $('.mask-phone').mask('0000-0000');
      $('.mask-phone_with_ddd').mask('(00) 0000-0000');
      $('.mask-phone_us').mask('(000) 000-0000');
      $('.mask-mixed').mask('AAA 000-S0S');
      $('.mask-cpf').mask('000.000.000-00', {
        reverse: true
      });
      $('.mask-money').mask('000.000.000.000.000,00', {
        reverse: true
      });
      $('.mask-money2').mask("#.##0,00", {
        reverse: true
      });
      $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
          'Z': {
            pattern: /[0-9]/,
            optional: true
          }
        }
      });
      $('.mask-ip_address').mask('099.099.099.099');
      $('.mask-percent').mask('##0,00%', {
        reverse: true
      });
      $('.mask-clear-if-not-match').mask("00/00/0000", {
        clearIfNotMatch: true
      });
      $('.mask-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
      });
      $('.mask-fallback').mask("00r00r0000", {
        translation: {
          'r': {
            pattern: /[\/]/,
            fallback: '/'
          },
          placeholder: "__/__/____"
        }
      });
      $('.mask-selectonfocus').mask("00/00/0000", {
        selectOnFocus: true
      });

      var options = {
        onKeyPress: function(cep, e, field, options) {
          var masks = ['00000-000', '0-00-00-00'];
          mask = (cep.length > 7) ? masks[1] : masks[0];
          $('.mask-crazy_cep').mask(mask, options);
        }
      };

      $('.mask-crazy_cep').mask('00000-000', options);


      var options2 = {
        onComplete: function(cep) {
          alert('CEP Completed!:' + cep);
        },
        onKeyPress: function(cep, event, currentField, options) {
          console.log('An key was pressed!:', cep, ' event: ', event,
            'currentField: ', currentField, ' options: ', options);
        },
        onChange: function(cep) {
          console.log('cep changed! ', cep);
        },
        onInvalid: function(val, e, f, invalid, options) {
          var error = invalid[0];
          console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
        }
      };

      $('.mask-cep_with_callback').mask('00000-000', options2);

      var SPMaskBehavior = function(val) {
          return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
          onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
        };

      $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



      var slider = document.getElementById('noui-slider');
      noUiSlider.create(slider, {
        start: [20, 80],
        connect: true,
        range: {
          'min': 0,
          'max': 100
        }
      });

      var slider = document.getElementById('noui-range');
      noUiSlider.create(slider, {
        start: [20, 80], // Handle start position
        step: 10, // Slider moves in increments of '10'
        margin: 20, // Handles must be more than '20' apart
        connect: true, // Display a colored bar between the handles
        direction: 'rtl', // Put '0' at the bottom of the slider
        orientation: 'vertical', // Orient the slider vertically
        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
        range: { // Slider can select '0' to '100'
          'min': 0,
          'max': 100
        },
        pips: { // Show a scale with the slider
          mode: 'steps',
          density: 2
        }
      });



      $(".select2-A").select2({
        placeholder: "Select a state",
        allowClear: true
      });

      $(".select2-B").select2({
        tags: true
      });

      $("#range1").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
      });

      $('.dateAnimate').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false,
        animation: true
      });
      $('.date').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
      });
      $('.time').bootstrapMaterialDatePicker({
        date: false,
        format: 'HH:mm',
        animation: true
      });
      $('.datetime').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm',
        animation: true
      });
      $('.date-fr').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY HH:mm',
        lang: 'fr',
        weekStart: 1,
        cancelText: 'ANNULER'
      });
      $('.min-date').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY HH:mm',
        minDate: new Date()
      });


      $(".dial").knob({
        height: 80
      });

      $('.dial1').trigger(
        'configure', {
          "min": 10,
          "width": 80,
          "max": 80,
          "fgColor": "#FF6656",
          "skin": "tron"
        }
      );

      $('.dial2').trigger(
        'configure', {

          "width": 80,
          "fgColor": "#FF6656",
          "skin": "tron",
          "cursor": true
        }
      );

      $('.dial3').trigger(
        'configure', {

          "width": 80,
          "fgColor": "#27C24C",
        }
      );
    });
  </script>
  <!-- end: Javascript -->
  <!-- custom -->
   <script src="{{asset('asset/datejs/datepicker.en-US.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://fengyuanchen.github.io/js/common.js"></script>
  <script src="{{asset('asset/date/js/main.js')}}"></script>
  <script src="{{asset('asset/date/js/datepicker.js')}}"></script>




  <!-- end: Javascript -->
@endsection
