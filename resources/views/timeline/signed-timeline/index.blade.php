@extends('layouts.master')
@section('content')
<style>
    element {
        height: 100px;
    }
</style>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Timeline Signed</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="create-timeline d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Upload Timeline Signed
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table nowrap"> -->
                        <table id="datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style='width:20%;'>Upload Signed Title</th>
                                    <th style='width:10%'>Upload By</th>
                                    <th style='width:20%'>Signed By</th>
                                    <th style='width:10%'>Upload Date</th>
                                    <th style='width:20%'>File</th>
                                    <th style='width:20%'>Notes</th>
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
<div class="modal fade" id="modal-timeline" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Upload Timeline</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-timeline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Judul Upload Signed</label>
                                <!-- <div id="summernote-editor">
                                    <p>Uraian Details</p>
                                </div> end summernote-editor -->
                                <textarea name="judul_pengadaan" class="form-control" placeholder="Please insert judul pengadaan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Signed By</label>
                                <select class="form-control" name="beban_biaya">
                                    <option value="CUG">CUG</option>
                                    <option value="PLT_CUG">PLT. CUG</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Keterangan</label>
                                <textarea class="form-control" placeholder="Please insert keterangan" name="keterangan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="header-title" class="font-weight-bold">Upload Timeline Signed</h5>
                            <div class="fallback">
                                <input name="file[]" type="file" id="file" multiple />
                            </div>
                            <div class="dz-message needsclick">
                                <i class="h1 text-muted  uil-cloud-upload"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="save" id="save" value="">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-sm btn-primary btn-rounded ml-2 save" data-bind="submit" type="button">Submit</button>
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
            ajax: "{{ route('data.timeline') }}",
            columns: [{
                    data: 'judul_pengadaan'
                },
                {
                    data: 'upload_by'
                },
                {
                    data: 'signed_by'
                },
                {
                    data: 'upload_date'
                },
                {
                    data: 'jenis_kontrak'
                },
                {
                    data: 'start_date_pengadaan'
                },
                // {
                //     data: 'action',
                //     name: 'action',
                //     orderable: false,
                //     searchable: false
                // },
            ]
        });
        $('body').on('click', '.create-timeline', function() {
            $('#modal-timeline').modal('show')
        })
    })
</script>
@endpush