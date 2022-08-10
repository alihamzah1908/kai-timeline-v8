@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Contract</h4>
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
                            <label class="font-weight-bold">: <span class="vendor-name"></span>{{ $data->vendor }}</label>
                        </div>
                    </div>
                    {{--<div class="row">
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
                    </div>--}}
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="nav-item tab-jadwal-pelaksanaan">
                                <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Jadwal Pelaksanaan</span>
                                </a>
                            </li>
                            <li class="nav-item tab-draftrks">
                                <a href="#draftrks" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Draft RKS</span>
                                </a>
                            </li>
                            <li class="nav-item tab-reviewrks">
                                <a href="#reviewrks" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Review RKS</span>
                                </a>
                            </li>
                            <li class="nav-item tab-peserta-tender">
                                <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Peserta Tender</span>
                                </a>
                            </li>
                            <li class="nav-item tab-evaluasi-dokumen">
                                <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Evaluasi Dokumenn</span>
                                </a>
                            </li>
                            <li class="nav-item tab-klarifikasi">
                                <a href="#klarifikasi-negoisasi" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Klarifikasi dan Negoisasi</span>
                                </a>
                            </li>
                            <li class="nav-item tab-contract">
                                <a href="#contract" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Contract</span>
                                </a>
                            </li>
                            <li class="nav-item tab-approval">
                                <a href="#approval" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Approval</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 text-muted col-md-12">
                            <div class="tab-pane show active" id="home">
                                <form action="#" id="jadwal-pelaksanaan">
                                    <input type="hidden" name="penjadwalan" value="penjadwalan">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Jadwal Pemberian Penjelasan:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="penjelasan_end_date" name="penjelasan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Pemasukan Dokumen Penawaran:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="pemasukan_start_date" name="pemasukan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="pemasukan_end_date" name="pemasukan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Pembukaan Dokumen Penawaran:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="penawaran_start_date" name="penawaran_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="penawaran_end_date" name="penawaran_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Evaluasi Administrasi, Teknis dan Harga:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="evaluasi_start_date" name="evaluasi_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="evaluasi_end_date" name="evaluasi_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Penetapan dan Pengumuman Pemenang:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="pengumuman_start_date" name="pengumuman_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="pengumuman_end_date" name="pengumuman_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Penandatanganan Kontrak:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="tandatangan_start_date" name="tandatangan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                        </div>
                                        <div class="col-md-1">
                                            <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="tandatangan_end_date" name="tandatangan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded save-jadwal">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="draftrks">
                                <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="sp3_id" id="sp3_id" />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Upload Template Proposal/Dokumen Penawaran:</label>
                                                <input type="file" name="file" class="form-control" id="file">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Upload Draft RKS:</label>
                                                <input type="file" name="file_draft" class="form-control" id="file-draft">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Metode Submit Dokumen:</label>
                                                <select class="form-control">
                                                    <option value="">Select Sampul</option>
                                                    <option value="">1 Sampul</option>
                                                    <option value="">2 Sampul</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
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
                            <div class="tab-pane" id="reviewrks">
                                <form action="#" id="form-reviewrks" enctype="multipart/form-data">
                                    <table id="review-rks" class="table dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Judul Pengadaan</th>
                                                <th>Metode Submit Dokumen</th>
                                                <th>File Proposal/Template</th>
                                                <th>Draft RKS</th>
                                                <th>Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="tab-pane" id="peserta-tender">
                                <div class="add-vendor">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                                                <select data-plugin="customselect" class="form-control" name="vendor_code[]">
                                                    <option value="">Select Vendor</option>
                                                    <option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>
                                                    <option value="RK100002">PT. SARANA MULTI CORPORA</option>
                                                    <option value="RK10003">PT. TRIINTI INTERNATIONAL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">PIC Name</label>
                                                <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Email Corporate</label>
                                                <input type="text" name="email[]" class="form-control" placeholder="Please insert email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>
                                                <input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Address</label>
                                                <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>
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
                            <div class="tab-pane" id="evaluasi-dokumen">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Sampul</label>
                                        <select class="form-control">
                                            <option value="">Select Sampul</option>
                                            <option value="">Penunjukan Langsung</option>
                                            <option value="">Pemilihan Langsung</option>
                                            <option value="">Lelang Terbuka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Dokumen Admin</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Harga</label>
                                            <input type="text" name="harga" class="form-control" placeholder="please insert harga">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="approval">
                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager Legal:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                    </div>
                                </div>
                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP Legal:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                    </div>
                                </div>

                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager Sarana/Non-Sarana:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                    </div>
                                </div>
                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP Sarana/Non-Sarana:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                    </div>
                                </div>

                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager User:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                    </div>
                                </div>
                                <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP User:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                        <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
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