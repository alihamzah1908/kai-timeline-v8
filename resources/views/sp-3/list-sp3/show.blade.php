@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-left mt-1">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.sp3') }}">List SP3</a></li>
                    <li class="breadcrumb-item"><a href="#">Detail SP3</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body p-0">
                    <h6 class="card-title border-bottom p-3 mb-0 ">Detail SP3 {{ $data->judul_pengadaan }}</h6>

                </div>
            </div>
        </div>
    </div>
    <!-- details-->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-sm-left">
                        <dl class="row mb-2 mt-1">
                            <dt class="col-sm-3 font-weight-bold">No. SP3 :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->no_pengadaan }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Procurement Title :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->judul_pengadaan }}</dd>

                            <dt class="col-sm-3 font-weight-bold">RKAP Value :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ number_format($data->nilai_pr, 2) }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Vendor Name :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->nama_vendor }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Department :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->department_cd }}</dd>
                            <dt class="col-sm-3 font-weight-bold">Directorate :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->directorate_cd }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Division :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->division_cd }}</dd>

                            <dt class="col-sm-3 font-weight-bold">No. PR :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->pbj }}</dd>

                            <dt class="col-sm-3 font-weight-bold">PR Date :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ date('d/m/Y', strtotime($data->tanggal_pr)) }}</dd>
                        </dl>
                    </div>
                    <div class="float-sm-right">
                        <dl class="row mb-2 mt-1">
                            <dt class="col-sm-3 font-weight-bold">Tax Type :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->type_tax}}</dd>

                            <dt class="col-sm-3 font-weight-bold">Tax Value :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->nilai_tax }}</dd>

                            <dt class="col-sm-3 font-weight-bold">No. MI :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->no_mi }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Justifikasi Date :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ date('d/m/Y', strtotime($data->tanggal_justifikasi)) }}</dd>

                            <dt class="col-sm-3 font-weight-bold">No. RAB :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->no_rab }}</dd>

                            <dt class="col-sm-3 font-weight-bold">RAB Date :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ date('d/m/Y', strtotime($data->tanggal_rab)) }}</dd>

                            <dt class="col-sm-3 font-weight-bold">No. KAK :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ $data->no_kak }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Tanggal KAK :</dt>
                            <dd class="col-sm-9 font-weight-normal">{{ date('d/m/Y', strtotime($data->tanggal_kak)) }}</dd>

                            <dt class="col-sm-3 font-weight-bold">Status :</dt>
                            <dd class="col-sm-9 font-weight-normal">
                                @if($data->proses_st == 'PROSES_SSP3')
                                <span class="text-success">Submited SP3</span>
                                @elseif($data->proses_st == 'PROSES_DRKS')
                                <span class="text-warning">Drafting RKS</span>
                                @elseif($data->proses_st == 'PROSES_RRKS')
                                <span class="text-warning">Reviewing RKS</span>
                                @endif
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container-fluid -->

</div> <!-- content -->
@endsection