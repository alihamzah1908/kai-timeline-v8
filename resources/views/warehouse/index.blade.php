@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">List Spare Part</h4>
                        </div>
                        <div class="col-md-3 mt-2 d-flex justify-content-end">
                            <label>Warehouse : </label>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <select name="code_loc" class="form-control warehouse" data-plugin="customselect">
                                <option value="">Pilih Warehouse</option>
                                <option value="C008" {{ request()->code_loc == 'C008' ? ' selected' : '' }}>Bogor</option>
                                <option value="C006" {{ request()->code_loc == 'C006' ? ' selected' : '' }}>Bukit Duri</option>
                                <option value="C007" {{ request()->code_loc == 'C007' ? ' selected' : '' }}>Depok</option>
                                <option value="C012" {{ request()->code_loc == 'C012' ? ' selected' : '' }}>Juanda</option>
                                <option value="C009" {{ request()->code_loc == 'C009' ? ' selected' : '' }}>Manggarai</option>
                            </select>
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
                url: "{{ route('data.warehouse') }}",
                data: {
                    code: "{{ request()->code_loc }}"
                }
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
    })
</script>
@endpush