@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Memo Internal</h4>
                        </div>
                    </div>
                    @php
                    $memo = DB::table('trx_sp3 as a')
                    ->join('trx_berita_acara as b','a.sp3_id','b.sp3_id')
                    ->where('b.nomor_memo_internal', '!=', '')
                    ->get();
                    @endphp
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:15%'>No SP3</th>
                                    <th style='width:45%'>Judul Pengadaan</th>
                                    <th style='width:10%'>Nomor Memo Internal</th>
                                    <th style='width:10%'>Tanggal Memo Internal</th>
                                    <th style='width:10%'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($memo as $val)
                                <tr>
                                    <td style='width:15%'>{{ $val->no_sp3 }}</th>
                                    <td style='width:45%'>{{ $val->judul_pengadaan }}</th>
                                    <td style='width:10%'>{{ $val->nomor_memo_internal }}</th>
                                    <td style='width:10%'>{{ $val->tanggal_memo_internal }}</th>
                                    <td style='width: 5%'>
                                        @if($val->nomor_memo_user != '' || $val->tanggal_memo_user != '')
                                        <button class="btn btn-danger btn-rounded btn-sm">Approved </button>
                                        @else 
                                        <button class="btn btn-warning btn-rounded btn-sm approve" data-bind='{{ $val->sp3_id }}'><i class="uil uil-check"></i> </button></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
<div class="modal fade" id="modal-memo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Approval Memo User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.memo-user') }}" id="form-memo" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="sp3_id" id="sp3_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Nomor Memo Internal User</label>
                                <input type="text" name="nomor_memo_user" class="form-control" placeholder="please memo internal user">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Memo Internal User</label>
                                <input type="text" name="tanggal_memo_user" class="form-control datepicker" placeholder="tanggal memo internal user">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">File Memo Internal User</label>
                                <input type="file" name="file_memo_user" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-sm btn-primary btn-rounded ml-2 save" type="submit">Submit</button>
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
        $('body').on('click','.approve', function(){
            var id = $(this).attr('data-bind')
            $("#sp3_id").val(id)
            $('#modal-memo').modal('show')
        })
    })
</script>
@endpush