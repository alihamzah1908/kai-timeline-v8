@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Contract</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table m-0 nowrap">
                            <thead>
                                <tr>
                                    <th>No. SP3</th>
                                    <th>Procurement Title</th>
                                    <th>Contract Value</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th>Action</th>
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
            ajax: "{{ route('data.contract') }}",
            order: [
                [5, 'desc']
            ],
            columns: [{
                    data: 'sp3_no'
                },
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'harga_negosiasi'
                },
                {
                    data: 'department_cd'
                },
                {
                    data: 'proses_st'
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