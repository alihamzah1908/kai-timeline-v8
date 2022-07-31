@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Procurement</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Judul Pengadaan</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="judul-pengadaan"></span>{{ $data->judul_pengadaan }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Vendor Name</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="vendor-name"></span>{{ $data->nama_vendor }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">No PR</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="no-pr"></span> {{ $data->no_pr }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">No MI</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="no-mi"></span>{{ $data->mi }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Nilai PR</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="nilai-pr"></span>{{ number_format($data->nilai_pr, 2); }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal PR</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="tanggal-pr"></span>{{ date('d/m/Y', strtotime($data->tanggal_pr)) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">No RAB</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="no-rab"></span>{{ $data->no_rab }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal RAB</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="tanggal-rab"></span>{{ date('d/m/Y', strtotime($data->tanggal_rab)) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">No KAK</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="no-kak"></span>{{ $data->no_kak }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal KAK</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="tanggal-kak"></span>{{ date('d/m/Y', strtotime($data->tanggal_kak)) }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal Justifikasi</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="tanggal-justifikasi"></span>{{ date('d/m/Y', strtotime($data->tanggal_justifikasi)) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="nav-item tab-draftrks">
                                <a href="#draftrks" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">RKS</span>
                                </a>
                            </li>
                            <li class="nav-item tab-peserta-tender">
                                <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Peserta Tender</span>
                                </a>
                            </li>
                            <li class="nav-item tab-aanwidjzing">
                                <a href="#aanwidjzing" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Aanwidjzing</span>
                                </a>
                            </li>
                            <li class="nav-item tab-dokumen-penawaran">
                                <a href="#dokumen-penawaran" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Dokumen Penawaran</span>
                                </a>
                            </li>
                            <li class="nav-item tab-evaluasi-dokumen">
                                <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Evaluasi Penawaran</span>
                                </a>
                            </li>
                            <li class="nav-item tab-klarifikasi">
                                <a href="#klarifikasi" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Klarifikasi, Konfirmasi dan Negoisasi</span>
                                </a>
                            </li>
                            <li class="nav-item tab-pemenang">
                                <a href="#pemenang" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Penetapan Pemenang</span>
                                </a>
                            </li>
                            <li class="nav-item tab-summary">
                                <a href="#summary" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Summary PBJ</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 text-muted col-md-12">
                            <div class="tab-pane show active" id="draftrks">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                        <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="sp3_id" id="sp3_id" />
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Template Proposal/Dokumen Penawaran:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Template Dokumen RKS:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Metode Submit Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="">Select Sampul</option>
                                                            <option value="1">1 Sampul</option>
                                                            <option value="2">2 Sampul</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="peserta-tender">
                                <div class="add-vendor">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Vendor Name:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select data-plugin="customselect" class="form-control" name="vendor_code[]">
                                                            <option value="">Select Vendor</option>
                                                            <option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>
                                                            <option value="RK100002">PT. SARANA MULTI CORPORA</option>
                                                            <option value="RK10003">PT. TRIINTI INTERNATIONAL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Phone Number:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">PIC Name:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email Corporate:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" name="email[]" class="form-control" placeholder="Please insert email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Vendor Address:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="aanwidjzing">
                                <div class="add-aanwidjzing">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="10%" rowspan="2">N0</th>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" colspan="2">KEHADIRAN</th>
                                                        <th width="40%" rowspan="2">KETERANGAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="10%">YA</th>
                                                        <th width="10%">TIDAK</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_2_value" id="verif_2_ya" value="2" checked="">
                                                                <label class="custom-control-label" for="verif_2_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_2_value" id="verif_2_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_2_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_2_note" id="verif_2_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3">3.</td>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_3a_value" id="verif_3a_ya" value="3" checked="">
                                                                <label class="custom-control-label" for="verif_3a_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_3a_value" id="verif_3a_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_3a_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_3a_note" id="verif_3a_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Berita Acara Aanwidjzing:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="dokumen-penawaran">
                                <div class="add-dokumen-penawaran">
                                    <div class="row">
                                    <label for="exampleInputEmail1">if 1 Sampul:</label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="3">PEMASUKAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="30%" rowspan="2">DOKUMEN (Admin, Teknis, Harga)</th>
                                                        <th width="30%" rowspan="2">TANGGAL SUBMIT</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pemasukan Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="3">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="30%" rowspan="2">DOKUMEN (Admin, Teknis dan Harga)</th>
                                                        <th width="30%" rowspan="2">TANGGAL PEMBUKAAN DOKUMEN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            Dokuemen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            Dokuemen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            Dokuemen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="exampleInputEmail1">if 2 Sampul:</label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">PEMASUKAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">TANGGAL SUBMIT (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                        <th width="20%" rowspan="2">TANGGAL SUBMIT (Harga)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">    
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pemasukan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pemasukan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pemasukan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pemasukan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Harga)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            Dokuemen File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="evaluasi-dokumen">
                                <div class="add-evaluasi-dokumen">
                                    <div class="row">
                                    <label for="exampleInputEmail1">if 1 Sampul:</label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">EVALUASI DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">TANGGAL EVALUASI</th>
                                                        <th width="10%" rowspan="2">LOLOS</th>
                                                        <th width="10%" rowspan="2">TIDAK LOLOS</th>
                                                        <th width="30%" rowspan="2">CATATAN EVALUASI</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Evaluasi Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <label for="exampleInputEmail1">if 2 Sampul:</label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="10%" rowspan="2">TANGGAL EVALUASI (Admin & Teknis)</th>
                                                        <th width="5%" rowspan="2">LOLOS</th>
                                                        <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                        <th width="20%" rowspan="2">CATATAN EVALUASI (Admin & Teknis)</th>
                                                        <th width="10%" rowspan="2">TANGGAL EVALUASI (Harga)</th>
                                                        <th width="5%" rowspan="2">LOLOS</th>
                                                        <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                        <th width="20%" rowspan="2">CATATAN EVALUASI (Harga)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 3
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_ya" value="1" checked="">
                                                                <label class="custom-control-label" for="verif_1_ya">Ya</label>
                                                            </div>        
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" name="verif_1_value" id="verif_1_tidak"  value="0">
                                                                <label class="custom-control-label" for="verif_1_tidak">Tidak</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Evaluasi Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Evaluasi Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>                                    
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="klarifikasi">
                                <div class="add-klarifikasi">
                                    <div class="row">
                                    <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">KLARIFIKASI, KONFIRMASI DAN NEGOISASI</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">TANGGAL KKN</th>
                                                        <th width="15%" rowspan="2">HPS/PAGU</th>
                                                        <th width="15%" rowspan="2">HARGA NEGOISASI</th>
                                                        <th width="30%" rowspan="2">CATATAN KKN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">       
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">       
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Memo Internal Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pemenang">
                                <div class="add-pemenang">
                                    <div class="row">
                                    <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">Select Vendor</option>
                                                                <option value="PT. ABC">PT. ABC</option>
                                                                <option value="PT. MAJU MUNDUR">PT. MAJU MUNDUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Hasil Pelelangan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Penetapan Pemenang note"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="summary">
                                <div class="add-summary">
                                    <div class="row">
                                    <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead  style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="6">SUMMARY PENGADAAN BARANG DAN JASA</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%" rowspan="2">KEGIATAN</th>
                                                        <th width="15%" rowspan="2">STATUS</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI KALENDER</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI KERJA</th>
                                                        <th width="10%" rowspan="2">UNCONTROLLED</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">       
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">  
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">       
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Memo Internal Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="summary">
                                <div class="add-summary">
                                    <div class="row">
                                    <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">ID Pengadaan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">1.616</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Judul Pengadaan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pengadaan ABC</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Hasil Pelelangan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Penetapan Pemenang note"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> 
@endsection