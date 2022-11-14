@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Vendor</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="add-vendor d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Add Vendor
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table m-0 nowrap">
                            <thead>
                                <tr>
                                    <th></th>
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
<div class="modal fade" id="modal-timeline" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('vendor.store') }}" id="form-vendor" method="post">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                                <input type="text" name="vendor_name" class="form-control vendor_name" placeholder="Please insert vendor name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Code</label>
                                <input type="text" name="vendor_code" class="form-control vendor_code" placeholder="Please insert vendor code">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Country</label>
                                <select name="country" class="form-control">
                                    <option value="">Select</option>
                                    <option value="ID">ID</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Postal Code</label>
                                <input type="text" name="postal_code" class="form-control vendor_code" placeholder="Please insert postal code">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">City</label>
                                <input type="text" name="city" class="form-control vendor_name" placeholder="Please insert city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Account Group</label>
                                <input type="text" name="account_group" class="form-control account_group" placeholder="Please insert account group">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Search Term</label>
                                <input type="text" name="search_term" class="form-control search_term" placeholder="Please insert search term">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Purchase Org</label>
                                <input type="text" name="purchase_org" class="form-control purchase_org" placeholder="Please insert Purchase">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Term Of Payment</label>
                                <input type="text" name="term_of_payment" class="form-control" placeholder="Please insert term">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Currency</label>
                                <select name="currency" class="form-control">
                                    <option value="">Select</option>
                                    <option value="IDR">IDR</option>
                                    <option value="USD">USD</option>
                                    <option value="JPY">JPY</option>
                                    <option value="EUR">EUR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Address </label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="save" id="save" value="">
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
            order: [
                [0, 'desc']
            ],
            ajax: "{{ route('data.vendor') }}",
            columns: [{
                    data: 'vendor_id',
                    visible: false
                }, {
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

        $('body').on('click', '.add-vendor', function() {
            $('#modal-timeline').modal('show')
        })
    })
</script>
@endpush