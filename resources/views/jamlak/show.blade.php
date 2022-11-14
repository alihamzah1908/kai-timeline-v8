@extends('layouts.master')
@section('content')
<style>
    label {
        font-size: 10px;
    }
</style>
{{-- {{ dd($data) }} --}}
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.contract') }}"><b>Back to list</b></a></li>
                    <li class="breadcrumb-item"><a href="#"><b>Detail {{ $data->no_bank_garansi }}</b></a></li>
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
                            <h5 class="header-title mt-0 mb-1">Detail Jamlak</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Nomor Jamlak</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-normal">{{ $data->no_bank_garansi }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Judul Pengadaan</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-8">
                            <dt class="font-weight-normal"> {{ $data->judul_pengadaan }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Masa Berlaku</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-normal">{{ date('d M Y', strtotime($data->start_berlaku)) }} sampai <b>{{ date('d M Y', strtotime($data->end_berlaku)) }}</b></dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">File Jaminan Kontrak</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ asset('file/contract/' . $data->file_performance_contract) }}" target="_blank">
                                <i class="uil uil-file"></i> {{ $data->file_performance_contract }}
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Status</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal"><badges class="badge badge-danger">{{ $data->status_jamlak }}</badges></dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Catatan</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-3">
                            <dt class="font-weight-normal"> {{ $data->catatan }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <!-- <input class="btn btn-sm btn-warning btn-rounded save" type="submit" name="save" value="Save As Draft"> -->
                            <input class="btn btn-sm btn-primary btn-rounded edit ml-2" type="button" name="save" value="Edit" data-start="{{ $data->start_berlaku}}" data-end="{{ $data->end_berlaku }}" data-id="{{ $data->performance_contract_id }}" data-status="{{ $data->status_jamlak }}" data-catatan="{{ $data->catatan }}">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
</div>
<div class="modal fade" id="modal-jamlak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Ubah Tanggal Berlaku Jamlak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ubah.tanggal-jamlak') }}" id="form-ubah-tanggal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="performance_contract_id" id="performance_contract_id" value="{{ $data->performance_contract_id }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (Start Date)</label>
                                <input type="text" name="start_date" class="form-control start_date datepicker" placeholder="Please insert Masa Berlaku (Start Date)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Masa Berlaku (Start End)</label>
                                <input type="text" name="end_date" class="form-control end_date datepicker" placeholder="Please insert Masa Berlaku (End Date)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Status</label>
                                <select name="status_jamlak" class="form-control status_jamlak">
                                    <option value="">Pilih</option>
                                    <option value="Active">Active</option>
                                    <option value="Bermasalah">Bermasalah</option>
                                    <option value="Adendum">Adendum</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Akan Expired">Akan Expired</option>
                                    <option value="Sudah Diterima Vendor">Sudah Diterima Vendor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Catatan</label>
                                <textarea class="form-control catatan" name="catatan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <!-- <button class="btn btn-sm btn-warning btn-rounded save" data-bind="draft" type="button">Save as Draft</button> -->
                            <button class="btn btn-sm btn-primary btn-rounded ml-2 save" data-bind="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('click', '.edit', function() {
            $('#modal-jamlak').modal('show')
            var start = $(this).attr('data-start')
            var end = $(this).attr('data-end')
            var id = $(this).attr('data-id')
            var status = $(this).attr('data-status')
            var catatan = $(this).attr('data-catatan')
            $('.performance_contract_id').val(id)
            $('.start_date').val(start)
            $('.end_date').val(end)
            $('.status_jamlak').val(status)
            $('.catatan').val(catatan)
        })
    })
</script>
@endpush