@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">Task Approval SP 3</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>No. SP3</th>
                                    <th style='width:30%'>Procurement Title</th>
                                    <th style='width:10%'>RKAP Value</th>
                                    <th style='width:5%'>Department</th>
                                    <th style='width:10%'>Tax Value</th>
                                    <th style='width:10%'>Realization</th>
                                    <th style='width:10%'>Status</th>
                                    <th style='width:10%'></th>
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
<div class="modal fade" id="modal-evaluasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Evaluasi SP 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='{{ route("evaluasi.store") }}' id="form-evaluasi" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="sp3_id" id="sp3_id" value="{{ csrf_token() }}" />
                    <div class="row-evaluasi">
                        @for($i = 1; $i < 10; $i++)
                        <label class="font-weight-bold">{{ $i }}</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Item</label>
                                    <input type="text" name="item_cd[]" class="form-control" placeholder="please insert item">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Uraian/Dokuemen</label>
                                    <input type="text" name="item_value[]" class="form-control" placeholder="please insert uraian">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <textarea name="keterangan[]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-12 d-flex justify-content-start">
                            <button class="btn btn-success btn-rounded add-form btn-sm" type="button">Add Form</button>
                        </div> -->
                        <div class="col-md-12 d-flex justify-content-end">
                            <input class="btn btn-primary btn-rounded save ml-2" type="submit" name="save" value="Submit">
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
            ajax: {
                url: "{{ route('data.sp3') }}",
                data: {
                    'timeline_type': 'approval'
                }
            },
            order: [
                [7, 'desc']
            ],
            columns: [{
                    data: 'no_sp3'
                },
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'nilai_pr'
                },
                {
                    data: 'department_cd'
                },
                {
                    data: 'nilai_tax'
                },
                {
                    data: 'realisasi'
                },
                {
                    data: 'proses_st'
                },
                {
                    data: 'created_at',
                    visible: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve SP3?',
                text: "Your SP3 will send to PBJ !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    var sp_3_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("sp3.approve") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'sp3_id': sp_3_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'congratulations!',
                                'Your SP3 send to PBJ.',
                                'success'
                            )
                            timeline.ajax.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your SP3 failed updated Draft RKS.',
                                'success'
                            )
                        }
                    })

                }
            })
        })

        $('body').on('click', '.reject', function() {
            Swal.fire({
                title: 'Are you sure reject sp3?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reject'
            }).then((result) => {
                if (result.isConfirmed) {
                    var sp_3_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("sp3.reject") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'sp3_id': sp_3_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Rejected!',
                                'Your timeline has rejected.',
                                'success'
                            )
                            timeline.ajax.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed reject.',
                                'success'
                            )
                        }
                    })

                }
            })
        })
        
        $('body').on('click', '.evaluasi', function() {
            var data = $(this).attr('data-bind');
            $("#sp3_id").val(data)
            $("#modal-evaluasi").modal('show')
        })

        $('body').on('click', '.add-form', function() {
            var body = '<div class="row border-top">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Item</label>'
            body += '<input type="text" name="item_cd[]" class="form-control" placeholder="please insert item">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-10">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Uraian/Dokuemen</label>'
            body += '<input type="text" name="item_value[]" class="form-control" placeholder="please insert uraian">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-12">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Keterangan</label>'
            body += '<textarea name="keterangan[]" class="form-control"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $(".row-evaluasi").append(body)
        })
    })
</script>
@endpush