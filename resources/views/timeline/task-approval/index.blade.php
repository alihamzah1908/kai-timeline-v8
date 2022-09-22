@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Task Approval</h5>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table table-striped mb-0 nowrap"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>No. Pengadaan</th>
                                    <th style='width:33'>Procurement Title</th>
                                    <th style='width:10%'>RKAP Value</th>
                                    <th style='width:5%'>Department</th>
                                    <th style='width:10%'>PBJ</th>
                                    <th style='width:10%'>Cost</th>
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
                url: "{{ route('data.timeline') }}",
                data: {
                    'timeline_type': 'approval',
                    'status': "{{ request()->status }}"
                }
            },
            order: [[7, 'desc']],
            columns: [
                {
                    data: 'no_pengadaan'
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
                    data: 'pbj'
                },
                {
                    data: 'beban_biaya'
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
                title: 'Are you sure approve timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.approve") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Approved!',
                                'Your timeline has approved.',
                                'success'
                            )
                            timeline.ajax.reload();
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed approved.',
                                'success'
                            )
                        }
                    })

                }
            })
        })

        $('body').on('click', '.reject', function() {
            Swal.fire({
                title: 'Are you sure reject timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reject'
            }).then((result) => {
                if (result.isConfirmed) {
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.reject") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Rejected!',
                                'Your timeline has rejected.',
                                'success'
                            )
                            timeline.ajax.reload();
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed rejected.',
                                'success'
                            )
                        }
                    })

                }
            })
        })
    })
</script>
@endpush