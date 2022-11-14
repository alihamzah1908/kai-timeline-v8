@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Jamlak</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap"> -->   
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:15%'>No Jamlak</th>
                                    <th style='width:45%'>Judul Pengadaan</th>
                                    <th style='width:10%'>Tanggal Mulai</th>
                                    <th style='width:10%'>Tanggal Berakhir</th>
                                    <th style='width:10%'>Status</th>
                                    <th></th>
                                    <th style='width:10%'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var timeline = $('#datatable').DataTable({
            "pageLength": 25,
            language: {
                paginate: {
                    previous: "<i class='uil uil-angle-left'>",
                    next: "<i class='uil uil-angle-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route('data.jamlak') }}",
            order: [
                [5, 'desc']
            ],
            columns: [{
                    data: 'no_bank_garansi'
                },
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'start_berlaku'
                },
                {
                    data: 'end_berlaku'
                },
                {
                    data: 'status_jamlak'
                },
                {
                    data: 'created_at',
                    visible: false,
                    searchable: false,
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    })
</script>
@endpush