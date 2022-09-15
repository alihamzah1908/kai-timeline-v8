@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">List Card</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm btn-rounded import"><i class="uil uil-upload"></i> Import Excel</button>
                        </div>
                    </div>
                    <table id="datatable" class="table m-0 nowrap">
                        <thead>
                            <tr>
                                <th>PInt</th>
                                <th>SLoc</th>
                                <th>Material</th>
                                <th>Material Description</th>
                                <th>BUn</th>
                                <th>Unrestricted</th>
                                <th>Value Unrestricted</th>
                                <th>MTyp</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
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
                <form action='{{ route("import.warehouse") }}' id="form-timeline" enctype="multipart/form-data" method="post">
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
                url: "{{ route('data.card') }}",
            },
            columns: [{
                    data: 'pint'
                },
                {
                    data: 'sloc'
                },
                {
                    data: 'material'
                },
                {
                    data: 'material_description'
                },
                {
                    data: 'bun'
                },
                {
                    data: 'unrestricted'
                },
                {
                    data: 'value_unrestricted'
                },
                {
                    data: 'mtyp'
                },
            ]
        });
        $('body').on('change', '.warehouse', function() {
            window.location.href = '{{ route("warehouse.index") }}?code_loc=' + $(this).val();
        })

        $('body').on('click', '.import', function() {
            $("#modal-import").modal('show')
        })
    })
</script>
@endpush