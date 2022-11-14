@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    @can('timeline.approval-list')
                    <li class="breadcrumb-item"><a href="{{ route('task.approval') }}"><b>Back to list</b></a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('list.timeline') }}"><b>Back to list</b></a></li>
                    @endcan

                    <li class="breadcrumb-item"><a href="#"><b>Detail {{ $data->judul_pengadaan }}</b></a></li>
                </ol>
            </nav>
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
                                            <dd class="col-sm-6 font-weight-normal">{{ "Rp. " . number_format($data->nilai_pr,2,',','.'); }}</dd>

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
                                                <badges class="badge badge-danger">Approved Timeline</badges>
                                                @elseif($data->proses_st == 'PROSES_ST')
                                                <badges class="badge badge-danger">Submitted Timeline</badges>
                                                @else
                                                <badges class="badge badge-danger">Rejected Timeline</badges>
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
                                            <!-- <dd class="col-sm-6 font-weight-normal">{{ $data->nilai_tax }}</dd> -->
                                            <dd class="col-sm-6 font-weight-normal">{{ "Rp. " . number_format($data->nilai_tax,2,',','.'); }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Start Date Procurement : </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ date('d M Y', strtotime($data->start_date_pengadaan)) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">End Date Procurement : </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ date('d M Y', strtotime($data->end_date_pengadaan)) }}</dd>
                                        </dl>
                                    </div>
                                </div>
                                @if($data->proses_st == 'PROSES_ST')
				                @can('timeline.approval-list')
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button class="btn btn-warning btn-rounded btn-sm approve" data-bind="{{ $data->timeline_id }}"><i class="uil uil-check"></i> Approve</button></a>
                                        <button class="btn btn-primary btn-rounded btn-sm reject ml-2" data-bind="{{ $data->timeline_id }}"><i class="uil uil-multiply"></i> Reject</button></a>
                                    </div>
                                </div>
                                @endcan
                                @endif
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
        // Approve Timeline
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.approve") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            window.location.href = "{{ route('task.approval') }}"
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed approved.',
                                'success'
                            )
                        }
                    })

                }
            })
        });

        // Rejected Timeline
        $('body').on('click', '.reject', function() {
            Swal.fire({
                title: 'Are you sure reject timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reject'
            }).then((result) => {
                if (result.isConfirmed) {
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.reject") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Rejected!',
                                'Your timeline has rejected.',
                                'success'
                            )
                            timeline.ajax.reload();
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed rejected.',
                                'success'
                            )
                        }
                    })

                }
            })
        })
    })
</script>
@endpush