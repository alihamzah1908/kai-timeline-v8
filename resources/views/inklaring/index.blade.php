@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">List Inklaring</h4>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm btn-rounded import"><i class="uil uil-upload"></i> Import Excel</button>
                        </div>
                    </div>
                    <table id="datatable" class="table m-0">
                        <thead>
                            <tr>
                                <th>Judul Pengadaan</th>
                                <th>Vendor Name</th>
                                <th>Tahun Anggaran RKAP</th>
                                <th>Kategori Import</th>
                                <th>Jenis Kontrak</th>
                                <th>Nomor Kontrak</th>
                                <th>Status Monitoring</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Import Warehouse Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='{{ route("import.inklaring") }}' id="form-timeline" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Import File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-warning btn-sm btn-rounded" type="submit"><i class="uil uil-save"></i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
            ajax: {
                url: "{{ route('data.inklaring') }}",
            },
            columns: [{
                    data: 'judul_pengadaan'
                },
                {
                    data: 'vendor_name'
                },
                {
                    data: 'thn_aggrn_rkap'
                },
                {
                    data: 'kategori_import'
                },
                {
                    data: 'jenis_kontrak'
                },
                {
                    data: 'no_kontrak'
                },
                {
                    data: 'status_monitoring'
                },
            ]
        });

        //modal popup inklaring
        $('body').on('click', '.import', function() {
            $("#modal-import").modal('show')
        })
    })
</script>
@endpush