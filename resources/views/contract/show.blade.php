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
                    <div id="smartwizard-arrows">
                        <ul>
                            <li><a href="#sw-arrows-step-1">Draft Kontrak<small class="d-block">Step description</small></a></li>
                            <li><a href="#sw-arrows-step-2">Performance Bond (Upload Jaminan Pelaksanaan)<small class="d-block">Step description</small></a></li>
                            <li><a href="#sw-arrows-step-3">Verifikasi Jaminan Pelaksanaan<small class="d-block">Step description</small></a></li>
                            <li><a href="#sw-arrows-step-4">Review Legal<small class="d-block">Step description</small></a></li>
                            <li><a href="#sw-arrows-step-5">Approval<small class="d-block">Step description</small></a></li>
                        </ul>

                        <div class="p-3">
                            <div id="sw-arrows-step-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id" />
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
                            <div id="sw-arrows-step-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id" />
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
                            <div id="sw-arrows-step-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id" />
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
                            <div id="sw-arrows-step-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mb-2">
                                            <input type="hidden" name="sp3_id" id="sp3_id" />
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
                            <div id="sw-arrows-step-5">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                                                    <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert signed date">
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
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection