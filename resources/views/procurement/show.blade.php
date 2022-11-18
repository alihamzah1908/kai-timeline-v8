@extends('layouts.master')
@section('content')
<style>
    label {
        font-size: 10px;
    }

    legend {
        font-size: 15px;
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
                            <dt class="font-weight-normal">: <span class="vendor-name"></span>@foreach($vendor as $val) {{ $val->vendor_name }} @endforeach</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No SP3</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="judul-pengadaan"></span>{{ $data->no_sp3 }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal SPR</dt>
                        </div>
                        <div class="col-md-3 ">
                            <dt class="font-weight-normal">: <span class="vendor-name">{{ $negosiasi ? date('d M Y', strtotime($negosiasi->created_at)) : '' }}</span></dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="nilai-pr"></span>Rp. {{ number_format($data->nilai_pr, 0); }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai SPR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="judul-pengadaan"></span>Rp. {{ $negosiasi ? number_format($negosiasi->harga_negosiasi, 0) : '' }}</dt>
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
                            <dt class="font-weight-normal">: <span class="no-pr"></span> @foreach($trx_npp as $pr){{ $pr->no_pr }}, @endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_pr)) }}, @endforeach</dt>
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
                            <dt class="font-weight-normal">: <span class="no-rab"></span>@foreach($trx_npp as $pr){{ $pr->no_rab }}, @endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal RAB</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-rab"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_rab)) }}, @endforeach</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">No Justifikasi Barang</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-mi"></span>@foreach($trx_npp as $pr){{ $pr->no_justifikasi }}, @endforeach</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal Justifikasi Barang</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>@foreach($trx_npp as $pr){{ date('d/m/Y', strtotime($pr->tanggal_justifikasi)) }}, @endforeach</dt>
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
    @if(!auth()->user()->hasRole('manajer_user'))
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">PBJ Process</h4>
                    <p class="sub-header">Procces of PBJ</p>
                    <div id="smartwizard-arrows" class="sw-main sw-theme-arrows">
                        <input type="hidden" value="{{ $data->proses_st }}" id="contract_status">
                        <input type="hidden" value="{{ $data->type_metode }}" id="type_metode">
                        <input type="hidden" value="{{ $data->sp3_id }}" id="id">
                        <ul class="nav nav-tabs step-anchor">
                            <li class="nav-item rks"><a href="#sw-arrows-step-1" class="nav-link">RKS<small class="d-block">Step description</small></a></li>
                            @if($data->type_metode == '1' || $data->type_metode == '2')
                            <li class="nav-item undangan"><a href="#sw-arrows-step-undangan" class="nav-link">Undangan RKS<small class="d-block">Step description</small></a></li>
                            @endif
                            <li class="nav-item calon-tender"><a href="#sw-arrows-step-2" class="nav-link step-process">Calon Peserta Tender<small class="d-block">Step description</small></a></li>
                            <li class="nav-item aanwidjzing"><a href="#sw-arrows-step-3" class="nav-link">Aanwidjzing<small class="d-block">Step description</small></a></li>
                            <li class="nav-item doc-penawaran"><a href="#sw-arrows-step-4" class="nav-link">Dokumen Penawaran<small class="d-block">Step description</small></a></li>
                            <li class="nav-item eval-penawaran"><a href="#sw-arrows-step-5" class="nav-link">Evaluasi Penawaran<small class="d-block">Step description</small></a></li>
                            <li class="nav-item undangan-kkn"><a href="#sw-arrows-step-6" class="nav-link">Undangan Klarifikasi, Konfirmasi dan Negoisasi<small class="d-block">Step description</small></a></li>
                            <li class="nav-item kkn"><a href="#sw-arrows-step-7" class="nav-link">Klarifikasi, Konfirmasi dan Negoisasi<small class="d-block">Step description</small></a></li>
                            <li class="nav-item bahp"><a href="#sw-arrows-step-8" class="nav-link">Berita Acara Hasil Pelelangan<small class="d-block">Step description</small></a></li>
                            <li class="nav-item ucp"><a href="#sw-arrows-step-9" class="nav-link">Usulan dan Penetapan Calon Pemenang<small class="d-block">Step description</small></a></li>
                            <li class="nav-item pcp"><a href="#sw-arrows-step-10" class="nav-link">Pengumuman Pemenang Tender<small class="d-block">Step description</small></a></li>
                            <li class="nav-item spr"><a href="#sw-arrows-step-11" class="nav-link">SPR dan Pengantar Jamlak<small class="d-block">Step description</small></a></li>
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
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Rencana Kerja dan Syarat Nomor : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if($rks)
                                                                <label>{{ $rks ? $rks->nomor_rks : '' }}</label>
                                                                @else
                                                                <input type="text" name="nomor_rks" class="form-control" placeholder="please insert nomor rks" value="{{ $rks ? $rks->nomor_rks : '' }}">
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Rencana Kerja dan Syarat Nomor : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if($rks)
                                                                <label>{{ $rks ? $rks->tanggal_rks : '' }}</label>
                                                                @else
                                                                <input type="text" name="tanggal_rks" class="form-control datepicker" placeholder="please insert tanggal rks" value="{{ $rks ? $rks->tanggal_rks : '' }}">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Template Proposal/Dokumen Penawaran : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if(!$rks)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_penawaran" class="form-control upload-file" id="file-penawaran">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>
                                                                    <a href="{{ asset('file/rks/'. $rks->file_penawaran) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $rks->file_penawaran }}
                                                                    </a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Template Dokumen RKS : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if(!$rks)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_dokumen" class="form-control upload-file" id="file-dokumen">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>
                                                                    <a href="{{ asset('file/rks/'. $rks->file_dokumen) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $rks->file_dokumen }}
                                                                    </a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Metode Submit Dokumen : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if($rks)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>{{ $rks->metode == '1_sampul' ? '1 Sampul' : '2 Sampul' }}</label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select class="form-control" name="metode_dokumen" id="metode-dokumen">
                                                                    <option value="">Select Sampul</option>
                                                                    <option value="1_sampul" @if($rks) {{ $rks->metode == '1_sampul' ? ' selected' : '' }} @endif>1 Sampul</option>
                                                                    <option value="2_sampul" @if($rks) {{ $rks->metode == '2_sampul' ? ' selected' : '' }} @endif>2 Sampul</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan :</label>
                                                            </div>
                                                        </div>
                                                        @if($rks)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $rks ? $rks->catatan : '' }}
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <textarea name="catatan_rks" id="catatan-rks" class="form-control" placeholder="Please insert RKS note">{{ $rks ? $rks->catatan : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        @endif
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
                            @if($data->type_metode == '1' || $data->type_metode == '2')
                            <div id="sw-arrows-step-undangan" class="tab-pane step-content">
                                <h6>Undangan</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                <form action="{{ route('procurement.store') }}" id="form-undangan" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="undangan" value="undangan" />
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" id="sp3-id" value="{{ $data->sp3_id }}" />
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Pengumuman Pengadaan Nomor : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if($undangan)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>{{ $undangan ? $undangan->nomor_pengumuman : '' }}</label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_pengumuman" class="form-control" placeholder="please insert nomor" value="{{ $undangan ? $undangan->nomor_pengumuman : '' }}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Pengumuman Pengadaan: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if($undangan)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>{{ $undangan ? $undangan->tanggal_rks : '' }}</label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_rks" class="form-control datepicker" placeholder="please insert tanggal pengadaan" value="{{ $undangan ? $undangan->tanggal_rks : '' }}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Template Proposal/Dokumen Penawaran: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if(!$undangan)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_penawaran" class="form-control upload-file" id="file-penawaran">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>
                                                                    <a href="{{ asset('file/rks/'. $undangan->file_penawaran) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $undangan->file_penawaran }}
                                                                    </a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Template Dokumen Undangan: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        @if(!$undangan)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_dokumen" class="form-control upload-file" id="file-dokumen">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>
                                                                    <a href="{{ asset('file/rks/'. $undangan->file_dokumen) }}" target="_blank">
                                                                        <i class="uil uil-file-alt mt-4"></i> {{ $undangan->file_dokumen }}
                                                                    </a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan :</label>
                                                            </div>
                                                        </div>
                                                        @if(!$undangan)
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <textarea name="catatan_rks" id="catatan-rks" class="form-control" placeholder="Please insert RKS note">{{ $undangan ? $undangan->catatan : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $undangan ? $undangan->catatan : '' }}
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
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
                                            <fieldset>
                                                <legend>Vendor Information</legend>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"></label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $val->vendor_name }}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Phone Number:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $val->phone_number }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">PIC Name:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $val->pic_name }}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Email Corporate:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $val->email_corporate }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Address:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                {{ $val->address }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            @endforeach
                                            @else
                                            @if($vendor->count() > 0)
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                </div>
                                                @foreach($vendor as $val)
                                                <fieldset>
                                                    <legend>Vendor Information</legend>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vendor Name:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control vendor_name-1" value="{{ $val->vendor_name }}" disabled>
                                                                <input type="hidden" class="form-control code-1" name="vendor_code[]" value="{{ $val->vendor_code }}">
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
                                                                <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres" value="{{ $val->street }}">{{ $val->street }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                </div>
                                                <fieldset>
                                                    <legend>Vendor Information</legend>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vendor Name:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select name="vendor_code[]" class="form-control">
                                                                    <option value="">Pilih Vendor</option>
                                                                    <?php
                                                                    foreach ($vendor_list as $val) {
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
                                                </fieldset>
                                            </div>
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                @if($data->proses_st == 'PROSES_PP')
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add vendor</button>
                                    </div>
                                </div>
                                @endif
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
                                                            <td align="center">
                                                                {{ $val->verif_note }}
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
                                    @php
                                    $berita = $berita_acara->where('step_process','aanwidjzing')
                                    ->where('sp3_id', $data->sp3_id)
                                    ->first();
                                    @endphp
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Rapat Penjelasan/Aanwidjzing & Addendum:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                @if($berita)
                                                {{ $berita ? $berita->tanggal_berita_acara : ''}}
                                                @else
                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $berita ? $berita->tanggal_berita_acara : ''}}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Rapat Penjelasan/Aanwidjzing & Addendum Nomor:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                @if($berita)
                                                {{ $berita ? $berita->nomor_spr : '' }}
                                                @else
                                                <input type="text" name="nomor_aanwidjzing" class="form-control" placeholder="please insert nomor aanwidjzing" value="{{ $berita ? $berita->nomor_spr : ''}}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Aanwidjzing:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                @if(!$berita)
                                                <input type="file" name="file_berita_acara" class="form-control upload-file" id="file-draft">
                                                @else
                                                @if($berita)
                                                @if($berita->file_berita_acara != '')
                                                <a href="{{ asset('file/SP3/'. $berita->file_berita_acara) }}" target="_blank">
                                                    <i class="uil uil-file-alt mt-4"></i> {{ $berita->file_berita_acara }}
                                                </a>
                                                @endif
                                                @endif
                                                @endif
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
                                    @if($dokumen->count() == 0)
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
                                                            <th width="30%" rowspan="2">
                                                                TANGGAL SUBMIT
                                                                <!-- TANGGAL JAMLAK -->
                                                            </th>
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
                                                                <input type="file" name="file_dokumen[]" class="form-control upload-file" id="file-dokumen">
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
                                                            <label for="exampleInputEmail1">Tanggal Berita Acara Pembukaan Dokumen Penawaran:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Pembukaan Dokumen Penawaran Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="nomor_pembukaan_penawaran" class="form-control" placeholder="please insert nomor" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Pemasukan Dokumen:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_pembukaan_penawaran" class="form-control upload-file">
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
                                                            <textarea name="catatan_pembukaan_penawaran" id="catatan_pembukaan_penawaran" class="form-control" placeholder="Penjelasan"></textarea>
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
                                                    @foreach($dokumen as $val)
                                                    <tr>
                                                        <td>
                                                            {{ $val->vendor_name }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/'. $val->file_dokumen) }}">
                                                                <p><i class="uil uil-file-alt"></i> {{ $val->file_dokumen }}</p>
                                                            </a>
                                                        </td>
                                                        <td align="center">
                                                            {{ $val->tanggal_submit_dokumen }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @php
                                            $berita_sampul_1 = $berita_acara->where('step_process','pemasukan_dokumen_penawaran')
                                            ->where('sp3_id', $data->sp3_id)
                                            ->first();
                                            @endphp
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dokumen Penawaran Nomor:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if(!$berita_sampul_1)
                                                        <input type="text" name="nomor_pembukaan_penawaran" class="form-control" placeholder="please insert nomor" value="{{ $berita_sampul_1 ? $berita_sampul_1->nomor_spr : '' }}">
                                                        @else
                                                        {{ $berita_sampul_1 ? $berita_sampul_1->nomor_spr : '' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pemasukan Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if(!$berita_sampul_1)
                                                        <input type="file" name="file_pembukaan_penawaran" class="form-control">
                                                        @else
                                                        @if($berita_sampul_1)
                                                        @if($berita_sampul_1->file_berita_acara != '')
                                                        <a href="{{ asset('file/SP3/'. $berita_sampul_1->file_berita_acara) }}" target="_blank">
                                                            <i class="uil uil-file-alt mt-4"></i> {{ $berita_sampul_1->file_berita_acara }}
                                                        </a>
                                                        @endif
                                                        @endif
                                                        @endif
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
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        @if(!$berita_sampul_1)
                                                        <textarea name="catatan_pembukaan_penawaran" id="catatan_pembukaan_penawaran" class="form-control" placeholder="Penjelasan">{{ $berita_sampul_1 ? $berita_sampul_1->notes : '' }}</textarea>
                                                        @else
                                                        {{ $berita_sampul_1 ? $berita_sampul_1->notes : '' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}"> <i class="uil uil-multiply"></i> Reject</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-status="gagal_lelang"> <i class="uil uil-multiply"></i>Gagal Lelang</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @elseif($rks->metode == '2_sampul')
                                    @if($data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_UPD' || $data->proses_st == 'PROSES_PD' || $data->proses_st == 'PROSES_PDH'
                                    || $data->proses_st == 'PROSES_DH' || $data->proses_st == 'PROSES_EP' || $data->proses_st == 'PROSES_EDP')
                                    <fieldset>
                                        <legend>PEMASUKAN DOKUMEN PENAWARAN</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-dokumen-penawaran" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="pemasukan_dokumen_penawaran" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="4">PEMASUKAN DOKUMEN PENAWARAN</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">DOKUMEN (Admin, Teknis) <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">DOKUMEN (Harga) <i class="text-danger">*</i></th>
                                                                <th width="30%" rowspan="2">
                                                                    TANGGAL SUBMIT
                                                                    <!-- TANGGAL JAMLAK -->
                                                                    <i class="text-danger">*</i>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        @if($dokumen_penawaran->where('tanggal_submit_dokumen', '!=', '')->count() > 0)
                                                        @foreach($dokumen_penawaran->where('tanggal_submit_dokumen', '!=', '') as $val)
                                                        <tbody style="vertical-align: top">
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ asset('file/sp3/'. $val->file_dokumen) }}">
                                                                        <p><i class="uil uil-file-alt"></i> {{ $val->file_dokumen }}</p>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ asset('file/sp3/'. $val->file_harga) }}">
                                                                        <p><i class="uil uil-file-alt"></i> {{ $val->file_harga }}</p>
                                                                    </a>
                                                                </td>
                                                                <td align="center">
                                                                    {{ $val->tanggal_submit_dokumen }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        @endforeach
                                                        @else
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
                                                                    <input type="file" name="file_harga[]" class="form-control" id="file-harga">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="dok_admin_date" name="dok_admin_date[]" class="form-control datepicker" placeholder="Tanggal Jamlak">
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        @endif
                                                    </table>
                                                    @php
                                                    $penawaran = $berita_acara->where('step_process','pemasukan_dokumen_penawaran')
                                                    ->where('sp3_id', $data->sp3_id)
                                                    ->first();
                                                    @endphp
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Pembukaan Dokumen Penawaran: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$penawaran)
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $penawaran ? $penawaran->tanggal_berita_acara : '' }}">
                                                                @else
                                                                {{ $penawaran ? $penawaran->tanggal_berita_acara : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dokumen Penawaran Nomor: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$penawaran)
                                                                <input type="text" name="nomor_pembukaan_penawaran" class="form-control" placeholder="please insert nomor" value="{{ $penawaran ? $penawaran->nomor_spr : '' }}">
                                                                @else
                                                                {{ $penawaran ? $penawaran->nomor_spr : ''}}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pemasukan Dokumen: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$penawaran)
                                                                <input type="file" name="file_pembukaan_penawaran" class="form-control">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                                @else
                                                                @if($penawaran)
                                                                @if($penawaran->file_berita_acara != '')
                                                                <a href="{{ asset('file/SP3/'. $penawaran->file_berita_acara) }}" target="_blank">
                                                                    <i class="uil uil-file-alt mt-4"></i> {{ $penawaran->file_berita_acara }}
                                                                </a>
                                                                @endif
                                                                @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                @if(!$penawaran)
                                                                <textarea name="catatan_pembukaan_penawaran" id="catatan_pembukaan_penawaran" class="form-control" placeholder="Penjelasan">{{ $penawaran ? $penawaran->notes : '' }}</textarea>
                                                                @else
                                                                {{ $penawaran ? $penawaran->notes : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    @if($data->step_process == 1)
                                    <fieldset>
                                        <legend>Undangan Pembukaan Dokumen Admin & Teknis</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-undangan-dokumen-penawaran" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="undangan_pembukaan_dokumen" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="5">UNDANGAN PEMBUKAAN DOKUMEN ADMIN & TEKNIS</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">SURAT UNDANGAN <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">TANGGAL UNDANGAN PEMBUKAAN DOK (Admin & Teknis) <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @foreach($tender_aanwidjzing as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                                </td>
                                                                <td>
                                                                    <input type="file" name="surat_undangan_pembukaan[]" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="dok_admin_date" name="tanggal_undangan_pembukaan[]" class="form-control datepicker" placeholder="Tanggal Undangan Pembukaan" value="">
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @php
                                                    $undangan = $berita_acara->where('step_process','undangan_pembukaan_dokumen_penawaran')
                                                    ->where('sp3_id', $data->sp3_id)
                                                    ->first();
                                                    @endphp
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Acara Pembukaan Dokumen Penawaran: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $undangan ? $undangan->tanggal_berita_acara : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pembukaan Dokumen Penawaran Nomor: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_undangan" class="form-control" placeholder="please insert nomor" value="{{ $undangan ? $undangan->nomor_spr : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Undangan Pembukaan Dok. Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_undangan" class="form-control">
                                                                @if($undangan)
                                                                @if($undangan->file_berita_acara != '')
                                                                <a href="{{ asset('file/SP3/'. $undangan->file_berita_acara) }}" target="_blank">
                                                                    <i class="uil uil-file-alt mt-4"></i> {{ $undangan->file_berita_acara }}
                                                                </a>
                                                                @endif
                                                                @endif
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
                                                                <label for="exampleInputEmail1">Catatan Undangan Pembukaan Dok. Admin & Teknis: </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <textarea name="catatan_undangan_pembukaan" class="form-control" placeholder="Penjelasan">{{ $undangan ? $undangan->notes : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    @if($dokumen_penawaran->where('tanggal_undangan_pembukaan', '!=', '')->count() > 0)
                                    <fieldset>
                                        <legend>Undangan Pembukaan Dokumen Admin & Teknis</legend>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">UNDANGAN PEMBUKAAN DOKUMEN ADMIN & TEKNIS</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">SURAT UNDANGAN</th>
                                                            <th width="20%" rowspan="2">TANGGAL UNDANGAN PEMBUKAAN DOK (Admin & Teknis)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($dokumen_penawaran->where('tanggal_undangan_pembukaan', '!=', '') as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name}}
                                                            </td>
                                                            <td>
                                                                <a href="{{ asset('file/sp3/'. $val->surat_undangan_pembukaan) }}" target="_blank">
                                                                    <p><i class="uil uil-file-alt"></i> {{ $val->surat_undangan_pembukaan }}</p>
                                                                </a>
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tanggal_undangan_pembukaan }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @php
                                                $undangan = $berita_acara->where('step_process','undangan_pembukaan_dokumen_penawaran')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dokumen Penawaran Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$undangan)
                                                            <input type="text" name="nomor_undangan" class="form-control" placeholder="please insert nomor" value="{{ $undangan ? $undangan->nomor_spr : '' }}">
                                                            @else
                                                            {{ $undangan ? $undangan->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Undangan Pembukaan Dok. Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$undangan)
                                                            <input type="file" name="file_undangan" class="form-control">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            @else
                                                            @if($undangan)
                                                            @if($undangan->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $undangan->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $undangan->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Undangan Pembukaan Dok. Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if($undangan)
                                                            {{ $undangan ? $undangan->notes : '' }}
                                                            @else
                                                            <textarea name="catatan_undangan_pembukaan" class="form-control" placeholder="Penjelasan">{{ $undangan ? $undangan->notes : '' }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    <!-- Kondisi pengisian pembukaan dokumen admin -->
                                    @if($data->step_process == 2)
                                    <fieldset>
                                        <legend>Pembukaan Dokumen Admin & Teknis</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-pembukaan-dokumen" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="pembukaan_dokumen" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="5">PEMBUKAAN DOKUMEN ADMIN & TEKNIS</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis) <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Admin & Teknis) <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @foreach($tender_aanwidjzing as $doc)
                                                            <tr>
                                                                <td>
                                                                    {{ $doc->vendor_name}}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                                </td>
                                                                <td>
                                                                    <input type="file" class="form-control" name="doc_pembukaan[]">
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="tanggal_pembukaan_doc[]" name="tanggal_pembukaan_doc[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="">
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Berita Acara Pembukaan Dok. Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Admin & Teknis Nomor : <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_pembukaan" class="form-control" placeholder="please insert nomor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="file" name="file_pembukaan" class="form-control" id="file-draft">
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
                                                                <textarea name="catatan_pembukaan" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif

                                    <!-- Kondisi jika undangan pembukaan dokumen admin sudah terisi -->
                                    @if($dokumen_penawaran->where('tanggal_pembukaan_doc', '!=', '')->count() > 0)
                                    <fieldset>
                                        <legend>PEMBUKAAN DOKUMEN ADMIN & TEKNIS</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-pembukaan-dokumen" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="pembukaan_dokumen" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="5">PEMBUKAAN DOKUMEN ADMIN & TEKNIS</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                                <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Admin & Teknis)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @foreach($dokumen_penawaran->where('tanggal_pembukaan_doc', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ asset('file/sp3/'. $val->doc_pembukaan) }}">
                                                                        <p><i class="uil uil-file-alt"></i> {{ $val->doc_pembukaan }}</p>
                                                                    </a>
                                                                </td>
                                                                <td align="center">
                                                                    {{ $val->tanggal_pembukaan_doc }}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @php
                                                    $pembukaan = $berita_acara->where('step_process','pembukaan_dokumen')
                                                    ->where('sp3_id', $data->sp3_id)
                                                    ->first();
                                                    @endphp
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Pembukaan Dok. Admin & Teknis:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$pembukaan)
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert nomor" value="{{ $pembukaan ? $pembukaan->tanggal_berita_acara : '' }}">
                                                                @else
                                                                {{ $pembukaan ? $pembukaan->tanggal_berita_acara : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dokumen Penawaran Nomor:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$pembukaan)
                                                                <input type="text" name="nomor_pembukaan" class="form-control" placeholder="please insert nomor" value="{{ $pembukaan ? $pembukaan->nomor_spr : '' }}">
                                                                @else
                                                                {{ $pembukaan ? $pembukaan->nomor_spr : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dok. Admin & Teknis:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                @if(!$pembukaan)
                                                                <input type="file" name="file_pembukaan" class="form-control" id="file-draft">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                                @else
                                                                @if($pembukaan)
                                                                @if($pembukaan->file_berita_acara != '')
                                                                <a href="{{ asset('file/SP3/'. $pembukaan->file_berita_acara) }}" target="_blank">
                                                                    <i class="uil uil-file-alt mt-4"></i> {{ $pembukaan->file_berita_acara }}
                                                                </a>
                                                                @endif
                                                                @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan Pembukaan Dok. Admin & Teknis:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                @if(!$pembukaan)
                                                                <textarea name="catatan_undangan_pembukaan" id="verif_1_note" class="form-control" placeholder="Penjelasan">{{ $pembukaan ? $pembukaan->notes : '' }}</textarea>
                                                                @else
                                                                {{ $pembukaan ? $pembukaan->notes : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif

                                    <!-- Kondisi pengisian undangan pembukaan dokumen harga -->
                                    @if($data->step_process == 5)
                                    <fieldset>
                                        <legend>UNDANGAN PEMBUKAAN DOKUMEN HARGA</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-pembukaan-harga" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" class="metode_sampul" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="undangan_pembukaan_harga" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="5">UNDANGAN PEMBUKAAN DOKUMEN HARGA</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">TANGGAL UNDANGAN PEMBUKAAN DOK (Harga) <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">SURAT UNDANGAN <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        @if($dokumen_penawaran->where('tgl_pemb_doc_harga', '!=', '')->count() > 0)
                                                        <tbody style="vertical-align: top">
                                                            @foreach($dokumen_penawaran->where('tgl_pemb_doc_harga', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="dok_admin_date" name="tgl_pemb_doc_harga[]" class="form-control datepicker" placeholder="Tanggal Undangan Pembukaan" value="{{ $val->tgl_pemb_doc_harga }}">
                                                                </td>
                                                                <td>
                                                                    <a href="{{ asset('file/sp3/'. $val->surat_undangan_doc_harga) }}">
                                                                        <p><i class="uil uil-file-alt"></i> {{ $val->surat_undangan_doc_harga }}</p>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        @else
                                                        <tbody style="vertical-align: top">
                                                            @foreach($tender_aanwidjzing as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name }}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="tgl_pemb_doc_harga[]" class="form-control datepicker" placeholder="Tanggal Undangan Pembukaan" value="">
                                                                </td>
                                                                <td>
                                                                    <input type="file" name="surat_undangan_doc_harga[]" class="form-control" />
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        @endif
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Berita Acara Undangan Pembukaan Dok. Harga: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Undangan Pembukaan Dok. Harga Nomor: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_pembukaan_harga" class="form-control" placeholder="please insert nomor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Undangan Pembukaan Dok. Harga: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="file" name="file_pembukaan_harga" class="form-control" id="file-draft">
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
                                                                <label for="exampleInputEmail1">Catatan Undangan Pembukaan Dok. Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <textarea name="note_pembukaan_harga" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif

                                    <!-- Kondisi jika undangan pembukaan dokumen harga sudah terisi -->
                                    @if($dokumen_penawaran->where('tgl_pemb_doc_harga', '!=', '')->count() > 0)
                                    <fieldset>
                                        <legend>UNDANGAN PEMBUKAAN DOKUMEN HARGA</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">UNDANGAN PEMBUKAAN DOKUMEN HARGA</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL UNDANGAN PEMBUKAAN DOK (Harga)</th>
                                                            <th width="20%" rowspan="2">SURAT UNDANGAN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($dokumen_penawaran->where('tgl_pemb_doc_harga', '!=', '') as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name}}
                                                            </td>
                                                            <td>
                                                                {{ $val->tgl_pemb_doc_harga }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ asset('file/sp3/'. $val->surat_undangan_doc_harga) }}">
                                                                    <p><i class="uil uil-file-alt"></i> {{ $val->surat_undangan_doc_harga }}</p>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @php
                                                $pembukaan_harga = $berita_acara->where('step_process','undangan_pembukaan_harga')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Undangan Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if($pembukaan_harga)
                                                            {{ $pembukaan_harga ? $pembukaan_harga->tanggal_berita_acara : '' }}
                                                            @else
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert nomor" value="{{ $pembukaan_harga ? $pembukaan_harga->tanggal_berita_acara : '' }}">
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Undangan Pembukaan Dok. Harga Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if($pembukaan_harga)
                                                            {{ $pembukaan_harga ? $pembukaan_harga->nomor_spr : '' }}
                                                            @else
                                                            <input type="text" name="nomor_pembukaan_harga" class="form-control" placeholder="please insert nomor" value="{{ $pembukaan_harga ? $pembukaan_harga->nomor_spr : '' }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Undangan Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if(!$pembukaan_harga)
                                                            <input type="file" name="file_pembukaan_harga" class="form-control" id="file-draft">
                                                            @else
                                                            @if($pembukaan_harga)
                                                            @if($pembukaan_harga->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $pembukaan_harga->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $pembukaan_harga->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Undangan Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$pembukaan_harga)
                                                            <textarea name="note_pembukaan_harga" id="verif_1_note" class="form-control" placeholder="Penjelasan">{{ $pembukaan_harga ? $pembukaan_harga->notes : '' }}</textarea>
                                                            @else
                                                            {{ $pembukaan_harga ? $pembukaan_harga->notes : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    @if($data->step_process == 6)
                                    <fieldset>
                                        <legend>Pembukaan Dokumen Harga</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('save.document-penawaran') }}" method="post" id="form-doc-harga" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                    <input type="hidden" name="metode" class="metode_sampul" value="{{ $rks->metode }}" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="pembukaan_dokumen_harga" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="5">PEMBUKAAN DOKUMEN HARGA</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Harga) <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">DOKUMEN (Harga) <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        @if($dokumen_penawaran->where('tgl_doc_pemb_harga', '!=', '')->count() > 0)
                                                        <tbody style="vertical-align: top">
                                                            @foreach($dokumen_penawaran->where('tgl_doc_pemb_harga', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="dok_admin_date" name="tgl_pemb_doc_harga[]" class="form-control datepicker" placeholder="Tanggal Undangan Pembukaan" value="{{ $val->tgl_doc_pemb_harga }}">
                                                                </td>
                                                                <td>
                                                                    <a href="{{ asset('file/sp3/'. $val->doc_pemb_harga) }}">
                                                                        <p><i class="uil uil-file-alt"></i> {{ $val->doc_pemb_harga }}</p>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        @else
                                                        <tbody style="vertical-align: top">
                                                            @foreach($tender_aanwidjzing as $doc)
                                                            <tr>
                                                                <td>
                                                                    {{ $doc->vendor_name }}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="tgl_doc_pemb_harga[]" class="form-control datepicker" placeholder="Tanggal Pembukaan">
                                                                </td>
                                                                <td>
                                                                    <input type="file" id="doc_pemb_harga" name="doc_pemb_harga[]" class="form-control">
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        @endif
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Berita Acara Pembukaan Dok. Harga: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Harga Nomor: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_harga" class="form-control" placeholder="please insert nomor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Harga: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="file" name="file_harga" class="form-control" id="file-draft">
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
                                                                <label for="exampleInputEmail1">Catatan Pembukaan Dok. Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <textarea name="catatan_harga" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    <!-- Kondisi pengisian pembukaan dokumen harga -->
                                    @if($dokumen_penawaran->where('tgl_doc_pemb_harga', '!=', '')->count() > 0)
                                    <fieldset>
                                        <legend>PEMBUKAAN DOKUMEN HARGA</legend>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">PEMBUKAAN DOKUMEN HARGA</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Harga)</th>
                                                            <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($dokumen_penawaran->where('tgl_doc_pemb_harga', '!=', '') as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name}}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tgl_doc_pemb_harga }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ asset('file/sp3/'. $val->doc_pemb_harga) }}">
                                                                    <p><i class="uil uil-file-alt"></i> {{ $val->doc_pemb_harga }}</p>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @php
                                                $doc_harga = $berita_acara->where('step_process','pembukaan_harga')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$doc_harga)
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $doc_harga ? $doc_harga->tanggal_berita_acara : ''}}">
                                                            @else
                                                            {{ $doc_harga ? $doc_harga->tanggal_berita_acara : ''}}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dok. Harga Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$doc_harga)
                                                            <input type="text" name="nomor_harga" class="form-control" placeholder="please insert nomor" value="{{ $doc_harga ? $doc_harga->nomor_spr : ''}}">
                                                            @else
                                                            {{ $doc_harga ? $doc_harga->nomor_spr : ''}}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if(!$doc_harga)
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                            @else
                                                            @if($doc_harga)
                                                            @if($doc_harga->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $doc_harga->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $doc_harga->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Pembukaan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$doc_harga)
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan">{{ $doc_harga ? $doc_harga->notes : '' }}</textarea>
                                                            @else
                                                            {{ $doc_harga ? $doc_harga->notes : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @endif
                                    @if($data->step_process == 3)
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i> Evaluasi Penawaran</button>
                                    </div>
                                    @endif
                                    @elseif($data->proses_st == 'PROSES_PPDP')
                                    <!-- dikosongkan dahulu -->
                                    @else
                                    <!-- dikosongkan dahulu -->
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
                                                <input type="hidden" name="metode" value="1_sampul" class="metode_sampul" />
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
                                                            <td align="center">
                                                                {{ $val->tanggal_evaluasi_dokumen }}
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
                                                            <td align="center">
                                                                {{ $val->keterangan_evaluasi_dokumen }}
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
                                                                <input type="text" name="tanggal_evaluasi_dokumen[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Evaluasi Penawaran">
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
                                                                <textarea name="catatan_evaluasi[{{ $val->aanwidjzing_id }}]" class="form-control" placeholder="Catatan evaluasi"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                                @php
                                                $eval_penawaran = $berita_acara->where('step_process','evaluasi_dokumen_penawaran')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tanggal Berita Acara Evaluasi Dokumen Penawaran:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$eval_penawaran)
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $eval_penawaran ? $eval_penawaran->tanggal_berita_acara : '' }}">
                                                            @else
                                                            {{ $eval_penawaran ? $eval_penawaran->tanggal_berita_acara : '' }}
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Evaluasi Dokumen Penawaran Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$eval_penawaran)
                                                            <input type="text" name="nomor_evaluasi_penawaran" class="form-control" placeholder="please insert nomor" value="{{ $eval_penawaran ? $eval_penawaran->nomor_spr : '' }}">
                                                            @else
                                                            {{ $eval_penawaran ? $eval_penawaran->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Evaluasi Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if(!$eval_penawaran)
                                                            <input type="file" name="file_evaluasi_penawaran" class="form-control upload-file" id="file-draft">
                                                            @else
                                                            @if($eval_penawaran)
                                                            @if($eval_penawaran->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $eval_penawaran->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $eval_penawaran->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
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
                                            @if($data->step_process == 3)
                                            <fieldset>
                                                <legend>EVALUASI DOKUMEN PENAWARAN ADMIN & TEKNIS</legend>
                                                <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-penawaran-teknis" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                    <input type="hidden" name="metode" value="2_sampul" class="metode_sampul" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <input type="hidden" name="type" value="evaluasi_dokumen_penawaran" />
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN ADMIN & TEKNIS</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="10%" rowspan="2">TANGGAL EVALUASI (Admin & Teknis) <i class="text-danger">*</i></th>
                                                                <th width="5%" rowspan="2">LOLOS <i class="text-danger">*</i></th>
                                                                <th width="5%" rowspan="2">TIDAK LOLOS <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">CATATAN EVALUASI (Admin & Teknis)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @if($evaluasi_2_sampul->where('tanggal_evaluasi_dokumen', '!=', '')->count() > 0)
                                                            @foreach($evaluasi_2_sampul->where('tanggal_evaluasi_dokumen', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name }}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="tgl_eval_penawaran[]" class="form-control datepicker" placeholder="Tanggal Evaluasi Penawaran" value="{{ $val->tanggal_evaluasi_dokumen }}">
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" class="custom-control-input" name="evaluasi_harga[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_ya" value="1" @if($val->penilaian_dokumen == '1') ' checked=""' : '' @endif>
                                                                        <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_ya">Ya</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_tidak" value="0" @if($val->penilaian_dokumen == '0') ' checked=""' : '' @endif>
                                                                        <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_tidak">Tidak</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea name="catatan_admin[{{$val->document_evaluasi_id }}]" id="verif_1_note" class="form-control" placeholder="Catatan penawaran">{{ $val->keterangan_evaluasi_dokumen }}</textarea>
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
                                                                    <input type="text" name="tgl_eval_penawaran[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Evaluasi">
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" class="custom-control-input" name="penilaian_eval_penawaran[{{$val->aanwidjzing_id }}]" id="eval_{{$val->aanwidjzing_id }}_ya" value="1">
                                                                        <label class="custom-control-label" for="eval_{{$val->aanwidjzing_id }}_ya">Ya</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" class="custom-control-input" name="penilaian_eval_penawaran[{{$val->aanwidjzing_id }}]" id="eval_{{$val->aanwidjzing_id }}_tidak" value="0">
                                                                        <label class="custom-control-label" for="eval_{{$val->aanwidjzing_id }}_tidak">Tidak</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea name="catatan_eval_penawaran[{{$val->aanwidjzing_id }}]" id="verif_1_note" class="form-control" placeholder="Catatan Evaluasi"></textarea>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Berita Acara Evaluasi Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Evaluasi Admin & Teknis Nomor: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_evaluasi_penawaran" class="form-control" placeholder="please insert nomor" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Evaluasi Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="file" name="file_evaluasi_penawaran" class="form-control" id="file-draft">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </fieldset>
                                            @endif
                                            <!-- Existing evaluasi dokumen -->
                                            @if($evaluasi_2_sampul->where('tanggal_evaluasi_dokumen', '!=', '')->count() > 0)
                                            <fieldset>
                                                <legend>EVALUASI DOKUMEN PENAWARAN ADMIN & TEKNIS</legend>
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <input type="hidden" name="type" value="evaluasi_dokumen_penawaran" />
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN ADMIN & TEKNIS</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="10%" rowspan="2">TANGGAL EVALUASI (Admin & Teknis)</th>
                                                            <th width="5%" rowspan="2">LOLOS</th>
                                                            <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                            <th width="20%" rowspan="2">CATATAN EVALUASI (Admin & Teknis)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($evaluasi_2_sampul->where('tanggal_evaluasi_dokumen', '!=', '') as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tanggal_evaluasi_dokumen }}
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="evaluasi_harga[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_ya" value="1" @if($val->penilaian_dokumen == '1') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->document_evaluasi_id }}]" id="admin_{{$val->document_evaluasi_id }}_tidak" value="0" @if($val->penilaian_dokumen == '0') ' checked=""' : '' @endif>
                                                                    <label class="custom-control-label" for="admin_{{$val->document_evaluasi_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->keterangan_evaluasi_dokumen }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @php
                                                $evaluasi_penawaran = $berita_acara->where('step_process','evaluasi_dokumen_penawaran')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Evaluasi Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$evaluasi_penawaran)
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $evaluasi_penawaran ? $evaluasi_penawaran->tanggal_berita_acara : '' }}">
                                                            @else
                                                            {{ $evaluasi_penawaran ? $evaluasi_penawaran->tanggal_berita_acara : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Evaluasi Dokumen Penawaran Nomor:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$evaluasi_penawaran)
                                                            <input type="text" name="nomor_evaluasi_penawaran" class="form-control" placeholder="please insert nomor" value="{{ $evaluasi_penawaran ? $evaluasi_penawaran->nomor_spr : '' }}">
                                                            @else
                                                            {{ $evaluasi_penawaran ? $evaluasi_penawaran->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Evaluasi Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if(!$evaluasi_penawaran)
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                            @else
                                                            @if($evaluasi_penawaran)
                                                            @if($evaluasi_penawaran->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $evaluasi_penawaran->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $evaluasi_penawaran->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            @endif
                                            @if($data->step_process == 4)
                                            <fieldset>
                                                <legend>PENGUMUMAN ADMIN & TEKNIS</legend>
                                                <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-penawaran-admin" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                    <input type="hidden" name="metode" value="2_sampul" class="metode_sampul" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="pengumuman_admin_teknis" />
                                                    <!-- //--------------------------------// -->
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="9">PENGUMUMAN ADMIN & TEKNIS</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%" rowspan="2">Peserta Tender</th>
                                                                <th width="20%" rowspan="2">TANGGAL PENGUMUMAN ADMIN & TEKNIS <i class="text-danger">*</i></th>
                                                                <th width="30%" rowspan="2">CATATAN PENGUMUMAN ADMIN & TEKNIS <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @foreach($tender_aanwidjzing as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name}}
                                                                    <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="tanggal_admin[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                                </td>
                                                                <td>
                                                                    <textarea name="catatan_admin[]" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Pengumuman Admin & Teknis: <i class="text-danger">*</i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="file" name="file_admin_teknis" class="form-control" id="file-draft">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </fieldset>
                                            @endif
                                            <!-- Existing evaluasi dokumen admin-->
                                            @if($evaluasi_2_sampul->where('tanggal_evaluasi_admin', '!=', '')->count() > 0)
                                            <fieldset>
                                                <legend>PENGUMUMAN ADMIN & TEKNIS</legend>
                                                <!-- //--------------------------------// -->
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="9">PENGUMUMAN ADMIN & TEKNIS</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL PENGUMUMAN ADMIN & TEKNIS</th>
                                                            <th width="30%" rowspan="2">CATATAN PENGUMUMAN ADMIN & TEKNIS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($evaluasi_2_sampul->where('tanggal_evaluasi_admin', '!=', '') as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name}}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tanggal_evaluasi_admin }}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->keterangan_evaluasi_admin }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @php
                                                $admin_teknis = $berita_acara->where('step_process','pengumuman_admin_teknis')
                                                ->where('sp3_id', $data->sp3_id)
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Pengumuman Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            @if(!$admin_teknis)
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                            @else
                                                            @if($admin_teknis)
                                                            @if($admin_teknis->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $admin_teknis->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $admin_teknis->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            </form>
                                            @endif
                                            @if($data->step_process == 7)
                                            <fieldset>
                                                <legend>EVALUASI DOKUMEN PENAWARAN HARGA</legend>
                                                <!-- //--------------------------------// -->
                                                <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-harga" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                    <input type="hidden" name="metode" value="2_sampul" class="metode_sampul" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="evaluasi_dokumen_penawaran_harga" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN HARGA</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="10%" rowspan="2">TANGGAL EVALUASI (Harga) <i class="text-danger">*</i></th>
                                                                <th width="5%" rowspan="2">LOLOS <i class="text-danger">*</i></th>
                                                                <th width="5%" rowspan="2">TIDAK LOLOS <i class="text-danger">*</i></th>
                                                                <th width="20%" rowspan="2">CATATAN EVALUASI (Harga) <i class="text-danger">*</i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @if($evaluasi_2_sampul->where('tanggal_evaluasi_harga', '!=', '')->count() > 0)
                                                            @foreach($evaluasi_2_sampul->where('tanggal_evaluasi_harga', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name }}
                                                                    <input type="hidden" name="vendor_code[{{$val->document_evaluasi_id }}]" value="{{ $val->vendor_code}}" />
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
                                                                    <textarea name="catatan_harga[{{$val->document_evaluasi_id }}]" id="verif_1_note" class="form-control" placeholder="Catatan penawaran">{{ $val->keterangan_evaluasi_harga }}</textarea>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            @foreach($tender_aanwidjzing as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name }}
                                                                    <input type="hidden" name="vendor_code[{{$val->aanwidjzing_id }}]" value="{{ $val->vendor_code }}" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="tanggal_harga[{{$val->aanwidjzing_id }}]" class="form-control datepicker" placeholder="Tanggal Evaluasi Harga">
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
                                                                    <textarea name="catatan_harga[{{$val->aanwidjzing_id }}]" id="verif_1_note" class="form-control" placeholder="Catatan Evaluasi (harga)"></textarea>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Evaluasi Dokumen Penawaran:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Evaluasi Dokumen Penawaran Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_evaluasi_penawaran_harga" class="form-control" placeholder="please insert nomor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Berita Acara Evaluasi Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="file" name="file_evaluasi_harga" class="form-control" id="file-draft">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </fieldset>
                                            @endif
                                            <!-- Existing evaluasi harga -->
                                            @if($evaluasi_2_sampul->where('tanggal_evaluasi_harga', '!=', '')->count() > 0)
                                            <fieldset>
                                                <legend>EVALUASI DOKUMEN PENAWARAN HARGA</legend>
                                                <!-- //--------------------------------// -->
                                                <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-harga" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                    <input type="hidden" name="metode" value="2_sampul" class="metode_sampul" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input type="hidden" name="type" value="evaluasi_dokumen_penawaran_harga" />
                                                    <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                        <thead style="text-align: center">
                                                            <tr>
                                                                <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN HARGA</th>
                                                            </tr>
                                                            <tr>
                                                                <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                                <th width="10%" rowspan="2">TANGGAL EVALUASI (Harga)</th>
                                                                <th width="5%" rowspan="2">LOLOS</th>
                                                                <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                                <th width="20%" rowspan="2">CATATAN EVALUASI (Harga)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="vertical-align: top">
                                                            @foreach($evaluasi_2_sampul->where('tanggal_evaluasi_harga', '!=', '') as $val)
                                                            <tr>
                                                                <td>
                                                                    {{ $val->vendor_name }}
                                                                </td>
                                                                <td>
                                                                    {{ $val->tanggal_evaluasi_harga }}
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
                                                                <td align="center">
                                                                    {{ $val->keterangan_evaluasi_harga }}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @php
                                                    $evaluasi_harga = $berita_acara->where('step_process','evaluasi_dokumen_penawaran_harga')
                                                    ->where('sp3_id', $data->sp3_id)
                                                    ->first();
                                                    @endphp
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Evaluasi Dokumen Penawaran:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                @if(!$evaluasi_harga)
                                                                <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $evaluasi_harga ? $evaluasi_harga->tanggal_berita_acara : '' }}">
                                                                @else
                                                                {{ $evaluasi_harga ? $evaluasi_harga->tanggal_berita_acara : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Evaluasi Dokumen Penawaran Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                @if(!$evaluasi_harga)
                                                                <input type="text" name="nomor_evaluasi_penawaran_harga" class="form-control" placeholder="please insert nomor" value="{{ $evaluasi_harga ? $evaluasi_harga->nomor_spr : '' }}">
                                                                @else
                                                                {{ $evaluasi_harga ? $evaluasi_harga->nomor_spr : '' }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Evaluasi Harga:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                @if(!$evaluasi_harga)
                                                                <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                                @else
                                                                @if($evaluasi_harga)
                                                                @if($evaluasi_harga->file_berita_acara != '')
                                                                <a href="{{ asset('file/SP3/'. $evaluasi_harga->file_berita_acara) }}" target="_blank">
                                                                    <i class="uil uil-file-alt mt-4"></i> {{ $evaluasi_harga->file_berita_acara }}
                                                                </a>
                                                                @endif
                                                                @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </fieldset>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    @if($data->step_process == 8)
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="PROSES_PAT"><i class="uil uil-check"></i>Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="PROSES_PAT">Reject</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <div id="sw-arrows-step-6" class="tab-pane step-content">
                                <div class="add-undangan-kkn">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <form action="{{ route('save.undangan_kkn') }}" method="post" id="form-undangan-kkn" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">UNDANGAN KLARIFIKASI, KONFIRMASI DAN NEGOISASI</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL UNDANGAN KKN <i class="text-danger">*</i></th>
                                                            <th width="30%" rowspan="2">CATATAN UNDANGAN KKN </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @if($undangan_kkn->count() > 0)
                                                        @foreach($undangan_kkn as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tanggal_undangan_kkn }}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->notes }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @foreach($tender_lolos_evaluasi as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_kkn[]" class="form-control datepicker" placeholder="Tanggal Undangan KKN">
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_kkn[]" id="catatan_kkn" class="form-control" placeholder="Catatan undangan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                                @php
                                                $undangan_berita_kkn = $berita_acara->where('step_process','undangan_kkn')->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Undangan Klarifiksai, Konfirmasi dan Negosiasi: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            @if(!$undangan_berita_kkn)
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $undangan_berita_kkn ? $undangan_berita_kkn->tanggal_berita_acara : '' }}">
                                                            @else
                                                            {{ $undangan_berita_kkn ? $undangan_berita_kkn->tanggal_berita_acara : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Undangan Klarifiksai, Konfirmasi dan Negosiasi Nomor: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            @if(!$undangan_berita_kkn)
                                                            <input type="text" name="nomor_undangan_kkn" class="form-control" placeholder="please insert nomor" value="{{ $undangan_berita_kkn ? $undangan_berita_kkn->nomor_spr : '' }}">
                                                            @else
                                                            {{ $undangan_berita_kkn ? $undangan_berita_kkn->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Undangan KKN:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$undangan_berita_kkn)
                                                            <input type="file" name="file_undangan_kkn" class="form-control upload-file " id="file-draft">
                                                            @else
                                                            @if($undangan_berita_kkn)
                                                            @if($undangan_berita_kkn->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $undangan_berita_kkn->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $undangan_berita_kkn->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-7" class="tab-pane step-content">
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
                                                            <th width="20%" rowspan="2">TANGGAL KKN <i class="text-danger">*</i></th>
                                                            <th width="15%" rowspan="2">HPS/PAGU <i class="text-danger">*</i></th>
                                                            <th width="15%" rowspan="2">HARGA NEGOISASI <i class="text-danger">*</i></th>
                                                            <th width="30%" rowspan="2">CATATAN KKN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @if($klarifikasi->count() > 0)
                                                        @foreach($klarifikasi as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->tanggal_kkn }}
                                                            </td>
                                                            <td align="center">
                                                                @if($val->hps_pagu != ''){{ number_format($val->hps_pagu,2,',','.') }}@endif
                                                            </td>
                                                            <td align="center">
                                                                @if($val->harga_negosiasi != ''){{ number_format($val->harga_negosiasi,2,',','.') }}@endif
                                                            </td>
                                                            <td align="center">
                                                                {{ $val->keterangan }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        @foreach($tender_lolos_evaluasi as $val)
                                                        @php
                                                        $pagu = $data->nilai_pr + $data->tax_value;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                {{ $val->vendor_name }}
                                                                <input type="hidden" name="vendor_code[]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_kkn[]" class="form-control datepicker" placeholder="Tanggal KKN">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="hps_pagu[]" class="form-control money" placeholder="Please insert hps/pagu" value="{{ $pagu }}">
                                                                <input type="hidden" class="hps-pagu" value="{{ $pagu }}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="harga_negosiasi[]" class="form-control harga-negosiasi money" placeholder="Please insert harga negosiasi">
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_kkn[]" id="catatan_kkn" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                                @if($data->proses_st == 'PROSES_KKN')
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="row">
                                                    <label for="exampleInputEmail1"></label><br>
                                                    <label for="exampleInputEmail1"></label><br>
                                                    <label for="exampleInputEmail1"></label>
                                                </div>
                                                @php
                                                $berita_kkn = $berita_acara->where('step_process','kkn')->first();
                                                $memo_internal = $berita_acara->where('step_process','kkn')
                                                ->where('nomor_memo_internal','!=','')
                                                ->where('tanggal_memo_internal','!=','')
                                                ->first();
                                                @endphp
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Klarifikasi, Konfirmasi dan Negoisasi: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            @if(!$berita_kkn)
                                                            <input type="text" name="tanggal_berita_acara" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $berita_kkn ? $berita_kkn->tanggal_berita_acara : '' }}">
                                                            @else
                                                            {{ $berita_kkn ? $berita_kkn->tanggal_berita_acara : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi Nomor: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            @if(!$berita_kkn)
                                                            <input type="text" name="nomor_kkn" class="form-control" placeholder="please insert nomor" value="{{ $berita_kkn ? $berita_kkn->nomor_spr : '' }}">
                                                            @else
                                                            {{ $berita_kkn ? $berita_kkn->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$berita_kkn)
                                                            <input type="file" name="file_kkn" class="form-control upload-file" id="file-draft">
                                                            @else
                                                            @if($berita_kkn)
                                                            @if($berita_kkn->file_berita_acara != '')
                                                            <a href="{{ asset('file/SP3/'. $berita_kkn->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $berita_kkn->file_berita_acara }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($memo_internal)
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Memo Internal:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$memo_internal)
                                                            <input type="text" name="tanggal_memo_internal" class="form-control datepicker" id="file-draft" placeholder="Please insert tanggal memo" value="{{ $memo_internal ? $memo_internal ->tanggal_memo_internal : '' }}">
                                                            @else
                                                            {{ $memo_internal ? $memo_internal ->tanggal_memo_internal : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Nomor Memo Internal:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$memo_internal)
                                                            <input type="text" name="nomor_memo_internal" class="form-control" id="file-draft" placeholder="Please insert nomor memo" value="{{ $memo_internal ? $memo_internal->nomor_memo_internal : '' }}">
                                                            @else
                                                            {{ $memo_internal ? $memo_internal->nomor_memo_internal : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Memo Internal Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$memo_internal)
                                                            <input type="file" name="file_memo_kkn" class="form-control" id="file-draft">
                                                            @else
                                                            @if($memo_internal)
                                                            @if($memo_internal->file_memo_internal != '')
                                                            <a href="{{ asset('file/SP3/'. $memo_internal->file_memo_internal) }}" target="_blank">
                                                                <i class="uil uil-file-alt mt-4"></i> {{ $memo_internal->file_memo_internal }}
                                                            </a>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="memo-internal" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tanggal Memo Internal:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="tanggal_memo_internal" class="form-control datepicker" id="file-draft" placeholder="Please insert tanggal memo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Nomor Memo Internal:</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" name="nomor_memo_internal" class="form-control" id="file-draft" placeholder="Please insert nomor memo">
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
                                                                <input type="file" name="file_memo_kkn" class="form-control" id="file-draft">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-8" class="tab-pane step-content">
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
                                                        <th>TANGGAL BERITA ACARA <i class="text-danger">*</i></th>
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
                                                        <td align="center">
                                                            {{ $val->tanggal_berita_acara }}
                                                        </td>
                                                        <td align="center">
                                                            {{ $val->catatan_berita_acara }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @else
                                                    @foreach($tender_lolos_evaluasi as $val)
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
                                            @php
                                            $berita_bahp = $berita_acara->where('step_process','berita_hasil_pelelangan')->first();
                                            @endphp
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Berita Acara Hasil Pelelangan: <i class="text-danger">*</i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if(!$berita_bahp)
                                                        <input type="text" name="tanggal_bahp" class="form-control datepicker" placeholder="please insert tanggal" value="{{ $berita_bahp ? $berita_bahp->tanggal_berita_acara : '' }}">
                                                        @else
                                                        {{ $berita_bahp ? $berita_bahp->tanggal_berita_acara : '' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Hasil Pelelangan Nomor: <i class="text-danger">*</i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if(!$berita_bahp)
                                                        <input type="text" name="nomor_bahp" class="form-control" placeholder="please insert nomor" value="{{ $berita_bahp ? $berita_bahp->nomor_spr : '' }}">
                                                        @else
                                                        {{ $berita_bahp ? $berita_bahp->nomor_spr : '' }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara Hasil Pelelangan: <i class="text-danger">*</i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        @if(!$berita_bahp)
                                                        <input type="file" name="file_bahp" class="form-control upload-file">
                                                        @else
                                                        @if($berita_bahp)
                                                        @if($berita_bahp->file_berita_acara != '')
                                                        <a href="{{ asset('file/SP3/'. $berita_bahp->file_berita_acara) }}" target="_blank">
                                                            <i class="uil uil-file-alt mt-4"></i> {{ $berita_bahp->file_berita_acara }}
                                                        </a>
                                                        @endif
                                                        @endif
                                                        @endif
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
                            <div id="sw-arrows-step-9" class="tab-pane step-content">
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
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Usulan dan Penetapan Calon Pemenang: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if(!$pemenang)
                                                        <input type="text" class="form-control datepicker" name="tanggal_usulan_pemenang" placeholder="please insert tanggal" value="@if($pemenang) {{ $pemenang->tanggal_usulan_pemenang }} @endif">
                                                        @else
                                                        @if($pemenang) {{ $pemenang->tanggal_usulan_pemenang }} @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Usulan dan Penetapan Calon Pemenang Nomor: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if(!$pemenang)
                                                        <input type="text" class="form-control" name="nomor_usulan_pemenang" placeholder="please insert nomor" value="@if($pemenang) {{ $pemenang->nomor_usulan_pemenang }} @endif">
                                                        @else
                                                        @if($pemenang) {{ $pemenang->nomor_usulan_pemenang }} @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Calon Pemenang Tender: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$pemenang)
                                                            <select class="form-control" name="vendor_code">
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_lolos_evaluasi as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $pemenang->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @else
                                                            @if($pemenang) {{ $pemenang->get_vendor->vendor_name }} @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">File Berita Acara Usulan Pemenang: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    @if($pemenang)
                                                    <div class="col-md-6 mb-2">
                                                        <label>
                                                            <a href="{{ asset('file/sp3/'. $pemenang->file_berita_acara) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $pemenang->file_berita_acara }}
                                                            </a>
                                                        </label>
                                                    </div>
                                                    @else
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control upload-file" name="berita_acara_pemenang" value="" />
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$pemenang)
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note">{{ $pemenang ? $pemenang->catatan : '' }}</textarea>
                                                            @else
                                                            {{ $pemenang ? $pemenang->catatan : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-10" class="tab-pane step-content">
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
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Pengumuman Pemenang Pemenang: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control datepicker" name="tanggal_pemenang" placeholder="please insert tanggal" @if($pemenang) value="{{ $pemenang->tanggal_pemenang }}" @endif>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Pengumuman Pemenang Nomor: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="nomor_pemenang" placeholder="please insert nomor" @if($pemenang) value="{{ $pemenang->nomor_pemenang }}" @endif>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Pemenang Tender: </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            {{ $pemenang ? $pemenang->get_vendor->vendor_name : '' }}
                                                            <input type="hidden" name="vendor_code" class="form-control" value="{{ $pemenang ? $pemenang->get_vendor->vendor_code : '' }}" />
                                                            <!-- <select class="form-control" name="vendor_code">
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_lolos_evaluasi as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $pemenang->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select> -->
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
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note">{{ $pemenang ? $pemenang->catatan : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($data->proses_st != 'PROSES_DC')
                                                <!-- <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit Draft Contract</button>
                                                    </div>
                                                </div> -->
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sw-arrows-step-11" class="tab-pane step-content">
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
                                                <input type="hidden" name="trx_spr_id" id="trx_spr_id" value="{{ $spr ? $spr->trx_spr_id : '' }}" />
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="hidden" name="vendor_code" value="{{ $pemenang ? $pemenang->vendor_code : '' }}" />
                                                            <select class="form-control" disabled>
                                                                <option value="">Select Vendor</option>
                                                                @foreach($tender_aanwidjzing as $val)
                                                                <option value="{{ $val->vendor_code }}" @if($pemenang) {{ $val->vendor_code == $pemenang->vendor_code ? ' selected' : '' }} @endif>{{ $val->vendor_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @else
                                                            {{ $pemenang ? $pemenang->get_vendor->vendor_name : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Total Hari Kalender:</label>
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
                                                    <div class="col-md-3 mt-2">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload SP Jamlak : <i class="text-danger">*</i></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if(!$spr)
                                                        <input type="file" class="form-control upload-file" name="file_jamlak">
                                                        @else
                                                        <label>
                                                            <a href="{{ asset('file/sp3/'. $spr->file_jamlak) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $spr->file_jamlak }}
                                                            </a>
                                                        </label>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Summary Dokumen SPR: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    @if($pemenang)
                                                    <div class="col-md-3 mb-2">
                                                        <a href="{{ route('evaluasi.print.sk')}}?id={{ request()->id }}" target="_blank" class="btn btn-primary btn-sm btn-rounded">
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
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Total Hari MPPL: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="workDays" class="form-control" placeholder="Please insert days" value="{{ $spr ? $spr->total_hari_kerja : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->total_hari_kerja : '' }}
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Uncontrolled Days: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="uncontrolledDays" class="form-control" placeholder="Please insert days" value="{{ $spr ? $spr->uncontrolled_days : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->uncontrolled_days : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Nomor SPR: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="nomor_spr" class="form-control" placeholder="Please insert no spr" value="{{ $spr ? $spr->nomor_spr : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->nomor_spr : '' }}
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload SPR : <i class="text-danger">*</i></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if(!$spr)
                                                        <input type="file" class="form-control upload-file" name="file_spr">
                                                        @else
                                                        <label>
                                                            <a href="{{ asset('file/sp3/'. $spr->file_spr) }}" target="_blank">
                                                                <i class="uil uil-file-alt"></i> {{ $spr->file_spr }}
                                                            </a>
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Nama Penanda Tangan: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="nama_ttd" class="form-control" placeholder="Please nama penanda tangan" value="{{ $spr ? $spr->nama_ttd : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->nama_ttd : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Jabatan Penanda Tangan: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="jabatan_ttd" class="form-control" placeholder="Please nama jabatan" value="{{ $spr ? $spr->jabatan_ttd : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->jabatan_ttd : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Start Jaminan Pelaksanaan: <i class="text-danger">*</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="start_jamlak" class="form-control datepicker" placeholder="Please insert jamlak" value="{{ $spr ? $spr->start_jamlak : '' }}">
                                                            @else
                                                            {{ $spr ? $spr->start_jamlak : '' }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    {{--<div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="font-weight-bold">Start MPPL:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            @if(!$spr)
                                                            <input type="text" name="start_mppl" class="form-control datepicker" placeholder="Please start mppl" value="{{ $spr ? $spr->start_mppl : '' }}">
                                                    @else
                                                    {{ $spr ? $spr->start_mppl : '' }}
                                                    @endif
                                                </div>
                                        </div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                @if(!$spr)
                                                <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note" value="{{ $spr ? $spr->jabatan_ttd : '' }}">{{ $spr ? $spr->catatan_spr : '' }}</textarea>
                                                @else
                                                {{ $spr ? $spr->catatan_spr : '' }}
                                                @endif
                                            </div>
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
@endif
</div>
<input type="hidden" id="undangan-kkn" value="{{ $undangan_kkn->count() }}">
<input type="hidden" id="pemenang" value="{{ $pemenang }}">
<input type="hidden" id="total_pagu" value="">
<!-- new source -->
@endsection
@push('scripts')
<script src="{{ asset('assets/js/process-pbj.js') }}"></script>
<script>
    $(document).ready(function() {
        var status = $('#contract_status').val();
        var metode = $('#type_metode').val();
        var total_pagu = $('#total_pagu').val();
        var total = 0;
        $('.hps-pagu').each(function(index, element) {
            total = total + parseFloat($(element).val());
        });
        $("#total_pagu").val(total)
        $('body').on('keyup', '.harga-negosiasi', function() {
            var total = 0;
            $('.harga-negosiasi').each(function(index, element) {
                var arry = $(element).val().replace('.', '');
                total = parseFloat(total) + parseFloat(arry);
            });
            console.log(total)
            if (parseInt(total_pagu) < parseInt(total)) {
                $('.memo-internal').show()
            } else {
                $('.memo-internal').hide()
            }
        })
        if (status == 'PROSES_DRKS') {
            $('.rks').addClass('active')
            $("#sw-arrows-step-1").css("display", "block")
        } else if (status == 'PROSES_RRKS') {
            $('.rks').addClass('active')
            $("#sw-arrows-step-1").css("display", "block")
        } else {
            $('.rks').addClass('done')
            $("#sw-arrows-step-1").css("display", "")
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
                                title: 'Your Document approved',
                                // text: "File change status to Calon Peserta tender!",
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
            var status_process = $(this).closest('#smartwizard-arrows').find('[style*="display: block"]').attr('id');
            if (status == 'PROSES_DRKS') {
                var metode = '{{ $data->type_metode }}'
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
            } else if (status == 'PROSES_URKS') {
                $('.calon-tender').removeClass('active')
                var metode = '{{ $data->type_metode }}'
                console.log(metode)
                if (metode == 3) {
                    var title = 'Are you sure save Calon Peserta Tender ?'
                } else {
                    var title = 'Are you sure save Undangan RKS'
                }
                Swal.fire({
                    title: title,
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        if (metode == 3) {
                            $("#tender").submit();
                        } else {
                            $("#form-undangan").submit();
                        }
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
                var step = "{{ $data->step_process }}";
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
                        if (step == '') {
                            $("#form-dokumen-penawaran").submit();
                        } else if (step == 1) {
                            $("#form-undangan-dokumen-penawaran").submit();
                        } else if (step == 2) {
                            // step 1 to 2
                            $("#form-pembukaan-dokumen").submit();
                        }
                        // else if (step == 6) {
                        //     // step 2 to 3
                        //     $("#form-pembukaan-harga").submit();
                        // } else if (step == 7) {
                        //     // step 3 to 4
                        //     $("#form-doc-harga").submit();
                        // }
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
                    var step = '{{ $data->step_process }}'
                    if (step == 5 || step == 6) {
                        var title = 'Are you sure save Document Penawaran ?'
                    } else {
                        var title = 'Are you sure save Evaluasi Dokumen Penawaran ?'
                    }
                    Swal.fire({
                        title: title,
                        // text: 'Your procurement are send to contract!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            e.preventDefault()
                            if (step == 3) {
                                $("#form-evaluasi-penawaran-teknis").submit();
                            } else if (step == 4) {
                                $("#form-evaluasi-penawaran-admin").submit();
                            } else if (step == 5) {
                                $("#form-pembukaan-harga").submit();
                            } else if (step == 6) {
                                // step 2 to 3
                                $("#form-doc-harga").submit();
                            } else if (step == 7) {
                                // step 3 to 4
                                $("#form-harga").submit();
                            }
                            // else if(step == 5){
                            // }
                            // $("#form-harga").submit();
                        }
                    })

                }
            } else if (status == 'PROSES_KKN' || status == 'PROSES_EDH') {
                var undangan = "{{ $undangan_kkn->count() }}";
                $('.bahp').removeClass('active')
                Swal.fire({
                    title: undangan > 0 ? 'Are you sure save Klarifikasi, Konformasi dan Negosiasi ?' : 'Are you sure save Undangan Klarifikasi, Konformasi dan Negosiasi ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        if (undangan > 0) {
                            $("#form-klarifikasi").submit();
                        } else {
                            $("#form-undangan-kkn").submit();
                        }
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
            } else if (status == 'PROSES_DC' || status == 'PROSES_PCP') {
                $('.pcp').removeClass('active')
                var pemenang = '{{ $pemenang ? $pemenang->status : "" }}';
                if (pemenang == 'pemenang') {
                    Swal.fire({
                        title: 'Are you sure save SPR ?',
                        // text: 'Your procurement are send to contract!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            e.preventDefault()
                            $("#form-spr").submit();
                        }
                    })
                } else if (pemenang == 'usulan') {
                    Swal.fire({
                        title: 'Are you sure save Pemenang Tender ?',
                        // text: 'Your procurement are send to contract!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            e.preventDefault()
                            $("#form-penetapan-pemenang").submit();
                        }
                    })
                }
            }
        })

        $('body').on('click', '.add-button-vendor', function() {
            var body = ''
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
            foreach ($vendor_list as $val) {
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

    $('body').on('change', '.upload-file', function() {
        if (this.files[0].size > 20000000) {
            Swal.fire({
                title: 'Your file cannot be larger than 20mb !',
                // text: "File change status to Calon Peserta tender!",
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).val('')
                }
            })
        }
    })
</script>
@endpush