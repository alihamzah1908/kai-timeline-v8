@extends('layouts.master')
@section('content')
<style>
    label {
        font-size: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.taskpbj') }}"><b>Back</b></a></li>
                    <li class="breadcrumb-item"><a href="#"><b>Detail {{ $data->judul_pengadaan }}</b></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Procurement</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Judul Pengadaan</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="judul-pengadaan"></span>{{ $data->judul_pengadaan }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Vendor Name</dt>
                        </div>
                        <div class="col-md-3 ">
                            <dt class="font-weight-normal">: <span class="vendor-name"></span>{{ str_replace(array( '"', '[', ']' ),'' , $data->nama_vendor); }}</dt>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="nilai-pr"></span>{{ number_format($data->nilai_pr, 0); }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai Tax</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="nilai-pr"></span>{{ number_format($data->nilai_tax, 0); }}</dt>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-pr"></span> @foreach($trx_npp as $pr){{ $pr->no_pr }}, <br />@endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_pr)) }}@endforeach</dt>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No MI</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-mi"></span>{{ $data->no_mi }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal MI</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>{{ date('d/m/Y', strtotime($data->tanggal_mi)) }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No RAB</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-rab"></span>@foreach($trx_npp as $pr){{ $pr->no_rab }}, <br />@endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal RAB</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-rab"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_rab)) }}@endforeach</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No Justifikasi Barang</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-mi"></span>@foreach($trx_npp as $pr){{ $pr->no_justifikasi }}, <br />@endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal Justifikasi Barang</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_justifikasi)) }}@endforeach</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No Justifikasi Pemilihan/Penujukan Langsung</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-mi"></span>{{ $data->no_justifikasi }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal Justifikasi Pemilihan/Penunjukan Langsung</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>{{ date('d/m/Y', strtotime($data->tanggal_justifikasi_pemilihan)) }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No KAK</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-kak"></span>{{ $data->no_kak }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal KAK</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-kak"></span>{{ date('d/m/Y', strtotime($data->tanggal_kak)) }}</dt>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tipe Pemilihan</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="judul-pengadaan"></span>{{ ($data->type_metode == '1' ? 'Penunjukan Langsung' : ($data->type_metode == '2' ? 'Pemilihan Langsung' : 'Lelang Terbuka')) }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Status </dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <badges class="badge badge-danger">{{ $data->get_status->keterangan }}</badges>
                            </dt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">PBJ Process</h4>
                    <p class="sub-header">Procces of PBJ</p>
                    <div id="smartwizard-arrows" class="sw-main sw-theme-arrows">
                        <input type="hidden" value="{{ $data->proses_st }}" id="contract_status">
                        <input type="hidden" value="{{ $data->sp3_id }}" id="id">
                        <ul class="nav nav-tabs step-anchor">
                            <li class="nav-item rks"><a href="#sw-arrows-step-1" class="nav-link">RKS<small class="d-block">Step description</small></a></li>
                            <li class="nav-item calon-tender"><a href="#sw-arrows-step-2" class="nav-link">Calon Peserta Tender<small class="d-block">Step description</small></a></li>
                            <li class="nav-item aanwidjzing"><a href="#sw-arrows-step-3" class="nav-link">Aanwidjzing<small class="d-block">Step description</small></a></li>
                            <li class="nav-item doc-penawaran"><a href="#sw-arrows-step-4" class="nav-link">Dokumen Penawaran<small class="d-block">Step description</small></a></li>
                            <li class="nav-item eval-penawaran"><a href="#sw-arrows-step-5" class="nav-link">Evaluasi Penawaran<small class="d-block">Step description</small></a></li>
                            <li class="nav-item kkn"><a href="#sw-arrows-step-6" class="nav-link">Klarifikasi, Konfirmasi dan Negoisasi<small class="d-block">Step description</small></a></li>
                            <li class="nav-item bahp"><a href="#sw-arrows-step-7" class="nav-link">Berita Acara Hasil Pelelangan<small class="d-block">Step description</small></a></li>
                            <li class="nav-item ucp"><a href="#sw-arrows-step-8" class="nav-link">Usulan Calon Pemenang<small class="d-block">Step description</small></a></li>
                            <li class="nav-item pcp"><a href="#sw-arrows-step-9" class="nav-link">Penetapan Calon Pemenang<small class="d-block">Step description</small></a></li>
                            <li class="nav-item spr"><a href="#sw-arrows-step-10" class="nav-link">SPR<small class="d-block">Step description</small></a></li>
                        </ul>
                        <div class="p-3 sw-container tab-content" style="min-height: 198.133px;">
                            <div id="sw-arrows-step-1" class="tab-pane step-content">
                                <h6>Draft RKS</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                <form action="{{ route('procurement.store') }}" id="form-draftrks" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" id="sp3-id" value="{{ $data->sp3_id }}" />
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Template Proposal/Dokumen Penawaran:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_penawaran" class="form-control" id="file-penawaran">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                @if($rks)
                                                                <h6>
                                                                    <a href="{{ asset('file/rks/'. $rks->file_penawaran) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $rks->file_penawaran }}
                                                                    </a>
                                                                </h6>
                                                                @else
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                                @endif
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
                                                                <input type="file" name="file_dokumen" class="form-control" id="file-dokumen">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                @if($rks)
                                                                <h6>
                                                                    <a href="{{ asset('file/rks/'. $rks->file_dokumen) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $rks->file_dokumen }}
                                                                    </a>
                                                                </h6>
                                                                @else
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                                @endif
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
                                                                <select class="form-control" name="metode_dokumen" id="metode-dokumen">
                                                                    <option value="">Select Sampul</option>
                                                                    <option value="1_sampul" @if($rks) {{ $rks->metode == '1_sampul' ? ' selected' : '' }} @endif>1 Sampul</option>
                                                                    <option value="2_sampul" @if($rks) {{ $rks->metode == '2_sampul' ? ' selected' : '' }} @endif>2 Sampul</option>
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
                                                                <textarea name="catatan_rks" id="catatan-rks" class="form-control" placeholder="Please insert RKS note">{{ $rks ? $rks->catatan : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            @if($data->proses_st == 'PROSES_RRKS')
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-warning btn-sm btn-rounded approve mr-2" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded reject" data-bind="{{ $data->proses_st }}"><i class="uil uil-reject"></i>Reject</button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-2" class="tab-pane step-content">
                                <h6>Calon Peserta Tender</h6>
                                <form action="{{ route('save.tender') }}" method="post" id="tender">
                                    <div class="add-vendor">
                                        <input type="hidden" name="sp3_id" id="sp3-id" value="{{ $data->sp3_id }}" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="row">
                                            @php
                                            $tender = DB::table('public.trx_peserta_tender as a')
                                            ->select('a.*', 'b.vendor_code','b.vendor_name')
                                            ->join('public.vendor as b','a.vendor_code','b.vendor_code')
                                            ->where('sp3_id', $data->sp3_id)
                                            ->get();
                                            @endphp
                                            @if($tender->count() > 0)
                                            @foreach($tender as $val)
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
                                                            <input type="text" class="form-control" value="{{ $val->vendor_name }}" disabled />
                                                            <input type="hidden" class="form-control" name="vendor_code[{{$val->peserta_tender_id}}]" value="{{ $val->vendor_code }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert phone number" value="{{ $val->phone_number }}">
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
                                                            <input type="text" name="pic_name[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert pic name" value="{{ $val->pic_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Corporate:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="email[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert email" value="{{ $val->email_corporate }}">
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
                                                            <textarea name="vendor_address[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert vendor addres" value="{{ $val->address }}">{{ $val->address }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
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
                                                            <!-- <input type="text" class="form-control vendor_name-1" name="vendor_name[]" placeholder="Please search vendor name">
                                                            <input type="text" class="form-control code-1" name="vendor_code[]" value="">
                                                            <div class="loading"></div> -->
                                                            <select data-plugin="customselect" class="form-control" name="vendor_code[]">
                                                                <option value="">Select Vendor</option>

                                                                <?php
                                                                $vendor = DB::table('public.vendor')->limit(5)->get();
                                                                foreach ($vendor as $val) {
                                                                ?>
                                                                    <option value="{{ $val->vendor_code }}">{{ $val->vendor_name }}</option>
                                                                <?php } ?>
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
                                                            <input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number" value="">
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
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Corporate:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="email[]" class="form-control" placeholder="Please insert email" value="">
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
                                                            <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-3" class="tab-pane step-content">
                                <h6>Aanwidjzing</h6>
                                <form id="form-aanwidjzing" enctype="multipart/form-data" method="post" action="{{ route('save.aanwidjzing') }}">
                                    @csrf
                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="add-aanwidjzing">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
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
                                                        @if($aandwidjzing->count() > 0)
                                                        @php
                                                        $i = 1;
                                                        @endphp
                                                        @foreach($aandwidjzing as $val)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[{{$val->aanwidjzing_id}}]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->aanwidjzing_id}}]" id="verif_{{$val->aanwidjzing_id}}_ya" value="1" @if($val->verif_value == '1') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="verif_{{$val->aanwidjzing_id}}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->aanwidjzing_id}}]" id="verif_{{$val->aanwidjzing_id}}_tidak" value="0" @if($val->verif_value == '0') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="verif_{{$val->aanwidjzing_id}}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="verif_note[{{$val->aanwidjzing_id}}]" id="verif_{{ $val->aanwidjzing_id}}_note" class="form-control" placeholder="Penjelasan">{{ $val->verif_note }}</textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @php
                                                        $i = 1;
                                                        @endphp
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[{{$val->peserta_tender_id}}]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->peserta_tender_id}}]" id="verif_{{$val->peserta_tender_id}}_ya" value="1">
                                                                    <label class="custom-control-label" for="verif_{{$val->peserta_tender_id}}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->peserta_tender_id}}]" id="verif_{{$val->peserta_tender_id}}_tidak" value="0">
                                                                    <label class="custom-control-label" for="verif_{{$val->peserta_tender_id}}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="verif_note[{{$val->peserta_tender_id}}]" id="verif_{{ $val->peserta_tender_id}}_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif

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
                                                <input type="file" name="file_berita_acara" class="form-control" id="file-draft">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="sw-arrows-step-4" class="tab-pane step-content">
                                <div class="add-dokumen-penawaran">
                                    @php
                                    $rks = \App\Models\DraftRks::where('sp3_id', $data->sp3_id)->first();
                                    @endphp
                                    @if($rks)
                                    @if($rks->metode == '1_sampul')
                                    @if($data->proses_st == 'PROSES_PDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.document-penawaran') }}" method="post" id="form-dokumen-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
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
                                                        @foreach($tender_aanwidjzing as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_dokumen[]" class="form-control" id="file-dokumen">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="dok_admin_date" name="dok_admin_date[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                        </tr>
                                                        @endforeach
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
                                                            <input type="file" name="file_berita_acara" class="form-control" id="file-draft">
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
                                                            <textarea name="catatan_berita_acara" id="catatan_berita_acara" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
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
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_dokumen','b.vendor_code','b.vendor_name')
                                                    ->where('a.sp3_id', request()->id)
                                                    ->join('public.vendor as b','a.vendor_code','b.vendor_code')
                                                    ->get();
                                                    @endphp
                                                    @foreach($tender_aanwidjzing as $val)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->vendor_name }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/'. $doc->file_dokumen) }}">
                                                                <p><i class="uil uil-file-alt"></i> {{ $doc->file_dokumen }}</p>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_dokumen }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                                            @if($data->proses_st == 'PROSES_PDP')
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}">Reject</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-status="gagal_lelang">Gagal Lelang</button>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                    @elseif($rks->metode == '2_sampul')
                                    @if($data->proses_st == 'PROSES_PDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.document-penawaran') }}" method="post" id="form-dokumen-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
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
                                                        @foreach($tender_aanwidjzing as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_teknis[]" class="form-control" id="file-draft">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_submit_teknis[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_harga[]" class="form-control" id="file-draft">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_submit_harga[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                        </tr>
                                                        @endforeach
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
                                                <!-- <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                                    </div>
                                                </div> -->
                                            </form>
                                        </div>
                                    </div>
                                    @elseif($data->proses_st == 'PROSES_PPDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
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
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_dokumen','b.vendor_code','b.vendor_name','a.file_teknis','a.tanggal_submit_teknis','a.file_harga',
                                                    'a.tanggal_submit_harga')
                                                    ->where('a.sp3_id', request()->id)
                                                    ->join('public.vendor as b','a.vendor_code','b.vendor_code')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->vendor_name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_teknis) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_teknis }}">
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_harga) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_harga }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1">Reject</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-status="gagal_lelang">Gagal Lelang</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
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
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_teknis','a.tanggal_submit_harga','a.file_teknis','a.file_harga','b.vendor_code','b.vendor_name')
                                                    ->where('a.sp3_id', request()->id)
                                                    ->join('public.vendor as b','a.vendor_code','b.vendor_code')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->vendor_name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_teknis) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_teknis }}">
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_harga) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_harga }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <div id="sw-arrows-step-5" class="tab-pane step-content">
                                <div class="add-evaluasi-dokumen">
                                    @if($rks)
                                    @if($rks->metode == '1_sampul')
                                    <div class="row">
                                        <!-- <label for="exampleInputEmail1">if 1 Sampul:</label> -->
                                        <div class="col-md-12">
                                            <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="1_sampul" class="metode_sampul" />/>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">EVALUASI DOKUMEN PENAWARAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL EVALUASI</th>
                                                            <th width="10%" rowspan="2">LULUS</th>
                                                            <th width="10%" rowspan="2">GUGUR</th>
                                                            <th width="30%" rowspan="2">CATATAN EVALUASI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @if($evaluasi_1_sampul->count() > 0)
                                                        @foreach($evaluasi_1_sampul as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}

                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_evaluasi_dokumen[{{$val->document_evaluasi_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $val->tanggal_evaluasi_dokumen }}">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->document_evaluasi_id }}]" id="penilaian_{{$val->document_evaluasi_id }}_ya" value="1" @if($val->penilaian_dokumen == '1') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="penilaian_{{$val->document_evaluasi_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->document_evaluasi_id }}]" id="penilaian_{{$val->document_evaluasi_id }}_tidak" value="0" @if($val->penilaian_dokumen == '0') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="penilaian_{{$val->document_evaluasi_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_evaluasi[{{ $val->document_evaluasi_id }}]" class="form-control" placeholder="Penjelasan">{{ $val->keterangan_evaluasi_dokumen }}</textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @foreach($tender_aanwidjzing as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[{{$val->aanwidjzing_id }}]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_evaluasi_dokumen[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->aanwidjzing_id }}]" id="penilaian_{{$val->aanwidjzing_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="penilaian_{{$val->aanwidjzing_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->aanwidjzing_id }}]" id="penilaian_{{$val->aanwidjzing_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="penilaian_{{$val->aanwidjzing_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_evaluasi[{{ $val->aanwidjzing_id }}]" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
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
                                                        @if($evaluasi_1_sampul->count() > 0)
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}">Reject</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    @if($rks->metode == '2_sampul')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-harga" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="2_sampul" class="metode_sampul" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
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
                                                        @if($evaluasi_2_sampul->count() > 0)
                                                        @foreach($evaluasi_2_sampul as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[{{$val->document_evaluasi_id }}]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_admin[{{$val->document_evaluasi_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $val->tanggal_evaluasi_admin }}">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_ya" value="1" @if($val->penilaian_admin == '1') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_tidak" value="0" @if($val->penilaian_admin == '0') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_admin[{{$val->document_evaluasi_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan">{{ $val->keterangan_evaluasi_admin }}</textarea>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_harga[{{$val->document_evaluasi_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $val->tanggal_evaluasi_harga }}">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->document_evaluasi_id}}]" id="harga_{{$val->document_evaluasi_id }}_ya" value="1" @if($val->penilaian_harga == '1') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="harga_{{$val->document_evaluasi_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->document_evaluasi_id}}]" id="harga_{{$val->document_evaluasi_id }}_tidak" value="0" @if($val->penilaian_harga == '0') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="harga_{{$val->document_evaluasi_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_harga[{{$val->document_evaluasi_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan">{{ $val->keterangan_evaluasi_harga }}</textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @foreach($tender_aanwidjzing as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[{{$val->aanwidjzing_id }}]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_admin[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->aanwidjzing_id }}]" id="admin_{{$val->aanwidjzing_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="admin_{{$val->aanwidjzing_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->aanwidjzing_id }}]" id="admin_{{$val->aanwidjzing_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="admin_{{$val->aanwidjzing_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_admin[{{$val->aanwidjzing_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_harga[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->aanwidjzing_id}}]" id="harga_{{$val->aanwidjzing_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="harga_{{$val->aanwidjzing_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->aanwidjzing_id}}]" id="harga_{{$val->aanwidjzing_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="harga_{{$val->aanwidjzing_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_harga[{{$val->aanwidjzing_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
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
                                                        @if($data->proses_st == 'PROSES_EDH')
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}">Reject</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <div id="sw-arrows-step-6" class="tab-pane step-content">
                                <div class="add-klarifikasi">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <form action="{{ route('save.klarifikasi') }}" method="post" id="form-klarifikasi" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="2_sampul" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
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
                                                        @if($klarifikasi->count() > 0)
                                                        @foreach($klarifikasi as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_kkn[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $val->tanggal_kkn }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hps_pagu[]" class="form-control money" placeholder="Please insert hps/pagu" value="{{  number_format($val->hps_pagu, 2) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="harga_negosiasi[]" class="form-control money" placeholder="Please insert harga negosiasi" value="{{ number_format($val->harga_negosiasi, 2) }}">
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_kkn[]" id="catatan_kkn" class="form-control" placeholder="Penjelasan"> {{ $val->keterangan }}</textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @foreach($tender_aanwidjzing as $val)
                                                        @php
                                                        $pagu = $data->nilai_pr + $data->tax_value;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_kkn[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hps_pagu[]" class="form-control money" placeholder="Please insert hps/pagu" value="{{ $pagu }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="harga_negosiasi[]" class="form-control money" placeholder="Please insert harga negosiasi">
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_kkn[]" id="catatan_kkn" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
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
                                                </div>x
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-7" class="tab-pane step-content">
                                <div class="row">
                                    <label for="exampleInputEmail1"></label>
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                        <form action="{{ route('save.bahp') }}" id="form-bahp" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}" />
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">BERITA ACARA HASIL PELELANGAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th>PESERTA TENDER</th>
                                                        <th>TANGGAL BERITA ACARA</th>
                                                        <th>CATATAN HASIL PELELANGAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    @if($bahp->count() > 0)
                                                    @foreach($bahp as $val)
                                                    <tr>
                                                        <td>
                                                            {{ $val->vendor_name }}
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control datepicker" value="{{ $val->tanggal_berita_acara }}">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" value="{{ $val->catatan_berita_acara }}">{{ $val->catatan_berita_acara }}</textarea>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    @foreach($tender_aanwidjzing as $val)
                                                    <tr>
                                                        <td>
                                                            {{ $val->vendor_name }}
                                                            <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control datepicker" name="tanggal_berita_acara[]" placeholder="Please insert tanggal berita acara">
                                                        </td>
                                                        <td>
                                                            <!-- <input type="file" name="berita_acara[]" class="form-control"> -->
                                                            <textarea class="form-control" name="catatan_berita_acara[]" placeholder="please insert catatan"></textarea>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Hasil Pelelangan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-8" class="tab-pane step-content">
                                <div class="add-pemenang">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="{{ route('save.pemenang') }}" id="{{ $data->proses_st =='PROSES_UPCP' ? 'form-submit-contract' : 'form-pemenang'}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="pemenang_id" value="{{ $pemenang ? $pemenang->pemenang_id : '' }}" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Calon Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control" name="vendor_code">
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_aanwidjzing as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $val->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">File Berita Acara Usulan Pemenang:</label>
                                                        </div>
                                                    </div>
                                                    @if($pemenang)
                                                    <div class="col-md-6 mb-2">
                                                        <h6>
                                                            <a href="{{ asset('file/sp3/'. $pemenang->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $pemenang->file_berita_acara }}
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    @else
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="berita_acara_pemenang" value="" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note">{{ $pemenang ? $pemenang->catatan : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-9" class="tab-pane step-content">
                                <div class="add-pemenang">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="{{ route('save.pemenang') }}" id="form-penetapan-pemenang" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="pemenang_id" value="{{ $pemenang ? $pemenang->pemenang_id : '' }}" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control" name="vendor_code">
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_aanwidjzing as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $pemenang->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">File Berita Acara Penetapan Pemenang:</label>
                                                        </div>
                                                    </div>
                                                    @if($pemenang)
                                                    <div class="col-md-6 mb-2">
                                                        <h6>
                                                            <a href="{{ asset('file/sp3/'. $pemenang->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $pemenang->file_berita_acara }}
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    @else
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="berita_acara_pemenang" value="" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note">{{ $pemenang ? $pemenang->catatan : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($data->proses_st != 'PROSES_DC')
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit Draft Contract</button>
                                                    </div>
                                                </div>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-10" class="tab-pane step-content">
                                @php
                                $spr = \App\Models\TrxSpr::where('sp3_id', $data->sp3_id)->first();
                                @endphp
                                <div class="add-pemenang">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="{{ route('save.spr') }}" id="form-spr" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}" />
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="hidden" name="vendor_code" value="{{ $pemenang ? $pemenang->vendor_code : '' }}" />
                                                            <select class="form-control" disabled>
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_aanwidjzing as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $pemenang->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <label for="exampleInputEmail1">Upload SP Jamlak :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if(!$spr)
                                                        <input type="file" class="form-control" name="file_jamlak">
                                                        @else
                                                        <input type="file" class="form-control" name="file_jamlak" value="{{ $spr->file_jamlak }}">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if($spr)
                                                        <h6>
                                                            <a href="{{ asset('file/sp3/'. $spr->file_jamlak) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $spr->file_jamlak }}
                                                            </a>
                                                        </h6>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Sumamry Dokumen SPR:</label>
                                                        </div>
                                                    </div>
                                                    @if($pemenang)
                                                    <div class="col-md-6 mb-2">
                                                        <a href="{{ route('evaluasi.print.sp')}}" class="btn btn-primary btn-sm btn-rounded">
                                                            <i class="uil uil-print"></i>
                                                        </a>
                                                    </div>
                                                    @else
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="berita_acara_pemenang" value="" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Total Hari Kalender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="calendarDays" class="form-control" placeholder="Please insert days" value=""> -->
                                                            @php
                                                            $rks = \App\Models\DraftRks::select('created_at')->where('sp3_id', $data->sp3_id)->first();
                                                            $pcp = \App\Models\TrxPenetapanPemenang::select('created_at')->where('sp3_id', $data->sp3_id)->first();
                                                            $rksNew = $rks ? new DateTime($rks->created_at) : new DateTime();
                                                            $pcpNew = $pcp ? new DateTime($pcp->created_at) : new DateTime();
                                                            $interval = $rksNew->diff($pcpNew);
                                                            $days = $interval->days;
                                                            @endphp
                                                            {{ $days }} Days
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Total Hari Kerja:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="workDays" class="form-control" placeholder="Please insert days" value="{{ $spr ? $spr->total_hari_kerja : '' }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Uncontrolled Days:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="uncontrolledDays" class="form-control" placeholder="Please insert days" value="{{ $spr ? $spr->uncontrolled_days : '' }}">
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
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note" value="{{ $spr ? $spr->catatan_spr : '' }}">{{ $spr ? $spr->catatan_spr : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var status = $('#contract_status').val();
        if (status == 'PROSES_PP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
        } else if (status == 'PROSES_AL') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
        } else if (status == 'PROSES_PDP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
        } else if (status == 'PROSES_PPDP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
        } else if (status == 'PROSES_EP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
        } else if (status == 'PROSES_KKN' || status == 'PROSES_EDH') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
            $('.kkn').addClass('done')
        } else if (status == 'PROSES_BAHP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
            $('.kkn').addClass('done')
            $('.bahp').addClass('done')
        } else if (status == 'PROSES_UPCP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
            $('.kkn').addClass('done')
            $('.bahp').addClass('done')
            $('.ucp').addClass('done')
        } else if (status == 'PROSES_PCP') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
            $('.kkn').addClass('done')
            $('.bahp').addClass('done')
            $('.ucp').addClass('done')
            $('.pcp').addClass('done')
            $('.spr').addClass('done')
        } else if (status == 'PROSES_DC') {
            $('.rks').addClass('done')
            $('.calon-tender').addClass('done')
            $('.aanwidjzing').addClass('done')
            $('.doc-penawaran').addClass('done')
            $('.eval-penawaran').addClass('done')
            $('.kkn').addClass('done')
            $('.bahp').addClass('done')
            $('.ucp').addClass('done')
            $('.pcp').addClass('done')
            $('.spr').addClass('done')
        }
        // APPROVE RKS
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve ?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('procurement.approve') }}",
                        method: "GET",
                        dataType: 'JSON',
                        data: {
                            type: 'approve',
                            sp3_id: '{{ $data->sp3_id }}',
                            proses_st: $(this).attr('data-bind')
                        },
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: 'Your RKS is approved',
                                text: "File change status to Calon Peserta tender!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        }
                    })
                }
            })
        })

        $("body").on('click', '.reject', function(e) {
            var status = $(this).attr('data-status')
            if (status == 'gagal_lelang') {
                var title = 'Are you sure Gagal Lelang PBJ ?'
                var text = 'Your dokumen will change status gagal lelang!'
                var title_success = 'Dokumen Are Gagal Lelang'
                var text_success = 'File change status to Gagal Lelang!'
                var proses = status
            } else {
                var title = 'Are you sure reject dokumen penawaran?'
                var text = 'Your dokumen penawaran will back to pengumuman pengadaan !'
                var title_success = 'Success rejected'
                var text_success = 'File change status to Pengumuman Pengadaan!'
                var proses = false
            }
            Swal.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('reject.pengadaan') }}",
                        method: "get",
                        dataType: 'JSON',
                        data: {
                            sp3_id: '{{ $data->sp3_id }}',
                            status: proses
                        },
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: title_success,
                                text: text_success,
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        }
                    })
                }
            })
        });

        $('body').on('click', '.sw-btn-next', function(e) {
            if (status == 'PROSES_DRKS') {
                $('.calon-tender').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Draft RKS ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-draftrks").submit();
                    }
                })
            } else if (status == 'PROSES_PP') {
                $('.aanwidjzing').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Calon Peserta Tender ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#tender").submit();
                    }
                })
            } else if (status == 'PROSES_AL') {
                $('.doc-penawaran').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Aandwidjzing ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-aanwidjzing").submit();
                    }
                })
            } else if (status == 'PROSES_PDP') {
                $('.eval-penawaran').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Document Penawaran ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-dokumen-penawaran").submit();
                    }
                })
            } else if (status == 'PROSES_EP') {
                var metode = $('.metode_sampul').val()
                if (metode == '1_sampul') {
                    $('.kkn').removeClass('active')
                    Swal.fire({
                        title: 'Are you sure save Evaluasi Penawaran ?',
                        // text: 'Your procurement are send to contract!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            e.preventDefault()
                            $("#form-evaluasi-penawaran").submit();
                        }
                    })
                } else if (metode == '2_sampul') {
                    $('.kkn').removeClass('active')
                    Swal.fire({
                        title: 'Are you sure save Evaluasi Dokumen Penawaran ?',
                        // text: 'Your procurement are send to contract!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            e.preventDefault()
                            $("#form-evaluasi-harga").submit();
                        }
                    })

                }
            } else if (status == 'PROSES_KKN' || status == 'PROSES_EDH') {
                $('.bahp').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Klarifikasi, Konformasi dan Negosiasi ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-klarifikasi").submit();
                    }
                })
            } else if (status == 'PROSES_BAHP') {
                $('.bahp').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Berita Acara Hasil Pelelangan ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-bahp").submit();
                    }
                })
            } else if (status == 'PROSES_UPCP') {
                $('.pcp').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Usulan Calon Pemenang ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-submit-contract").submit();
                    }
                })
            }
        })

        $('body').on('click', '.add-button-vendor', function() {
            var body = '<div style="border-top: 1px solid red;margin-bottom: 12px;"></div><div class="row">'
            body += '<div class="col-md-12">'
            body += '<div class="form-group">'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Vendor Name:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            // body += '<input type="text" class="form-control vendor_name" name="vendor_name[]" placeholder="Please insert vendor name" id="test">'
            // body += '<input type="text" class="form-control code-2" name="vendor_code[]" value="">'
            // body += '<div class="loading"></div>'
            body += '<select data-plugin="customselect" class="form-control" name="vendor_code[]">'
            body += '<option value="">Select Vendor</option>'
            <?php
            $vendor = DB::table('public.vendor')->limit(5)
                ->get();
            foreach ($vendor as $val) {
            ?>
                body += '<option value="<?php echo $val->vendor_code ?>"><?php echo $val->vendor_name ?></option>'

            <?php } ?>
            body += '</select>'
            body += '</div>'
            body += '</div>'

            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Phone Number:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">PIC Name:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Email Corporate:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<input type="text" name="email[]" class="form-control" placeholder="Please insert email">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Vendor Address:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $(".add-vendor").append(body)
        })
    })
</script>
@endpush