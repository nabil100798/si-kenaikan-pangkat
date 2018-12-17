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
    <div class="tab-wrapper text-center">
        <div class="panel box-shadow-none text-left content-header">
            <div class="panel-body" style="padding-bottom:0px">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft"> Form Pengajuan Angka Kredit</h3>
                    <p class="animated fadeInDown">
                        Input <span class="fa-angle-right fa"></span> Form Pengajuan
                    </p>
                </div>



            </div>
            <div class="col-md-12 top-20 padding-0">

                <div class="col-md-12" id="formpengajuan">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Form Pengajuan </h3>
                            <button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#modal">
                                <span class="fa fa-plus"></span> Add
                            </button>
                        </div>

                        <div class="panel-body">
                            <div class="responsive-table">
                                <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jabatan Asal</th>
                                            <th>Jabatan Tujuan</th>
                                            <th>Link Berkas</th>
                                            <th>Status</th>
                                            <th>catatan</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $pengajuan as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->jabatan_asal }}</td>
                                            <td>{{ $data->jabatan_tujuan }}</td>
                                            <td>{{ $data->link_drive }}></td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->catatan }}</td>
                                            <td>
                                              <!-- <button id="update" class="btn-warning btn btn-circle btn-mn edit" style="submit" value="{{ $data->id }}"><span class="fa fa-pencil"></span>
                                              </button> -->

                                              <button type="button" class="btn btn-circle btn-mn">
                                              <a href="https://{{ $data->link_drive }}" target="_blank"><span class="glyphicon glyphicon-edit"></span></a>
                                              </button>
                                              
                                                <form id="formdel" class="form-group" action="{{ route('pengajuan.destroy',$data->id) }}" method="post" style="display:inline-block">
                                                    @csrf
                                                    @method('delete')


                                                    <button id="delete" type="submit" class="btn btn-circle btn-mn btn-danger" value="{{ $data->id }}" onclick="return confirm(' you want to delete?');">
                                                        <span class="fa fa-trash"></span>
                                                    </button>
                                                    <!-- <button type="button" name="button" class="btn btn-success btn-circle btn-mn"><span class="icons icon-size-fullscreen"></span></button> -->

                                                    <!-- <button type="button" class="btn btn-primary btn-circle btn-mn" onclick="location.href='{{ url('/pak') }}';"><span class="icon icon-plus"></span></button> -->

                                                    <button type="button" class="btn btn-success">Kirim</button>

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- Passing BASE URL to AJAX -->
                        <input id="url" type="hidden" value="{{ \Request::url() }}">
                        <!-- Modal Tambah Pengajuan-->
                        <div id="modal" class="modal animated fadeInUp">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form id="form" class="" action="{{ route('pengajuan.store') }}" method="post">

                                        @csrf

                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">isi data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body" style="padding-bottom: 30px">
                                            <div class="form-group" style="padding-bottom: 50px"><label class="col-sm-3 control-label text-right">Jabatan Asal</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="id_jafung" name="id_jafung">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Asisten Ahli</option>
                                                        <option value="2">Lektor</option>
                                                        <option value="3">Lektor Kepala</option>
                                                        <option value="4">Guru Besar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" style="padding-bottom:50px">
                                                <label class="col-sm-3 control-label text-right">Jabatan Tujuan</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="id_jafung_tujuan" name="id_jafung_tujuan">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Asisten Ahli</option>
                                                        <option value="2">Lektor</option>
                                                        <option value="3">Lektor Kepala</option>
                                                        <option value="4">Guru Besar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" style="padding-bottom:50px">
                                                <label class="col-sm-3 control-label text-right">Masukkan Link</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control android" name="link_drive" id="link_drive">
                                                </div>
                                            </div>
                                        </div>
                                

                                <div class="modal-footer">
                  
                                <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">cara Upload</a>

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                
                                <a type="button" class="btn" href="https://drive.google.com" target="_blank">Upload</a>

                                <button type="submit" class="btn btn-primary">Save changes</button>

                              </div>
                                <div class="collapse" id="collapseExample">
                                <p>
                                  <div class="card card-body" style="padding-left: 20px;">
                                  <p>1. Pastikan Anda sudah login akun Google</p>
                                  <p>2. Click tombol Upload pada form</p>
                                  <p>3. ---------</p>
                                  <p>4. ---------</p>
                                  <p>5. ---------</p>
                                  <p>6. ---------</p>
                                  <p></p>
                                  <p></p>
                                  <p>*NB    : Buat folder sesaui dengan file yang akan di upload</p>
                                  <p>Contoh : Nama Folder : Jurnal Nasional-Judul jurnal </p>
                                  <p>         Isi File : Jurnal yang di upload(Jurnal Nasional-Judul) </p>
                                  </div>
                                  </p>
                                </div>


                                </form>
                              </div>
                            </div><!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>






                </div>

                {{-- Form Edit --}}
                  <div class="col-md-12 hide" id="formedit">
                      <div class="panel">
                          <div class="panel-heading">
                              <h3>Ubah Data Pegajuan</h3>
                          </div>
                          <div class="panel-body">
                              <form class="form" action="{{ url('getpengajuan') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $data->id }}">
                                  <div class="form-group" style="padding-bottom:50px"><label class="col-sm-3 control-label text-right">Jabatan Asal</label>
                                      <div class="col-sm-8">
                                          <select class="form-control" id="id_jafung_sekarang" name="id_jafung_sekarang" required>
                                              <option selected>Choose...</option>
                                              <option value="1">Asisten Ahli</option>
                                              <option value="2">Lektor</option>
                                              <option value="3">Lektor Kepala</option>
                                              <option value="4">Guru Besar</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group" style="padding-bottom:50px">
                                      <label class="col-sm-3 control-label text-right">Jabatan Tujuan</label>
                                      <div class="col-sm-8">
                                          <select class="form-control" id="id_jafung_tujuan" name="id_jafung_tujuan" required>
                                              <option selected>Choose...</option>
                                              <option value="1">Asisten Ahli</option>
                                              <option value="2">Lektor</option>
                                              <option value="3">Lektor Kepala</option>
                                              <option value="4">Guru Besar</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group" style="padding-bottom:50px">
                                      <label class="col-sm-3 control-label text-right">Masukkan Link</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control android" name="link_drive" id="link_drive" value="{{ $data->link_drive }}">
                                      </div>
                                  </div>
                                  <button id="btnkembali" type="button" class="btn-warning">Back</button>
                                  <button type="submit" name="button" class="btn btn-primary"> Submit</button>
                              </form>
                          </div>


                      </div>
                  </div>
                  {{-- End Form Edit --}}
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
<script src="{{asset('asset/js/plugins/jquery.datatables.min.js')}}"></script>
<script src="{{ asset('js/pengajuan.js') }}"></script>
<script src="{{asset('asset/js/plugins/datatables.bootstrap.min.js')}}"></script>

<!-- custom -->
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="{{ asset('asset/js/index.js') }}"></script>
<script>
    $(".edit").click(function() {
        var id = $(this).val();


        $('#modaledit').modal('show');
    });
</script>


<!-- end: Javascript -->
@endsection
