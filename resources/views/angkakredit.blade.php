@extends('layouts.template')
@section('css')
<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

<!-- plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/datatables.bootstrap.min.css')}}" />
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
    <img src="{{asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
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
    <div class="tabs-wrapper text-center">
        <div class="panel box-shadow-none text-left content-header">
            <div class="panel-body" style="padding-bottom:0px;">
                <div class="col-md-12">

                    <h3 class="animated fadeInLeft">Angka Kredit</h3>

                    <p class="animated fadeInDown">
                        Input <span class="fa-angle-right fa"></span> Angka Kredit
                    </p>
                </div>
                <ul id="tabs-demo" class="nav nav-tabs content-header-tab" role="tablist" style="padding-top:10px;">
                    <li role="presentation" class="active">
                        <a href="#tabs-area-demo" id="tabs2" data-toggle="tab">Unsur Penilaian</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-12 tab-content animated fadeInRight">
          <div class="panel">
            <div class="panel-heading">
              <h3>Daftar unsur</h3>
            </div>
            <div class="panel-body">
              <div class="responsive-table">
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Unsur</th>
                      <th>Sub Unsur</th>
                    </tr>
                  </thead>
                  <tbody>
                    

                  </tbody>
                </table>

              </div>
            </div>

          </div>
            <div type="text" id="noui-range" class="hide">
            </div>
        </div>
        {{-- END TAB PANELS 2 --}}
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
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/vue.min.js') }}"></script>

<!-- end: Javascript -->
<!-- custom -->
<script src="{{asset('asset/datejs/datepicker.en-US.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://fengyuanchen.github.io/js/common.js"></script>
<script src="{{asset('asset/date/js/main.js')}}"></script>
<script src="{{asset('asset/date/js/datepicker.js')}}"></script>

<script src="{{asset('js/button-counter.js')}}"></script>
<script src="{{asset('js/custom-select.js')}}"></script>

<script>
    new Vue({
      el: "#content",

      components: {
        ButtonCounter: ButtonCounter,
        CustomSelect: CustomSelect,
      },

      data() {
        return {
          unsurs: [
            { value: 0, text: "Pendidikan" },
            { value: 1, text: "Pelaksana Pendidikan" },
            { value: 2, text: "Penelitian" },
            { value: 3, text: "Pengabdian" },
            { value: 4, text: "Penunjang" },
          ],

          selectedUnsur: null,
          selectedSubUnsur: null,

          groupSubUnsur: {
            0: [
              { value: 0, text: "Dokter/Sederajat" },
              { value: 1, text: "Magister/Sederajat" },
              { value: 2, text: "Mengikuti Diklat prajabatan gol 3" },

            ],
            1: [
              { value: 0, text: "Asisten Ahli/Lektor/Lektor Kepala" },
              { value: 1, text: "Kegiatan Pelaksanaan Pendidikan Dokter Klinis" },
              { value: 2, text: "" },
            ],
          },

          groupSubBidang: {
            0: [
              { value: 0, text: "tesis"},
              { value: 1, text: "desertasi"},
            ],
            1: [
              { value: 0, text: "skripsi"},
              { value: 1, text: "tugas akhir"},
            ],
          },

          subUnsurs: [],
        }
      },

      methods: {
        handleSelectUnsur(value) {
          console.log(value)
          this.selectedUnsur = value
        },
        handleSelectSubUnsur(value){
          this.selectedSubUnsur = value
          console.log(this.groupSubBidang[this.selectedSubUnsur])
        },
      },

      mounted() {
        $('#datatables-example').DataTable();
      }



    })


</script>


<!-- end: Javascript -->
@endsection
