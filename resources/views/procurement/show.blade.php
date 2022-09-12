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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">PBJ Process</h4>
                    <p class="sub-header">Procces of PBJ</p>
                    <div class="row mt-4">
                        <ul class="nav nav-tabs">
                            @if($data->proses_st == 'PROSES_DRKS' || $data->proses_st == 'PROSES_RRKS' || $data->proses_st == 'PROSES_PP' || $data->proses_st == 'PROSES_AL' ||
                            $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP' || $data->proses_st == 'PROSES_KKN'
                            || $data->proses_st == 'PROSES_EDH' || $data->proses_st == 'PROSES_UPCP' || $data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_PCP'
                            || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR' || $data->proses_st == 'PROSES_PGL')
                            <li class="nav-item tab-draftrks">
                                <a href="#draftrks" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_DRKS' || $data->proses_st == 'PROSES_RRKS' || $data->proses_st == 'PROSES_PGL' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">RKS</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_PP' || $data->proses_st == 'PROSES_AL' || $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' || $data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_UPCP' || $data->proses_st == 'PROSES_PCP'
                            || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-peserta-tender">
                                <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_PP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Peserta Tender</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_AL' || $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' || $data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_UPCP' || $data->proses_st == 'PROSES_PCP'
                            || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-aanwidjzing">
                                <a href="#aanwidjzing" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_AL' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Aanwidjzing</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' ||$data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_UPCP'
                            || $data->proses_st == 'PROSES_PCP' || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-dokumen-penawaran">
                                <a href="#dokumen-penawaran" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Dokumen Penawaran</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_EP' || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' || $data->proses_st == 'PROSES_BAHP' ||
                            $data->proses_st == 'PROSES_UPCP' || $data->proses_st == 'PROSES_PCP' || $data->proses_st == 'SPR'
                            || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-evaluasi-dokumen">
                                <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_EP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Evaluasi Penawaran</span>
                                </a>
                            </li>
                            @if($data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' || $data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_UPCP'
                            || $data->proses_st == 'PROSES_PCP' || $data->proses_st == 'SPR'
                            || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-klarifikasi">
                                <a href="#klarifikasi" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Klarifikasi, Konfirmasi dan Negoisasi</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_BAHP' || $data->proses_st == 'PROSES_UPCP'
                            || $data->proses_st == 'PROSES_PCP' || $data->proses_st == 'SPR'
                            || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-klarifikasi">
                                <a href="#bahp" data-toggle="tab" aria-expanded="true" class="nav-link {{ $data->proses_st == 'PROSES_BAHP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Berita Acara Hasil Pelelangan</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_UPCP' || $data->proses_st == 'PROSES_PCP'
                            || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-pemenang">
                                <a href="#pemenang" data-toggle="tab" aria-expanded="false" class="nav-link {{ $data->proses_st == 'PROSES_UPCP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Usulan Calon Pemenang</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_PCP' || $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR')
                            <li class="nav-item tab-penetapanpemenang">
                                <a href="#penetapanpemenang" data-toggle="tab" aria-expanded="false" class="nav-link {{ $data->proses_st == 'PROSES_PCP' ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Penetapan Calon Pemenang</span>
                                </a>
                            </li>
                            @endif
                            @php
                            $status = $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR';
                            @endphp
                            @if($status)
                            <li class="nav-item tab-spr">
                                <a href="#spr" data-toggle="tab" aria-expanded="false" class="nav-link {{ $status ? 'active' : '' }}">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">SPR</span>
                                </a>
                            </li>
                            @endif
                            @else
                            <!-- <li class="nav-item tab-summary">
                                <a href="#summary" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Summary PBJ</span>
                                </a>
                            </li> -->
                            @endif
                        </ul>
                        <div class="tab-content p-3 text-muted col-md-12">
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_DRKS' || $data->proses_st == 'PROSES_RRKS' || $data->proses_st == 'PROSES_PGL' ? 'show' : '' }} {{ $data->proses_st == 'PROSES_DRKS' || $data->proses_st == 'PROSES_RRKS' || $data->proses_st == 'PROSES_PGL' ? 'active' : '' }}" id="draftrks">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                        <form action="#" id="form-draftrks" enctype="multipart/form-data">
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
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    @if($data->proses_st == 'PROSES_DRKS')
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if($data->proses_st == 'PROSES_RRKS')
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning btn-sm btn-rounded approve mr-2" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded reject" data-bind="{{ $data->proses_st }}"><i class="uil uil-reject"></i>Reject</button>
                                </div>
                                @endif
                            </div>
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_PP' ? 'active' : '' }}" id="peserta-tender">
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
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-tender" data-bind="{{ $data->proses_st }}">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane {{ $data->proses_st == 'PROSES_AL' ? 'active' : '' }}" id="aanwidjzing">
                                <form id="form-aanwidjzing" enctype="multipart/form-data" method="post" action="{{ route('save.aanwidjzing') }}">
                                    @csrf
                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
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
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-sm btn-rounded save-aanwidjzing">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' ? 'active' : '' }}" id="dokumen-penawaran">
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
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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
                                                    @foreach($dokumen as $doc)
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
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}">Reject</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-status="gagal_lelang">Gagal Lelang</button>
                                                </div>
                                            </div>
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
                                                        @foreach($tender_list as $val)
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
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                                    </div>
                                                </div>
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
                                                    ->join('public.vandor as b','a.vendor_code','b.vendor_code')
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

                            <div class="tab-pane {{ $data->proses_st == 'PROSES_EP' ? 'active' : '' }}" id="evaluasi-dokumen">
                                <div class="add-evaluasi-dokumen">
                                    @if($rks)
                                    @if($rks->metode == '1_sampul')
                                    <div class="row">
                                        <!-- <label for="exampleInputEmail1">if 1 Sampul:</label> -->
                                        <div class="col-md-12">
                                            <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="1_sampul" />
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
                                                        @else
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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
                                                <input type="hidden" name="metode" value="2_sampul" />
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
                                                        @if($evaluasi_2_sampul->count() > 0)
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1" data-bind="{{ $data->proses_st }}">Reject</button>
                                                        @else
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH' ? 'active' : '' }}" id="klarifikasi">
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
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_BAHP' ? 'active' : '' }}" id="bahp">
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
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary btn-sm btn-rounded save-bahp">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane {{ $data->proses_st == 'PROSES_UPCP' ? 'active' : '' }}" id="pemenang">
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

                            <div class="tab-pane {{ $data->proses_st == 'PROSES_PCP' ? 'active' : '' }}" id="penetapanpemenang">
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
                                                    @if($pemenangfinal)
                                                    <div class="col-md-6 mb-2">
                                                        <a href="{{ asset('file/sp3/'. $pemenang->file_berita_acara) }}" target="_blank">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" /> {{ $pemenang->file_berita_acara }}
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
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan" class="form-control" placeholder="Please insert Penetapan Pemenang note">{{ $pemenang ? $pemenang->catatan : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit Draft Contract</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                            $status = $data->proses_st == 'SPR' || $data->proses_st == 'PROSES_DC' || $data->proses_st == 'PROSES_UJP' || $data->proses_st == 'PROSES_VJP'
                            || $data->proses_st == 'PROSES_RDC' || $data->proses_st == 'PROSES_VAC' || $data->proses_st == 'PROSES_ALG'
                            || $data->proses_st == 'PROSES_APU' || $data->proses_st == 'PROSES_KAC' || $data->proses_st == 'PROSES_CR';
                            @endphp
                            <div class="tab-pane {{ $status ? 'active' : '' }}" id="spr">
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

                            <div class="tab-pane" id="summary">
                                <div class="add-summary">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
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
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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
@push('scripts')
<script>
    $(document).ready(function() {
        // SAVE DATA RKS
        $('body').on('click', '.save-rks', function() {
            var file_penawaran = $("#file-penawaran")[0].files;
            var file_dokumen = $("#file-dokumen")[0].files;
            var sp3_id = $("#sp3-id").val();
            var tanggal_rks = $("#tanggal-rks").val();
            var metode_dokumen = $("#metode-dokumen").val();
            var catatan_rks = $("#catatan-rks").val();
            var formData = new FormData();
            formData.append('file_penawaran', file_penawaran[0])
            formData.append('file_dokumen', file_dokumen[0])
            formData.append('tanggal_rks', tanggal_rks)
            formData.append('metode_dokumen', metode_dokumen)
            formData.append('catatan_rks', catatan_rks)
            formData.append('sp3_id', sp3_id)
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{ route('procurement.store') }}",
                method: "POST",
                dataType: 'JSON',
                data: formData,
                processData: false,
                contentType: false,
            }).done(function(response) {
                if (response.status == 200) {
                    Swal.fire({
                        title: 'RKS Saved',
                        text: "File change status to Reviewing RKS!",
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload()
                        }
                    })
                } else {
                    Swal.fire(
                        'RKS failed Save!',
                        'Your RKS has failed save.',
                        'error'
                    )
                }
            })
        })

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
                                text: "File change status to Evaluasi Penawaran!",
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

        // SAVE AANDWIDJZING
        $("#form-aanwidjzing").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save Aanwidjzing ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.aanwidjzing') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        });

        // SAVE DOKUMEN PENAWARAN
        $("#form-dokumen-penawaran").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save dokumen penawaran ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.document-penawaran') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        });

        // SAVE EVALUASI 
        $("#form-evaluasi-penawaran").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save evaluasi penawaran ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.evaluasi-penawaran') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        })

        // SAVE EVALUASI HARGA
        $("#form-evaluasi-harga").submit(function(e) {
            alert("Evaluasi Penawaran saved !")
        })

        // SAVE BAHP
        $("#form-bahp").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save Berita Acara Hasil Pelelangan ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.bahp') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        })

        // SAVE KLARIFIKASI
        $("#form-klarifikasi").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save Klarifikasi, Konfirmasi dan Negosiasi ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.klarifikasi') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        })

        // FORM PEMENANG
        $("#form-pemenang").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save Usulan, Penetapan calon Pemenang ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.pemenang') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            location.reload()
                        })
                    }
                })
            }
        })

        $("#form-submit-contract").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Usulan, Penetapan calon Pemenang ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.pemenang') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            Swal.fire({
                                title: 'Your procurement sent to process Contract',
                                // text: "File change status to Pelaksanaan Aanwidjzing!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        })
                    }
                })
            }
        })

        $("#form-spr").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
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
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.spr') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            Swal.fire({
                                title: 'Your SPR is saved !',
                                // text: "File change status to Pelaksanaan Aanwidjzing!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        })
                    }
                })
            }
        })

        $("#form-penetapan-pemenang").submit(function(e) {
            if (e.isDefaultPrevented()) {
                //--Handle the invalid form
            } else {
                e.preventDefault();
                var record = new FormData(this);
                Swal.fire({
                    title: 'Are you sure save Penetapan Pemenang ?',
                    text: 'Your procurement are change status SPR!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            'type': 'POST',
                            'url': "{{ route('save.pemenang') }}",
                            'data': record,
                            contentType: false,
                            processData: false,
                        }).done(function(response) {
                            Swal.fire({
                                title: 'Your status change to SPR',
                                // text: "File change status to Pelaksanaan Aanwidjzing!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        })
                    }
                })
            }
        })
        // SAVE FORM TENDER
        $('body').on('click', '.save-tender', function() {
            Swal.fire({
                title: 'Are you sure save Tender?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('save.tender') }}",
                        method: "post",
                        dataType: 'JSON',
                        data: $("#tender").serializeArray()
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: 'Peserta Tender Saved',
                                text: "File change status to Pelaksanaan Aanwidjzing!",
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

        // SAVE DOKUMEN PENAWARAN
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

        // SEARCH VENDOR
        $(".vendor_name").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('vendor.autocomplete') }}",
                    data: {
                        search: request.term
                    },
                    dataType: "json",
                    beforeSend: function() {
                        $('.loading').html('loading ...')
                    },
                    success: function(data) {
                        console.log(data)
                        $('.loading').html(' ')
                        var resp = $.map(data, function(obj) {
                            return obj.vendor_name;
                        });
                        response(resp);
                    }
                });
            },
            select: function(event, ui) {
                $('.vendor_name').val(ui.item.label);
                return false;
            }
        });

        // SEARCH VENDOR AFTER APPEND
        $("body").on('keyup', '#test', function(request, response) {
            $(".vendor_name").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('vendor.autocomplete') }}",
                        data: {
                            search: request.term
                        },
                        dataType: "json",
                        beforeSend: function() {
                            $('.loading').html('loading ...')
                        },
                        success: function(data) {
                            $('.loading').html(' ')
                            var resp = $.map(data, function(obj) {
                                return obj.vendor_name
                            });
                            response(resp);
                        }
                    });
                },
                select: function(event, ui) {
                    $('.vendor_name').val(ui.item.label);
                    return false;
                }
                // minLength: 2
            });
        })

        // ADD FORM TENDER
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