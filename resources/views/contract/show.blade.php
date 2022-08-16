@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-left mt-1">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.contract') }}">List Contract</a></li>
                    <li class="breadcrumb-item"><a href="#">Detail {{ $data->judul_pengadaan }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
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
                            <label class="font-weight-bold">Nomor SP3</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="no-pr"></span> {{ $data->sp3_no }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal SP3</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="no-mi"></span>{{ date('d M Y', strtotime($data->tanggal_sp3)) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Judul Pengadaan</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="judul-pengadaan"></span>{{ $data->judul_pengadaan }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Vendor Name</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="vendor-name"></span>{{ $data->vendor }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Metode</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="nilai-pr"></span>{{ $data->metode }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Nomor NPD</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="tanggal-pr"></span>{{ $data->npd_no }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Tanggal NPD</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="no-rab"></span>{{ date('d M Y', strtotime($data->tanggal_npd)) }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Nilai NPD</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="tanggal-rab"></span>{{ number_format($data->nilai_npd, 2) }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Nilai Kontrak</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="no-kak"></span>{{ number_format($data->nilai_contract, 2) }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Nomor Kontrak</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="tanggal-kak"></span>{{ $data->contract_no }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Status Kontrak</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-normal">: <span class="tanggal-justifikasi"></span>{{ $data->contract_status }}</label>
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
                                <input type="hidden" value="{{ $data->contract_status }}" id="status">
                                <input type="hidden" value="{{ $data->report_pbj_contract_id }}" id="id">
                                <ul class="nav nav-tabs step-anchor">
                                    <li class="nav-item draft-contract status-drk"><a href="#sw-arrows-step-1" class="nav-link">Draft Kontrak<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item performance status-pfm"><a href="#sw-arrows-step-2" class="nav-link">Performance Bond (Upload Jaminan Pelaksanaan)<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item verifikasi"><a href="#sw-arrows-step-3" class="nav-link">Verifikasi Jaminan Pelaksanaan<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item review"><a href="#sw-arrows-step-4" class="nav-link">Review Legal<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item approval-logistik"><a href="#sw-arrows-step-5" class="nav-link">Approval Logistik<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item approval-user"><a href="#sw-arrows-step-6" class="nav-link">Approval User<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item ttd-vendor"><a href="#sw-arrows-step-7" class="nav-link">Tanda Tangan Vendor<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item ttd-kci"><a href="#sw-arrows-step-8" class="nav-link">Tanda Tangan KCI<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item mppl"><a href="#sw-arrows-step-9" class="nav-link">MPPL<small class="d-block">Step description</small></a></li>
                                    <li class="nav-item done"><a href="#sw-arrows-step-10" class="nav-link">Approval<small class="d-block">Step description</small></a></li>
                                </ul>

                                <div class="p-3 sw-container tab-content" style="min-height: 198.133px;">
                                    <div id="sw-arrows-step-1" class="tab-pane step-content" style="display: block;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-contract">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                                            @if($trx_jaminan->count() > 0)
                                                            @foreach($trx_jaminan as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Jaminan Pelaksanaan:</label>
                                                                        <input type="file" name="file_performance" class="form-control" id="file-performance" disabled>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" style="margin-top: 2rem;">
                                                                    <div class="form-group">
                                                                        <a href="{{ asset('file/contract/' . $val->file_performance_contract) }}">
                                                                            <i class="uil uil-file"></i> {{ $val->file_performance_contract }}
                                                                        </a>
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
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Jaminan:</label>
                                                                        <textarea class="form-control" name="catatan_performance" placeholder="please insert catatan"></textarea>
                                                                    </div>
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
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_performace" class="form-control datepicker" id="tanggal-submit-performance" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Jaminan:</label>
                                                                        <textarea class="form-control" name="catatan_performance" placeholder="please insert catatan"></textarea>
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
                                    <div id="sw-arrows-step-3" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                            </div>
                                                            <div class="row">
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
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Review:</label>
                                                                        <input type="file" name="file_review" class="form-control" id="file-review">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_review" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Review:</label>
                                                                        <textarea class="form-control" name="catatan_review" placeholder="please insert catatan"></textarea>
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
                                    <div id="sw-arrows-step-5" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                            </div>
                                                            <div class="row">
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
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Approval Logistik:</label>
                                                                        <input type="file" name="file_approval_logistik" class="form-control" id="file-approval">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_logistik" class="form-control datepicker" id="tanggal-submit-approval" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval Logistik:</label>
                                                                        <textarea class="form-control" name="catatan_logistik"></textarea>
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
                                    <div id="sw-arrows-step-6" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                                            @if($trx_approval_user->count() > 0)
                                                            @foreach($trx_approval_user as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Approval Logistik:</label>
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
                                                            </div>
                                                            <div class="row">
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
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Approval User:</label>
                                                                        <input type="file" name="file_approval_user" class="form-control" id="file-approval-user">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_user" class="form-control datepicker" id="tanggal-submit-user" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan Approval User:</label>
                                                                        <textarea class="form-control" name="catatan_logistik"></textarea>
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
                                    <div id="sw-arrows-step-7" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                            </div>
                                                            <div class="row">
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
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">File Tanda Tangan Vedor:</label>
                                                                        <input type="file" name="file_vendor" class="form-control" id="file-vendor">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Submit:</label>
                                                                        <input type="text" name="tanggal_submit_vendor" class="form-control datepicker" id="tanggal-submit-vendor" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan TTD Vendor:</label>
                                                                        <textarea class="form-control" name="catatan_vendor"></textarea>
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
                                    <div id="sw-arrows-step-8" class="tab-pane step-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <form action="#" id="form-drarf-performance">
                                                            <input type="hidden" name="sp3_id" id="sp3_id">
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
                                                        <form action="#" id="form-mppl">
                                                            <input type="hidden" name="id" value="{{ $data->report_pbj_contract_id }}">
                                                            <input type="hidden" name="sp3_id" id="sp3_id" value="{{ $data->sp3_id }}">
                                                            <input type="hidden" name="status" value="{{ $data->contract_status }}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            @if($trx_mppl->count() > 0)
                                                            @foreach($trx_mppl as $val)
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date:</label>
                                                                        <!-- <input type="file" name="file_kci" class="form-control" id="file-kci"> -->
                                                                        <input type="text" name="star_date_mppl" class="form-control datepicker" id="start-date-mppl" placeholder="please insert date submit" value="{{ $val->start_date_mppl }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date:</label>
                                                                        <input type="text" name="end_date_mppl" class="form-control datepicker" id="end-date-mppl" placeholder="please insert date submit" value="{{ $val->end_date_mppl }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Off Days:</label>
                                                                        <input type="text" name="off_days" class="form-control" id="off-days" placeholder="please insert off days" value="{{ $val->off_days }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
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
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Penanggung Jawab:</label>
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
                                                                        <input type="text" name="star_date_mppl" class="form-control datepicker" id="start-date-mppl" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date:</label>
                                                                        <input type="text" name="end_date_mppl" class="form-control datepicker" id="end-date-mppl" placeholder="please insert date submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Off Days:</label>
                                                                        <input type="text" name="off_days" class="form-control" id="off-days" placeholder="please insert off days">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
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
                                                                        <label for="exampleInputEmail1" class="font-weight-bold">Penanggung Jawab:</label>
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
                if (status == 'PROSES_RDC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                } else if (status == 'PROSES_UJP') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                } else if (status == 'PROSES_VJP') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                } else if (status == 'PROSES_RDC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                } else if (status == 'PROSES_VAC') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                } else if (status == 'PROSES_ALG') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                } else if (status == 'PROSES_APU') {
                    $('.draft-contract').addClass('done')
                    $('.performance').addClass('done')
                    $('.verifikasi').addClass('done')
                    $('.review').addClass('done')
                    $('.approval-logistik').addClass('done')
                    $('.approval-user').addClass('done')
                    $('.ttd-vendor').addClass('done')
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
                $('body').on('click', '.sw-btn-next', function() {
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
                                var file_draft = $("#file-draft-contract")[0].files;
                                var tanggal_submit = $("#tanggal-submit-contract").val();
                                var formData = new FormData();
                                formData.append('file_draft', file_draft[0])
                                formData.append('tanggal_submit_draft', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.performance').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                var file_perform = $("#file-performance")[0].files;
                                var tanggal_submit = $("#tanggal-submit-performance").val();
                                var formData = new FormData();
                                formData.append('file_performance', file_perform[0])
                                formData.append('tanggal_submit_performance', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData,
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.verifikasi').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                var file_perform = $("#file-verifikasi")[0].files;
                                var tanggal_submit = $("#tanggal-submit-verifikasi").val();
                                var formData = new FormData();
                                formData.append('file_verifikasi', file_perform[0])
                                formData.append('tanggal_submit_verifikasi', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.review').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                            if (result.value) {
                                var file_perform = $("#file-review")[0].files;
                                var tanggal_submit = $("#tanggal-submit-review").val();
                                var formData = new FormData();
                                formData.append('file_review', file_perform[0])
                                formData.append('tanggal_submit_review', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.review').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
                            }
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
                                $('.ttd-kci').removeClass('active')
                                var file_perform = $("#file-approval")[0].files;
                                var tanggal_submit = $("#tanggal-submit-approval").val();
                                var formData = new FormData();
                                formData.append('file_approval_logistik', file_perform[0])
                                formData.append('tanggal_submit_logistik', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.approval-user').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                $('.ttd-kci').removeClass('active')
                                var file_perform = $("#file-approval-user")[0].files;
                                var tanggal_submit = $("#tanggal-submit-user").val();
                                var formData = new FormData();
                                formData.append('file_approval_user', file_perform[0])
                                formData.append('tanggal_submit_user', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.ttd-vendor').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                $('.ttd-kci').removeClass('active')
                                var file_perform = $("#file-vendor")[0].files;
                                var tanggal_submit = $("#tanggal-submit-vendor").val();
                                var formData = new FormData();
                                formData.append('file_vendor', file_perform[0])
                                formData.append('tanggal_submit_vendor', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('.ttd-kci').addClass('active')
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                var file_perform = $("#file-kci")[0].files;
                                var tanggal_submit = $("#tanggal-submit-kci").val();
                                var formData = new FormData();
                                formData.append('file_kci', file_perform[0])
                                formData.append('tanggal_submit_kci', tanggal_submit)
                                formData.append('_token', '{{ csrf_token() }}');
                                formData.append('status', status);
                                formData.append('id', id);
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    data: formData
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('#status').val(response.proses_st)
                                    }
                                })
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
                                var data = $('#form-mppl').serialize()
                                $.ajax({
                                    url: '{{ route("save.kontrak") }}',
                                    method: 'POST',
                                    dataType: 'json',
                                    // processData: false,
                                    // contentType: false,
                                    data: data
                                }).done(function(response) {
                                    if (response.status == 200) {
                                        $('#status').val(response.proses_st)
                                    }
                                })
                            }
                        })
                    }
                    // console.log($(this).closest('#smartwizard-arrows').find('.performance').addClass('test'));
                })
            })
        </script>
        @endpush