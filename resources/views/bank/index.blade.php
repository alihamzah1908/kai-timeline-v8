@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Banks</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap"> -->   
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>Nama Bank</th>
                                    <th style='width:35%'>Alamat Bank</th>
                                    <th style='width:15%'>Telepon</th>
                                    <th style='width:10%'>Fax</th>
                                    <th style='width:10%'>Website</th>
                                    <th style='width:10%'>Action</th>
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
<div class="modal fade" id="modal-bank" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Form Master Bank</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='{{ route("bank.update") }}' id="form-bank" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" id="id" name="id" value="" />
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Bank Name</label><br />
                            <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Please insert bank name">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Bank Address</label><br />
                            <input type="text" id="bank_address" name="bank_address" class="form-control" placeholder="Please insert bank address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Telepon</label><br />
                            <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Please insert telephone">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Fax</label><br />
                            <input type="text" id="fax" name="fax" class="form-control" placeholder="Please insert fax">
                        </div>
                    </div>
                    <div class="row mb-3">   
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Website</label><br />
                            <input type="text" id="website" name="website" class="form-control" placeholder="Please insert website">
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm btn-rounded">Update</button>
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
            ajax: "{{ route('data.bank') }}",
            order: [
                [0, 'asc']
            ],
            columns: [{
                    data: 'bank_name'
                },
                {
                    data: 'bank_address'
                },
                {
                    data: 'telp'
                },
                {
                    data: 'fax'
                },
                {
                    data: 'website'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('body').on('click','.edit', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ route("get.bank") }}',
                dataType: 'json',
                method: 'get',
                data : {
                    "id" : id
                }
            }).done(function(response){
                $("#id").val(response.id)
                $("#bank_name").val(response.bank_name)
                $("#bank_address").val(response.bank_address)
                $("#telepon").val(response.telp)
                $("#fax").val(response.fax)
                $("#website").val(response.website)
            })
            $('#modal-bank').modal('show')
        })
    })
</script>
@endpush