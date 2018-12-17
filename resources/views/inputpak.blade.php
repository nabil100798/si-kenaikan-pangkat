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

                    <h3 class="animated fadeInLeft">Halaman Input Angka Kredit</h3>

                    <p class="animated fadeInDown">
                        Input <span class="fa-angle-right fa"></span> PAK
                    </p>
                </div>
                <ul id="tabs-demo" class="nav nav-tabs content-header-tab" role="tablist" style="padding-top:10px;">

                    <li role="presentation" class="active">
                        <a href="#panels-area-demo" id="tabs1" data-toggle="tab">PAK</a>
                    </li>
                    <li role="presentation">
                        <a href="#hasilpak" id="tab2" data-toggle="tab">PAK Sementara</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 tab-content animated fadeInRight">
            {{-- START TAB PANE --}}

            {{-- END TAB PANE 1 --}}
            {{-- START PANEL 2 --}}
            <div role="tabpanel" class="tab-pane fade active in" id="panels-area-demo" aria-labelledby="tabs1">
                <div class="form-element">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-5 hide">
                            <div class="form-group">
                                <center>
                                    <div class="col-md-12 padding-0">
                                    </div>
                                </center>
                            </div>
                            <div class="form-group col-md-12" style="padding-top:30px;">
                                <div class="col-md-12 padding-0">
                                    <div id="noui-slider"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9 padding-1 animated fadeInRight">
                        <div class="col-md-12 panel form-element-padding" style="padding-bottom:80px;">
                            <div class="col-md-12 panel-body">
                                <form id="inputpak" class="col-md-12 panel-body" action="#" method="post">
                                    @csrf
                                    {{-- Pemilihan Unsur --}}
                                    <div class="input-group fileupload-v1">
                                        <input type="text" name="manualfile" class="fileupload-v1-file hidden">
                                        <input id="namarubrik" type="text" class="form-control fileupload-v1-path" placeholder="rubrik penilaian" disabled="">
                                        <span class="input-group-btn">
                                            <button id="btnpilih" class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Browse</button>
                                        </span>
                                    </div>
                                    {{-- End Pemilihan Unsur --}}
                                        <input id="idbidang" type="text" name="idbidang" hidden>
                                    <div class="form-group" style="padding-bottom:30px">
                                        <label class="col-sm-2 control-label text-left">Uraian Kegiatan</label>
                                        <div class="col-sm-10" style="padding-bottom:30px">
                                            <textarea name="uraian" rows="5" cols="65"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-10" style="padding-bottom:30px;left:25px">
                                        <label class="col-sm-2" style="right:30px">Tanggal Kegiatan</label>
                                        <div class="input-group col-md-10" style="bottom:25px">
                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control docs-date" name="datestart" placeholder="tanggal mulai" style="margin-right:20px">
                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control docs-date" name="dateend" placeholder="Tanggal berakhir">

                                        </div>


                                    </div>

                                    <div class="form-group" style="padding-bottom:10px">
                                        <label class="col-sm-2 control-label text-left">Satuan Hasil</label>
                                        <div class="col-sm-10" style="bottom:35px">
                                            <select name="satuan" class="col-sm-12 select2-A" id="unsur" style="width:200px">
                                                <option selected>Choose...</option>
                                                <option>SKS</option>
                                                <option>Tiap Terbitan Jurnal </option>
                                                <option>Prosiding</option>
                                                <option>Buku</option>
                                                <option>Terlaksananya program</option>
                                                <option>Per Kegiatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:50px">
                                        <label class="col-sm-2 control-label text-left">Link Berkas</label>
                                        <div class="col-sm-10" style="padding-bottom:50px">
                                            <input type="text" name="" value="" class="form-control android">
                                        </div>

                                    </div>
                                    <div class="form-group" style="padding-bottom:50px">
                                        <label class="col-sm-2 control-labe text-left">Volume Kegiatan</label>
                                        <div class="col-sm-3" style="padding-bottom:30px">
                                            <input id="volume" type="text" name="volume" value="" class="form-control android">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:50px">
                                        <label class="col-sm-2 control-labe text-left">Angka Kredit</label>
                                        <div class="col-sm-3" style="padding-bottom:30px;width:250px">
                                            <input id="angkakredit" type="text" name="angkakredit"  class="form-control android">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:50px">
                                        <label class="col-sm-2 control-labe text-left">Total Angka Kredit</label>
                                        <div class="col-sm-3" style="padding-bottom:30px">
                                            <input id="total" type="text" name="total" class="form-control android">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="button" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    {{-- End Section Input! --}}

                    <div class="col-md-3 panel padding-1 form-element-padding animated fadeInRight">
                        <div class="form-group" style="padding-bottom:50px">
                            <label class="col-sm-6 control-label text-right">Jabatan Asal</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control success" placeholder="Asisten Ahli" disabled="">
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:50px">
                            <label class="col-sm-6 control-label text-right">Jabatan Tujuan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control success" placeholder="Lektor" disabled="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div type="text" id="noui-range" class="hide">
            </div>
            <div role="tabpanel" class="tab-pane" id="hasilpak" aria-labelledby="tab2">
                <div class="form-panel">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 animated fadeInRight">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3>Hasil Sementara</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="responsive-table">
                                        <table id="tbhasil" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>id dupak</td>
                                                    <td>nama unsur</td>
                                                    <td>nama sub unsur</td>
                                                    <td>nama sub bidang</td>
                                                    <td>isian rubrik</td>
                                                    <td>tanggal mulai</td>
                                                    <td>tanggal berakhir</td>
                                                    <td>berkas</td>
                                                    <td>angka kredit total</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($getrubrik as $rubrik )
                                                <tr>


                                                    <td>{{ $rubrik->id_rubrik }}</td>
                                                    <td>{{ $rubrik->id_dupak }}</td>
                                                    <td>{{ $rubrik->nama_unsur }}</td>
                                                    <td>{{ $rubrik->nama_sub_unsur }}</td>
                                                    <td>{{ $rubrik->nama_sub_bidang }}</td>
                                                    <td>{{ $rubrik->isian_rubrik }}</td>
                                                    <td>{{ $rubrik->tanggal_mulai }}</td>
                                                    <td>{{ $rubrik->tanggal_berakhir }}</td>
                                                    <td>{{ $rubrik->berkas }}</td>
                                                    <td>{{ $rubrik->angka_kredit_total }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Pilih Rubrik --}}
        <div class="modal" tabindex="-1" role="dialog" id="modalpilih">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:1000px;right:200px">
                    <div class="modal-header">
                        <h5 class="modal-title">Pilih Unsur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="responsive-table">
                          <table id="tbnilai" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                  <tr>
                                      <td hidden>Id Sub Bidang</td>
                                      <td>nama unsur</td>
                                      <td>nama sub unsur</td>
                                      <td>nama sub bidang</td>
                                      <td>angka kredit</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($getnilai as $nilai )
                                  <tr>
                                      <td hidden>{{ $nilai->id_sub_bidang }}</td>
                                      <td>{{ $nilai->nama_unsur }}</td>
                                      <td>{{ $nilai->nama_sub_unsur }}</td>
                                      <td>{{ $nilai->nama_sub_bidang }}</td>

                                      <td>{{ $nilai->angka_kredit }}</td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
            {{-- End Modal --}}
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
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables-example').DataTable();
    });
</script>
<script>
    // $('#unsur').change(function() {
    //     var idunsur = $(this).val();
    //     //console.log(idunsur);
    //     if (idunsur) {
    //         $.ajax({
    //             type: "GET",
    //             url: "{{url('getsubunsur')}}?id_unsur=" + idunsur, //id_unsur ikuti sama di controller
    //             success: function(data) {
    //                 //alert(data)
    //                 //console.log(data);
    //                 if (data) {
    //                     $("#subunsur").empty(); //di kosongi dulu subunsur
    //                     $("#subunsur").append('<option>Select</option>');
    //                     $.each(data, function(value, key) {
    //                         $("#subunsur").append('<option value="' + key + '">' + value + '</option>');
    //                     });
    //
    //                 } else {
    //                     $("#subunsur").empty();
    //                 }
    //             }
    //         });
    //     } else {
    //         $("#subunsur").empty();
    //     }
    // });
</script>
<script>
    // $('#subunsur').change(function() {
    //     var idsubunsur = $(this).val();
    //     //console.log(idsubunsur);
    //     if (idsubunsur) {
    //         $.ajax({
    //             type: "GET",
    //             url: "{{url('getsubbidang')}}?id_sub_unsur=" + idsubunsur, //id_sub_unsur ikuti sama di controller
    //             success: function(data) {
    //                 //alert(data)
    //                 //console.log(data);
    //                 if (data) {
    //                     $("#subbidang").empty(); //di kosongi dulu subunsur
    //                     $("#subbidang").append('<option>Select</option>');
    //                     $.each(data, function(value, key) {
    //                         $("#subbidang").append('<option value="'+ key +'">'+ value +'</option>');
    //                     });
    //
    //                 } else {
    //                     $("#subbidang").empty();
    //                 }
    //             }
    //         });
    //     } else {
    //         $("#subbidang").empty();
    //     }
    // });
</script>
<script>
    // $('#subbidang').change(function(event) {
    //     var idsubbidang = $(this).val();
    //     $('#angkakredit').val();
    //     //console.log(idsubbidang);
    //     if(idsubbidang){
    //       $.ajax({
    //           type: "GET",
    //           url: "{{url('getangkakredit')}}?id_sub_bidang=" + idsubbidang,
    //           success: function(data) {
    //               if(data){
    //                 console.log(data);
    //
    //                     $('#angkakredit').val(data.angka_kredit);
    //
    //               }else{
    //                 ('#angkakredit').empty();
    //               }
    //           }
    //       });
    //     }else{
    //       $('#angkakredit').empty();
    //     }
    // });
    $('#volume').on('input', function() {
        var ak = $('#angkakredit').val();
        var vol = $(this).val();
        $('#total').val(ak * vol);
    });
</script>
<!-- end: Javascript -->
@endsection
