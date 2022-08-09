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
                                    <th>Vendor Code</th>
                                    <th>Name Of Vendor</th>
                                    <th>Street</th>
                                    <th>Country</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>Order Currency</th>
                                    <th>Action</th>
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
            ajax: "{{ route('data.vendor') }}",
            columns: [{
                    data: 'vendor_code'
                },
                {
                    data: 'vendor_name'
                },
                {
                    data: 'street'
                },
                {
                    data: 'country'
                },
                {
                    data: 'postal_code'
                },
                {
                    data: 'city'
                },
                {
                    data: 'order_currency'
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