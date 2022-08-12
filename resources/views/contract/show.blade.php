@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Contract</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">Judul Pengadaan</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="judul-pengadaan"></span>{{ $data->judul_pengadaan }}</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">Vendor Name</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="vendor-name"></span>{{ $data->vendor }}</label>
                        </div>
                    </div>
                    {{--<div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold">No PR</label>
                        </div>
                        <div class="col-md-3">
                            <label class="font-weight-bold">: <span class="no-pr"></span> {{ $data->no_pr }}</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">No MI</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="no-mi"></span>{{ $data->mi }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label class="font-weight-bold">Nilai PR</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="nilai-pr"></span>{{ number_format($data->nilai_pr, 2); }}</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">Tanggal PR</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="tanggal-pr"></span>{{ date('d/m/Y', strtotime($data->tanggal_pr)) }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label class="font-weight-bold">No RAB</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="no-rab"></span>{{ $data->no_rab }}</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">Tanggal RAB</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="tanggal-rab"></span>{{ date('d/m/Y', strtotime($data->tanggal_rab)) }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label class="font-weight-bold">No KAK</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="no-kak"></span>{{ $data->no_kak }}</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">Tanggal KAK</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="tanggal-kak"></span>{{ date('d/m/Y', strtotime($data->tanggal_kak)) }}</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">Tanggal Justifikasi</label>
                </div>
                <div class="col-md-3">
                    <label class="font-weight-bold">: <span class="tanggal-justifikasi"></span>{{ date('d/m/Y', strtotime($data->tanggal_justifikasi)) }}</label>
                </div>
            </div>--}}
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Contract Process</h4>
                    <p class="sub-header">Procces of Contract</p>
                    <div id="smartwizard-arrows" class="sw-main sw-theme-arrows">
                        <input type="hidden" value="{{ $data->contract_status }}" id="status">
                        <input type="hidden" value="{{ $data->report_pbj_contract_id }}" id="id">
                        <ul class="nav nav-tabs step-anchor">
                            <li class="nav-item draft-contract status-drk"><a href="#sw-arrows-step-1" class="nav-link">Draft Kontrak<small class="d-block">Step description</small></a></li>
                            <li class="nav-item performance status-pfm"><a href="#sw-arrows-step-2" class="nav-link">Performance Bond (Upload Jaminan Pelaksanaan)<small class="d-block">Step description</small></a></li>
                            <li class="nav-item verifikasi"><a href="#sw-arrows-step-3" class="nav-link">Verifikasi Jaminan Pelaksanaan<small class="d-block">Step description</small></a></li>
                            <li class="nav-item review"><a href="#sw-arrows-step-4" class="nav-link">Review Legal<small class="d-block">Step description</small></a></li>
                            <li class="nav-item"><a href="#sw-arrows-step-5" class="nav-link">Approval<small class="d-block">Step description</small></a></li>
                        </ul>

                        <div class="p-3 sw-container tab-content" style="min-height: 198.133px;">
                            <div id="sw-arrows-step-1" class="tab-pane step-content" style="display: block;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Template Proposal/Dokumen Penawaran:</label>
                                                        <input type="file" name="file" class="form-control" id="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Draft Contract:</label>
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Metode Submit Dokumen:</label>
                                                        <select class="form-control">
                                                            <option value="">Select Sampul</option>
                                                            <option value="">1 Sampul</option>
                                                            <option value="">2 Sampul</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div id="sw-arrows-step-2" class="tab-pane step-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Template Proposal/Dokumen Penawaran:</label>
                                                        <input type="file" name="file" class="form-control" id="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Doc:</label>
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div id="sw-arrows-step-3" class="tab-pane step-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Template Proposal/Dokumen Penawaran:</label>
                                                        <input type="file" name="file" class="form-control" id="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Doc:</label>
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div id="sw-arrows-step-4" class="tab-pane step-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Template Proposal/Dokumen Penawaran:</label>
                                                        <input type="file" name="file" class="form-control" id="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Upload Doc:</label>
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                        <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div id="sw-arrows-step-5" class="tab-pane step-content">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager Legal:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                                <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP Legal:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                                <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                            </div>
                                        </div>

                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager Sarana/Non-Sarana:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                                <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP Sarana/Non-Sarana:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                                <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                            </div>
                                        </div>

                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By Manager User:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded">Approve</button>
                                                <button type="submit" class="btn btn-warning btn-sm btn-rounded">Reject</button>
                                            </div>
                                        </div>
                                        <label for="exampleInputEmail1" class="font-weight-bold">Approval By VP User:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Document Signed</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Date Signed</label>
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker flatpickr-input" placeholder="Please insert signed date" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="font-weight-bold">Catatan:</label>
                                                    <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Approval note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>
                        <!-- <div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end">
                            <div class="btn-group mr-2 sw-btn-group" role="group"><button class="btn btn-secondary sw-btn-prev disabled" type="button">Previous</button><button class="btn btn-secondary sw-btn-next" type="button">Next</button></div>
                        </div> -->
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var status = $('#status').val();
        console.log(status)
        if(status == 'PROSES_RDC'){
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('active')
        }
        $('body').on('click', '.sw-btn-next', function() {
            // conditional contract prosess
            // if status 
            var id = $(this).closest('#smartwizard-arrows').find('#id').val();
            var status = $(this).closest('#smartwizard-arrows').find('#status').val();
            console.log(status)
            if (status == 'PROSES_DC') {
                $('.performance').removeClass('active')
                if (confirm('Are you sure submit contract ? ')) {
                    $.ajax({
                        url: '{{ route("save.draft-kontrak") }}',
                        method: 'GET',
                        dataType: 'json',
                        data: {
                            id: id,
                            status: status
                        }
                    }).done(function(response) {
                        if (response.status == 200) {
                            $('.performance').addClass('active')
                            $('#status').val(response.proses_st)
                        }
                    })
                }
            } else if (status == 'PROSES_UJP') {
                $('.verifikasi').removeClass('active')
                if (confirm('Are you sure submit contract ? ')) {
                    $.ajax({
                        url: '{{ route("save.draft-kontrak") }}',
                        method: 'GET',
                        dataType: 'json',
                        data: {
                            id: id,
                            status: status
                        }
                    }).done(function(response) {
                        if (response.status == 200) {
                            $('.verifikasi').addClass('active')
                            $('#status').val(response.proses_st)
                        }
                    })
                }
            } else if (status == 'PROSES_VJP') {
                $('.review').removeClass('active')
                if (confirm('Are you sure submit contract ? ')) {
                    $.ajax({
                        url: '{{ route("save.draft-kontrak") }}',
                        method: 'GET',
                        dataType: 'json',
                        data: {
                            id: id,
                            status: status
                        }
                    }).done(function(response) {
                        if (response.status == 200) {
                            $('.review').addClass('active')
                            $('#status').val(response.proses_st)
                        }
                    })
                }
            }
            // console.log($(this).closest('#smartwizard-arrows').find('.performance').addClass('test'));
        })
    })
</script>
@endpush