@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-left mt-1">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    @can('timeline.approval-list')
                    <li class="breadcrumb-item"><a href="{{ route('task.approval') }}">List Approval Timeline</a></li>
                    @else 
                    <li class="breadcrumb-item"><a href="{{ route('list.timeline') }}">List Timeline</a></li>
                    @endcan
                    
                    <li class="breadcrumb-item"><a href="#">Detail {{ $data->judul_pengadaan }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body p-0">
                    <h6 class="card-title border-bottom p-3 mb-0 ">Detail {{ $data->judul_pengadaan }}</h6>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Information</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="home">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <dl class="row mb-2 mt-3">
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No. Timeline
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->no_pengadaan }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Procurement Title</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->judul_pengadaan }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">RKAP Value </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ number_format($data->nilai_pr, 2) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Department
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->department_cd }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">PBJ</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->pbj }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Cost </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->beban_biaya }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Status </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-bold">
                                                @if($data->proses_st == 'PROSES_AT')
                                                <span class="text-success">Approved Timeline</span>
                                                @elseif($data->proses_st == 'PROSES_ST')
                                                <span class="text-warning">Submitted Timeline</span>
                                                @else
                                                <span class="text-danger">Rejected Timeline</span>
                                                @endif
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <dl class="row mb-2 mt-3">
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Directorate
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->directorate_cd }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Division</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->division_cd }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Source of funds : </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->sumber_dana}}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tax type
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ ($data->type_tax == '1' ? 'Pajak Tidak Dipungut' : ($data->type_tax == '2' ? ' Pajak Dipungut' : 'Pajak Dipungut Biaya Sebagian'))}}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tax Value</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->beban_biaya }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Start Date Procurement : </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ date('d M Y', strtotime($data->start_date_pengadaan)) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">End Date Procurement  : </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ date('d M Y', strtotime($data->end_date_pengadaan)) }}</dd>
                                        </dl>
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