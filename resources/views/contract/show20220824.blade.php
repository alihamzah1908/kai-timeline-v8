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
                    <li class="breadcrumb-item"><a href="{{ route('list.contract') }}"><b>Back</b></a></li>
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
                            <h5 class="header-title mt-0 mb-1">Detail Contract</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nomor SP3</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-pr"></span> {{ $data->no_sp3 }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal SP3</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-mi"></span>{{ date('d M Y', strtotime($data->created_at)) }}</dt>
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
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="vendor-name"></span>{{ $data->nama_vendor }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Metode</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="nilai-pr"></span>{{ $data->type_metode }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nomor MI</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-pr"></span>{{ $data->no_mi }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Tanggal MI</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-rab"></span>{{ date('d M Y', strtotime($data->no_mi)) }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai PR</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-rab"></span>{{ number_format($data->nilai_pr, 2) }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Nilai Kontrak</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="no-kak"></span>{{ number_format($data->harga_negosiasi, 2) }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Jenis Barang</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-kak"></span>{{ $data->jenis_barang }}</dt>
                        </div>
                        <div class="col-md-3 mb-1">
                            <dt class="font-weight-bold">Status Kontrak</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal">: <span class="tanggal-justifikasi"></span>{{ $data->proses_st }}</dt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Contract Process</h4>
                            <p class="sub-header">Procces of Contract</p>
                            <div id="smartwizard-arrows" class="sw-main sw-theme-arrows">
                                <input type="hidden" value="{{ $data->proses_st }}" id="status">
                                <input type="hidden" value="{{ $data->sp3_id }}" id="id">
                                <ul class="nav nav-tabs step-anchor">
                                    <li class="nav-item draft-contract status-drk"><a href="#sw-arrows-step-1" class="nav-link">Draft Kontrak<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item performance status-pfm"><a href="#sw-arrows-step-2" class="nav-link">Performance Bond (Upload Jaminan Pelaksanaan)<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item verifikasi"><a href="#sw-arrows-step-3" class="nav-link">Verifikasi Jaminan Pelaksanaan<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item review"><a href="#sw-arrows-step-4" class="nav-link">Review Legal<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item approval-logistik"><a href="#sw-arrows-step-5" class="nav-link">Approval Logistik<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item approval-user"><a href="#sw-arrows-step-6" class="nav-link">Approval User<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item ttd-vendor {{ $data->proses_st == 'PROSES_KAC' ? 'active' : ''}}"><a href="#sw-arrows-step-7" class="nav-link">Tanda Tangan Vendor<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item ttd-kci"><a href="#sw-arrows-step-8" class="nav-link">Tanda Tangan KCI<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item mppl"><a href="#sw-arrows-step-9" class="nav-link">MPPL<small class="d-block">Step description</small></a></li>
                                    <!-- <li class="nav-item done"><a href="#sw-arrows-step-10" class="nav-link">Approval<small class="d-block">Step description</small></a></li> -->
                                </ul>

                                <div class="p-3 sw-container tab-content" style="min-height: 198.133px;">
                                    <div id="sw-arrows-step-1" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-draft-kontrak" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_draft->count() > 0)
                                                            @foreach($trx_draft as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Draft Contract:</label>
                                                                        <input type="file" name="file_draft" class="form-control" id="file-draft-contract" disabled value="{{ $val->file_draft_contract }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_draft_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_draft_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_draft" class="form-control datepicker" id="tanggal-submit-contract" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Draft:</label>
                                                                        <textarea class="form-control" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Draft Contract:</label>
                                                                        <input type="file" name="file_draft" class="form-control" id="file-draft-contract">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_draft" class="form-control datepicker" id="tanggal-submit-contract" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Draft:</label>
                                                                        <textarea class="form-control" name="catatan_draft" placeholder="please insert catatan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-2" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-draft-performance" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_jaminan->count() > 0)
                                                            @foreach($trx_jaminan as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Jaminan Pelaksanaan:</label>
                                                                        <input type="file" name="file_performance" class="form-control" id="file-performance" disabled>
                                                                        <a href="{{ asset('file/contract/' . $val->file_performance_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_performance_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Bank:</label>
                                                                        <select name="bank" class="form-control" id="bank">
                                                                            <option value="">Pilih Bank</option>
                                                                            <option value="BCA" {{ $val->bank == 'BCA' ? ' selected' : '' }}>Bank Central Asia</option>
                                                                            <option value="MANDIRI" {{ $val->bank == 'MANDIRI' ? ' selected' : '' }}>Mandiri</option>
                                                                            <option value="BNI" {{ $val->bank == 'BNI' ? ' selected' : '' }}>BNI</option>
                                                                            <option value="BRI" {{ $val->bank == 'BRI' ? ' selected' : '' }}>BRI</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Cabang:</label>
                                                                        <input type="text" name="cabang" id="cabang" class="form-control" value="{{ $val->bank_cab }}" placeholder="please insert cabang" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_performace" class="form-control datepicker" id="tanggal-submit-performance" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">No Bank Garansi:</label>
                                                                        <input type="text" name="bank_garansi" id="no_bank_garansi" class="form-control" value="{{ $val->no_bank_garansi }}" placeholder="please insert garansi" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Minimum Jaminan:</label>
                                                                        @php
                                                                        $percent = ($data->harga_negosiasi * 5) / 100;
                                                                        @endphp
                                                                        <input type="text" name="minimum_jaminan" id="minimum_jaminan" class="form-control money" value="{{ $val->minimum_jaminan }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (Start Date):</label>
                                                                        <input type="text" name="start_berlaku" id="start_berlaku" class="form-control datepicker" value="{{ $val->start_berlaku }}" placeholder="please insert masa berlaku" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (End Date):</label>
                                                                        <input type="text" name="end_berlaku" id="end_berlaku" class="form-control datepicker" value="{{ $val->end_berlaku }}" placeholder="please insert masa berlaku" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Nilai Jaminan:</label>
                                                                        <input type="text" name="nilai_jaminan" id="nilai_jaminan" class="form-control money" value="{{ $val->nilai_jaminan }}" placeholder="please insert nilai jaminan" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Terbit Jamlak:</label>
                                                                        <input type="text" name="tanggal_jamlak" id="tanggal_jamlak" class="form-control datepicker" value="{{ $val->tanggal_jamlak }}" placeholder="please insert tanggal jamlak" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan Performance:</label>
                                                                    <textarea class="form-control" id="catatan_performance" name="catatan_performance" placeholder="please insert catatan" value="{{ $val->catatan_performance }}">{{ $val->catatan_performance }}</textarea>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Jaminan Pelaksanaan:</label>
                                                                        <input type="file" name="file_performance" class="form-control" id="file-performance">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Bank:</label>
                                                                        <select name="bank" class="form-control" id="bank">
                                                                            <option value="">Pilih Bank</option>
                                                                            <option value="BCA">Bank Central Asia</option>
                                                                            <option value="MANDIRI">Mandiri</option>
                                                                            <option value="BNI">BNI</option>
                                                                            <option value="BRI">BRI</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Cabang:</label>
                                                                        <input type="text" name="cabang" id="cabang" class="form-control" value="" placeholder="please insert cabang" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_performace" class="form-control datepicker" id="tanggal-submit-performance" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">No Bank Garansi:</label>
                                                                        <input type="text" name="bank_garansi" id="no_bank_garansi" class="form-control" value="" placeholder="please insert garansi" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Minimum Jaminan:</label>
                                                                        @php
                                                                        $percent = ($data->harga_negosiasi * 5) / 100;
                                                                        @endphp
                                                                        <input type="text" name="minimum_jaminan" id="minimum_jaminan" class="form-control money" value="{{ $data->harga_negosiasi - $percent }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (Start Date):</label>
                                                                        <input type="text" name="start_berlaku" id="start_berlaku" class="form-control datepicker" value="" placeholder="please insert masa berlaku" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (End Date):</label>
                                                                        <input type="text" name="end_berlaku" id="end_berlaku" class="form-control datepicker" value="" placeholder="please insert masa berlaku" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Nilai Jaminan:</label>
                                                                        <input type="text" name="nilai_jaminan" id="nilai_jaminan" class="form-control money" value="" placeholder="please insert nilai jaminan" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Terbit Jamlak:</label>
                                                                        <input type="text" name="tanggal_jamlak" id="tanggal_jamlak" class="form-control datepicker" value="" placeholder="please insert tanggal jamlak" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan Performance:</label>
                                                                    <textarea class="form-control" id="catatan_performance" name="catatan_performance" placeholder="please insert catatan"></textarea>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-3" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-verif-jamlak" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_verifikasi->count() > 0)
                                                            @foreach($trx_verifikasi as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Verifikasi Jaminan:</label>
                                                                        <input type="file" name="file_verifikasi" class="form-control" id="file-verifikasi" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_verifikasi_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_verifikasi_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_verifikasi" class="form-control datepicker" id="tanggal-submit-verifikasi" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Verifikasi:</label>
                                                                        <textarea class="form-control" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Verifikasi Jaminan:</label>
                                                                        <input type="file" name="file_verifikasi" class="form-control" id="file-verifikasi">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_verifikasi" class="form-control datepicker" id="tanggal-submit-verifikasi" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Verifikasi:</label>
                                                                        <textarea class="form-control" name="catatan_verifikasi" placeholder="please insert catatan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-4" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-review-legal" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_review->count() > 0)
                                                            @foreach($trx_review as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Review:</label>
                                                                        <input type="file" name="file_review" class="form-control" id="file-review" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_review_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_review_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_review" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Verifikasi:</label>
                                                                        <textarea class="form-control" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="add-form-review">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">File Review:</label>
                                                                            <input type="file" name="file_review[]" class="form-control" id="file-review">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                            <input type="text" name="tanggal_submit_review[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Review:</label>
                                                                            <textarea class="form-control" name="catatan_review[]" placeholder="please insert catatan"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <button class="btn btn-primary btn-rounded btn-sm add-review" type="button"><i class="uil uil-plus"></i> add form</button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-5" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-approval-logistik" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_approval->count() > 0)
                                                            @foreach($trx_approval as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Approval Logistik:</label>
                                                                        <input type="file" name="file_vendor" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_approval_logistik) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_approval_logistik }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_vendor" class="form-control datepicker" id="tanggal-submit-vendor" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval Logistik:</label>
                                                                        <textarea class="form-control" disabled>{{ $val->catatan_logistik }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="form-layout-approval-logistik">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">File Approval Logistik:</label>
                                                                            <input type="file" name="file_approval_logistik[]" class="form-control" id="file-approval">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                            <input type="text" name="tanggal_submit_logistik[]" class="form-control datepicker" id="tanggal-submit-approval" placeholder="please insert date submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval Logistik:</label>
                                                                            <textarea class="form-control" name="catatan_logistik[]"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <button class="btn btn-primary btn-rounded btn-sm add-approval-logistik" type="button"><i class="uil uil-plus"></i> add form</button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-6" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-approval-user" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_approval_user->count() > 0)
                                                            @foreach($trx_approval_user as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Approval User:</label>
                                                                        <input type="file" name="file_vendor" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_approval_user) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_approval_user }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_vendor" class="form-control datepicker" id="tanggal-submit-vendor" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval User:</label>
                                                                        <textarea class="form-control" disabled>{{ $val->catatan_logistik }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="form-layout-approval-user">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">File Approval User:</label>
                                                                            <input type="file" name="file_approval_user[]" class="form-control" id="file-approval-user">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                            <input type="text" name="tanggal_submit_user[]" class="form-control datepicker" id="tanggal-submit-user" placeholder="please insert date submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval User:</label>
                                                                            <textarea class="form-control" name="catatan_user[]"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <button class="btn btn-primary btn-rounded btn-sm add-approval-user" type="button"><i class="uil uil-plus"></i> add form</button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-7" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-ttd-vendor" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_vendor->count() > 0)
                                                            @foreach($trx_vendor as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Tanda Tangan Vedor:</label>
                                                                        <input type="file" name="file_vendor" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_vendor_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_vendor_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_vendor" class="form-control datepicker" id="tanggal-submit-vendor" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Tanda Tangan Vendor:</label>
                                                                        <textarea class="form-control" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="form-layout-ttd-vendor">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">File Tanda Tangan Vedor:</label>
                                                                            <input type="file" name="file_vendor[]" class="form-control" id="file-vendor">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                            <input type="text" name="tanggal_submit_vendor[]" class="form-control datepicker" id="tanggal-submit-vendor" placeholder="please insert date submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1" class="font-weight-bold">Catatan TTD Vendor:</label>
                                                                            <textarea class="form-control" name="catatan_vendor[]"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <button class="btn btn-primary btn-rounded btn-sm add-ttd-vendor" type="button"><i class="uil uil-plus"></i> add form</button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-8" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-ttd-kci" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_kci->count() > 0)
                                                            @foreach($trx_kci as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Tanda Tangan KCI:</label>
                                                                        <input type="file" name="file_kci" class="form-control" id="file-kci" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_kci_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_kci_contract }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_kci" class="form-control datepicker" id="tanggal-submit-kci" placeholder="please insert date submit" value="{{ $val->tanggal_submit }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan TTD Vendor:</label>
                                                                        <textarea class="form-control" disabled></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Tanda Tangan KCI:</label>
                                                                        <input type="file" name="file_kci" class="form-control" id="file-kci">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_kci" class="form-control datepicker" id="tanggal-submit-kci" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan TTD Vendor:</label>
                                                                        <textarea class="form-control" name="catatan_ttd_vendor" placeholder="please insert catatan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-9" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="{{ route('save.kontrak') }}" id="form-mppl" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->proses_st }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_mppl->count() > 0)
                                                            @foreach($trx_mppl as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date:</label>
                                                                        <!-- <input type="file" name="file_kci" class="form-control" id="file-kci"> -->
                                                                        <input type="text" name="start_date_mppl" class="form-control datepicker" id="start-date-mppl" placeholder="please insert date submit" value="{{ $val->start_date_mppl }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date:</label>
                                                                        <input type="text" name="end_date_mppl" class="form-control datepicker" id="end-date-mppl" placeholder="please insert date submit" value="{{ $val->end_date_mppl }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Sumamry Dokumen SPR:</label> &nbsp;&nbsp;
                                                                        @if($pemenang)
                                                                        <a href="{{ route('evaluasi.print.sp')}}" class="btn btn-primary btn-sm btn-rounded">
                                                                            <i class="uil uil-print"></i>
                                                                        </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Total Hari Kerja:</label>
                                                                        <input type="text" name="off_days" class="form-control" id="off-days" placeholder="please insert off days" value="{{ $val->off_days }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Uncontroll Days:</label>
                                                                        <input type="text" name="uncontroll_days" class="form-control" id="uncontroll-days" placeholder="please insert uncontroll days" value="{{ $val->uncontroll_days }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Pengawas Pekerjaan:</label>
                                                                        <textarea class="form-control" name="catatan_penanggung_jawab" placeholder="please insert catatan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date:</label>
                                                                        <!-- <input type="file" name="file_kci" class="form-control" id="file-kci"> -->
                                                                        <input type="text" name="start_date_mppl" class="form-control datepicker" id="start-date-mppl" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date:</label>
                                                                        <input type="text" name="end_date_mppl" class="form-control datepicker" id="end-date-mppl" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Sumamry Dokumen SPR:</label> &nbsp;&nbsp;
                                                                        @if($pemenang)
                                                                        <a href="{{ route('evaluasi.print.sp')}}" class="btn btn-primary btn-sm btn-rounded">
                                                                            <i class="uil uil-print"></i>
                                                                        </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Total Hari Kerja:</label>
                                                                        <input type="text" name="off_days" class="form-control" id="off-days" placeholder="please insert total_hari_kerja">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Uncontroll Days:</label>
                                                                        <input type="text" name="uncontroll_days" class="form-control" id="uncontroll-days" placeholder="please insert uncontroll days">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Pengawas Pekerjaan:</label>
                                                                        <textarea class="form-control" name="catatan_penanggung_jawab" placeholder="please insert catatan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-10" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                                            <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
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
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                </div>
                                <!-- <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end">
                            <div class="btn-group mr-2 sw-btn-group" role="group"><button class="btn btn-secondary sw-btn-prev disabled" type="button">Previous</button><button class="btn btn-secondary sw-btn-next" type="button">Next</button></div>
                        </div> -->
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
                var status = $('#status').val();
                if (status == 'PROSES_UJP') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                } else if (status == 'PROSES_VJP') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                } else if (status == 'PROSES_RDC') {
                    console.log(status)
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_VAC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_ALG') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_APU') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_VAC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_KAC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                } else if (status == 'PROSES_CR') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
                    $('.ttd-kci').addClass('done')
                    $('.mppl').addClass('done')
                }
                $('body').on('click', '.sw-btn-next', function(e) {
                    // conditional contract prosess
                    // if status 
                    var id = $(this).closest('#smartwizard-arrows').find('#id').val();
                    var status = $(this).closest('#smartwizard-arrows').find('#status').val();
                    console.log(status)
                    if (status == 'PROSES_DC') {
                        $('.performance').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Draft Contract ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-draft-kontrak").submit();
                                // var file_draft = $("#file-draft-contract")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-contract").val();
                                // var formData = new FormData();
                                // formData.append('file_draft', file_draft[0])
                                // formData.append('tanggal_submit_draft', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('.performance').addClass('active')
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_UJP') {
                        $('.verifikasi').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Jaminan Pelaksanaan ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-draft-performance").submit();
                                //     var file_perform = $("#file-performance")[0].files;
                                //     var tanggal_submit = $("#tanggal-submit-performance").val();
                                //     var bank = $("#bank").val();
                                //     var cabang = $("#cabang").val();
                                //     var no_garansi = $("#no_bank_garansi").val();
                                //     var minimum_jaminan = $("#minimum_jaminan").val();
                                //     var start_berlaku = $("#start_berlaku").val();
                                //     var end_berlaku = $("#end_berlaku").val();
                                //     var nilai_jaminan = $("#nilai_jaminan").val();
                                //     var catatan_performace = $("#catatan_performance").val();
                                //     var tanggal_jamlak = $("#tanggal_jamlak").val();
                                //     var formData = new FormData();
                                //     formData.append('file_performance', file_perform[0])
                                //     formData.append('tanggal_submit_performance', tanggal_submit)
                                //     formData.append('_token', '{{ csrf_token() }}');
                                //     formData.append('status', status);
                                //     formData.append('bank', bank);
                                //     formData.append('cabang', cabang);
                                //     formData.append('no_garansi', no_garansi);
                                //     formData.append('minimum_jaminan', minimum_jaminan);
                                //     formData.append('start_berlaku', start_berlaku);
                                //     formData.append('end_berlaku', end_berlaku);
                                //     formData.append('nilai_jaminan', nilai_jaminan);
                                //     formData.append('catatan_performance', catatan_performace);
                                //     formData.append('tanggal_jamlak', tanggal_jamlak);
                                //     formData.append('id', id);
                                //     $.ajax({
                                //         url: '{{ route("save.kontrak") }}',
                                //         method: 'POST',
                                //         dataType: 'json',
                                //         processData: false,
                                //         contentType: false,
                                //         data: formData,
                                //     }).done(function(response) {
                                //         if (response.status == 200) {
                                //             $('.verifikasi').addClass('active')
                                //             $('#status').val(response.proses_st)
                                //         }
                                //     })
                            }
                        })
                    } else if (status == 'PROSES_VJP') {
                        $('.review').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Verifikasi Jaminan ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-verif-jamlak").submit();
                                // var file_perform = $("#file-verifikasi")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-verifikasi").val();
                                // var formData = new FormData();
                                // formData.append('file_verifikasi', file_perform[0])
                                // formData.append('tanggal_submit_verifikasi', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('.review').addClass('active')
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_RDC') {
                        $('.review').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Review Legal ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            e.preventDefault()
                            $("#form-review-legal").submit();
                            // if (result.value) {
                            //     formData.append('tanggal_submit_review', tanggal_submit)
                            //     formData.append('_token', '{{ csrf_token() }}');
                            //     formData.append('status', status);
                            //     formData.append('id', id);
                            //     $.ajax({
                            //         url: '{{ route("save.kontrak") }}',
                            //         method: 'POST',
                            //         dataType: 'json',
                            //         processData: false,
                            //         contentType: false,
                            //         data: formData
                            //     }).done(function(response) {
                            //         if (response.status == 200) {
                            //             $('.review').addClass('active')
                            //             $('#status').val(response.proses_st)
                            //         }
                            //     })
                            // }
                        })
                    } else if (status == 'PROSES_VAC') {
                        $('.approval-user').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Approval Logistik ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-approval-logistik").submit();
                                // $('.ttd-kci').removeClass('active')
                                // var file_perform = $("#file-approval")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-approval").val();
                                // var formData = new FormData();
                                // formData.append('file_approval_logistik', file_perform[0])
                                // formData.append('tanggal_submit_logistik', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('.approval-user').addClass('active')
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_ALG') {
                        $('.ttd-vendor').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Approval User ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                // $('.ttd-kci').removeClass('active')
                                e.preventDefault()
                                $("#form-approval-user").submit();
                                // var file_perform = $("#file-approval-user")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-user").val();
                                // var formData = new FormData();
                                // formData.append('file_approval_user', file_perform[0])
                                // formData.append('tanggal_submit_user', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('.ttd-vendor').addClass('active')
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_APU') {
                        $('.ttd-kci').removeClass('active')
                        Swal.fire({
                            title: 'Are you sure save Tanda Tangan Vendor ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                // $('.ttd-kci').removeClass('active')
                                e.preventDefault()
                                $("#form-ttd-vendor").submit()
                                // var file_perform = $("#file-vendor")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-vendor").val();
                                // var formData = new FormData();
                                // formData.append('file_vendor', file_perform[0])
                                // formData.append('tanggal_submit_vendor', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('.ttd-kci').addClass('active')
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_KAC') {
                        Swal.fire({
                            title: 'Are you sure save Tanda Tangan KCI ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-ttd-kci").submit()
                                // var file_perform = $("#file-kci")[0].files;
                                // var tanggal_submit = $("#tanggal-submit-kci").val();
                                // var formData = new FormData();
                                // formData.append('file_kci', file_perform[0])
                                // formData.append('tanggal_submit_kci', tanggal_submit)
                                // formData.append('_token', '{{ csrf_token() }}');
                                // formData.append('status', status);
                                // formData.append('id', id);
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     processData: false,
                                //     contentType: false,
                                //     data: formData
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    } else if (status == 'PROSES_CR') {
                        Swal.fire({
                            title: 'Are you sure save MPPL ?',
                            // text: 'Your procurement are send to contract!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                e.preventDefault()
                                $("#form-mppl").submit()
                                // var data = $('#form-mppl').serialize()
                                // $.ajax({
                                //     url: '{{ route("save.kontrak") }}',
                                //     method: 'POST',
                                //     dataType: 'json',
                                //     // processData: false,
                                //     // contentType: false,
                                //     data: data
                                // }).done(function(response) {
                                //     if (response.status == 200) {
                                //         $('#status').val(response.proses_st)
                                //     }
                                // })
                            }
                        })
                    }
                    // console.log($(this).closest('#smartwizard-arrows').find('.performance').addClass('test'));
                })
                $('body').on('click', '.add-review', function() {
                    var body = '<div style="padding-top: 10px; border-top: 1px solid red;"><div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="file" name="file_review[]" class="form-control" id="file-review">'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="date" name="tanggal_submit_review[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
                    body += '</div>'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<textarea class="form-control" name="catatan_review[]" placeholder="please insert catatan"></textarea>'
                    body += '</div>'
                    body += '</div>'
                    body += '</div></div>'
                    $('.add-form-review').append(body)
                })

                $('body').on('click', '.add-approval-logistik', function() {
                    var body = '<div style="padding-top: 10px; border-top: 1px solid red;"><div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="file" name="file_approval_logistik[]" class="form-control" id="file-review">'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="date" name="tanggal_submit_logistik[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
                    body += '</div>'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<textarea class="form-control" name="catatan_logistik[]" placeholder="please insert catatan"></textarea>'
                    body += '</div>'
                    body += '</div>'
                    body += '</div></div>'
                    $('.form-layout-approval-logistik').append(body)
                })

                $('body').on('click', '.add-approval-user', function() {
                    var body = '<div style="padding-top: 10px; border-top: 1px solid red;"><div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="file" name="file_approval_user[]" class="form-control" id="file-review">'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="date" name="tanggal_submit_user[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
                    body += '</div>'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<textarea class="form-control" name="catatan_user[]" placeholder="please insert catatan"></textarea>'
                    body += '</div>'
                    body += '</div>'
                    body += '</div></div>'
                    $('.form-layout-approval-user').append(body)
                })

                $('body').on('click', '.add-ttd-vendor', function() {
                    var body = '<div style="padding-top: 10px; border-top: 1px solid red;"><div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="file" name="file_vendor[]" class="form-control" id="file-review">'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<input type="date" name="tanggal_submit_vendor[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
                    body += '</div>'
                    body += '</div>'
                    body += '</div>'
                    body += '<div class="row">'
                    body += '<div class="col-md-4">'
                    body += '<div class="form-group">'
                    body += '<textarea class="form-control" name="catatan_vendor[]" placeholder="please insert catatan"></textarea>'
                    body += '</div>'
                    body += '</div>'
                    body += '</div></div>'
                    $('.form-layout-ttd-vendor').append(body)
                })
            })
        </script>
        @endpush