@extends('layouts/layout2')
@section('content')
<div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Pengaju</h3>
                        <p class="animated fadeInDown">
                          SIKP <span class="fa-angle-right fa"></span> Data Tables
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  
                  <a href="https://drive.google.com/open?id=1-Tmx2w-0mIYBQw9ZFMXlgKyLTqnqsuOt" class="btn btn-info btn-lg" target="_blank">
                  <span class="glyphicon glyphicon-download-alt"></span> Download
                  </a>
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Pengaju Jabatan</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama dosen</th>
                          <th>Jabatan Asal</th>
                          <th>Jabatan Tujuan</th>
                          <th>Link</th>
                          <th>Status</th>
                          <th>Catatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Fulan bin Achmad</td>
                          <td>Dosen Ahli</td>
                          <td>Lektor</td>
                          <td><li><a href="https://drive.google.com/drive/folders/1vu5sZvYEbSareHC8jdo1CVWuWuicucJR" target="_blank">LINK</a></li></td>
                          <td>Terverifikasi</td>
                          <td>Semua berkas sudah lengkap</td>
                          <td>
                            <button type="button" class="btn btn-success box-shadow-none btn-lg" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-edit"></button>
                            <a class="btn btn-secondary active btn-lg" href="https://drive.google.com/drive/folders/1vu5sZvYEbSareHC8jdo1CVWuWuicucJR" role="button" target="_blank"><span class="glyphicon glyphicon-open"></span></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fulani bin Fulan</td>
                          <td>Dosen Ahli</td>
                          <td>Lektor</td>
                          <td><li><a href="#">LINK</a></li></td>
                          <td> Revisi</td>
                          <td> Upload pemberkasan kurang</td>
                          <td>
                            <button type="button" class="btn btn-success box-shadow-none btn-lg" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-edit"></button>
                            <a class="btn btn-secondary active btn-lg" href="https://drive.google.com/drive/folders/1vu5sZvYEbSareHC8jdo1CVWuWuicucJR" role="button" target="_blank"><span class="glyphicon glyphicon-open"></span></a>
                          </td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Edit Status</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <div class="form-group" style="padding-bottom:5px;">
                    <label class="col-sm-2 control-label text-right">Nama</label>
                      <div class="col-sm-10"><input type="text" value="Fulani bin Fulani" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group" style="padding-bottom:5px;">
                    <label class="col-sm-2 control-label text-right">Jabatan Asal</label>
                      <div class="col-sm-10"><input type="text" value="Dosen Ahli" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group" style="padding-bottom:10px;">
                    <label class="col-sm-2 control-label text-right">Jabatan Tujuan</label>
                      <div class="col-sm-10"><input type="text" value="Lektor" class="form-control" disabled>
                      </div>
                    </div>

                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group" style="padding-bottom:10px;">
                    <label class="col-sm-2 control-label text-right">Link</label>
                      <div class="col-sm-10"><input type="text" value="https://drive.google.com" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Status</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Terverifikasi
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Revisi
                                </div>
                              </div>
                            </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Catatan</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>
              </div>
            </div>
          </div>