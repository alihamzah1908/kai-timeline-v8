@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Procurement</h4>
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
                                    <th></th>
                                    <th style='width:13%'>Action</th>
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
<div class="modal fade" id="modal-approve" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Detail Pengadaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">Judul Pengadaan</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="judul-pengadaan">Judul Pengadaan</span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Vendor Name</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="vendor-name"></span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">No SP3</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="no-sp3"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Type Tax</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="type-tax"></span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">No PR</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="no-pr"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">No MI</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="no-mi"></span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">Nilai PR</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="nilai-pr"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Tanggal PR</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="tanggal-pr"></span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">No RAB</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="no-rab"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Tanggal RAB</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="tanggal-rab"></span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-weight-bold">No KAK</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="no-kak"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Tanggal KAK</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="tanggal-kak"></span></label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">Tanggal Justifikasi</label>
                    </div>
                    <div class="col-md-3">
                        <label class="font-weight-bold">: <span class="tanggal-justifikasi"></span></label>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="nav-item tab-jadwal-pelaksanaan">
                            <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Jadwal Pelaksanaan</span>
                            </a>
                        </li>
                        <li class="nav-item tab-draftrks">
                            <a href="#draftrks" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Draft RKS</span>
                            </a>
                        </li>
                        <li class="nav-item tab-reviewrks">
                            <a href="#reviewrks" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Review RKS</span>
                            </a>
                        </li>
                        <li class="nav-item tab-peserta-tender">
                            <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Peserta Tender</span>
                            </a>
                        </li>
                        <li class="nav-item tab-evaluasi-dokumen">
                            <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Evaluasi Dokumenn</span>
                            </a>
                        </li>
                        <li class="nav-item tab-klarifikasi">
                            <a href="#klarifikasi-negoisasi" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Klarifikasi dan Negoisasi</span>
                            </a>
                        </li>
                        <li class="nav-item tab-contract">
                            <a href="#contract" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                <span class="d-none d-sm-block">Contract</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-3 text-muted col-md-12">
                        <div class="tab-pane show active" id="home">
                            <form action="#" id="jadwal-pelaksanaan">
                                <input type="hidden" name="penjadwalan" value="penjadwalan">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Jadwal Pemberian Penjelasan:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="penjelasan_start_date" name="penjelasan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="penjelasan_end_date" name="penjelasan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Pemasukan Dokumen Penawaran:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="pemasukan_start_date" name="pemasukan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="pemasukan_end_date" name="pemasukan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Pembukaan Dokumen Penawaran:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="penawaran_start_date" name="penawaran_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="penawaran_end_date" name="penawaran_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Evaluasi Administrasi, Teknis dan Harga:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="evaluasi_start_date" name="evaluasi_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="evaluasi_end_date" name="evaluasi_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Penetapan dan Pengumuman Pemenang:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="pengumuman_start_date" name="pengumuman_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="pengumuman_end_date" name="pengumuman_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Penandatanganan Kontrak:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="tandatangan_start_date" name="tandatangan_start_date" class="form-control datepicker" placeholder="Please insert start date">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1" class="font-weight-bold"> To </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" id="tandatangan_end_date" name="tandatangan_end_date" class="form-control datepicker" placeholder="Please insert end date">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-jadwal">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="draftrks">
                            <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                @csrf
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
                                            <label for="exampleInputEmail1" class="font-weight-bold">Upload Draft RKS:</label>
                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="reviewrks">
                            <form action="#" id="form-reviewrks" enctype="multipart/form-data">
                                <table id="review-rks" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Judul Pengadaan</th>
                                            <th>Metode Submit Dokumen</th>
                                            <th>File Proposal/Template</th>
                                            <th>Draft RKS</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="peserta-tender">
                            <div class="add-vendor">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                                            <select data-plugin="customselect" class="form-control" name="vendor_code[]">
                                                <option value="">Select Vendor</option>
                                                <option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>
                                                <option value="RK100002">PT. SARANA MULTI CORPORA</option>
                                                <option value="RK10003">PT. TRIINTI INTERNATIONAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">PIC Name</label>
                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Email Corporate</label>
                                            <input type="text" name="email[]" class="form-control" placeholder="Please insert email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>
                                            <input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Vendor Address</label>
                                            <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="evaluasi-dokumen">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Sampul</label>
                                    <select class="form-control">
                                        <option value="">Select Sampul</option>
                                        <option value="">Penunjukan Langsung</option>
                                        <option value="">Pemilihan Langsung</option>
                                        <option value="">Lelang Terbuka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Dokumen Admin</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Harga</label>
                                        <input type="text" name="harga" class="form-control" placeholder="please insert harga">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                </div>
                            </div>
                        </div>
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
                url: "{{ route('data.procurement') }}",
                status: 'PROSES_DC'
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

        // review rks
        var viewrks = $('#review-rks').DataTable({
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
            ajax: "{{ route('data.view.rks') }}",
            columns: [{
                    data: 'judul_pengadaan'
                },
                {
                    data: 'metode_submit'
                },
                {
                    data: 'file'
                },
                {
                    data: 'file_draft'
                },
                {
                    data: 'catatan'
                },
            ]
        });

        $('body').on('click', '.draft-rks', function() {
            var id = $(this).attr('data-id')
            $('#sp3_id').val(id)
            $("#modal-rks").modal('show')
        })

        $('body').on('click', '.approve-rks', function() {
            var id = $(this).attr('data-id')
            $.ajax({
                url: '{{ route("procurement.sp3") }}',
                dataType: 'json',
                method: 'get',
                data: {
                    'id': id
                }
            }).done(function(response) {
                var reverse = response.data.nilai_pr.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                // FORMAT DATE
                const tanggal_kak = response.data.tanggal_kak.split(/[- :]/);
                const wanted1 = `${tanggal_kak[2]}/${tanggal_kak[1]}/${tanggal_kak[0]}`;
                const tanggal_rab = response.data.tanggal_rab.split(/[- :]/);
                const wanted2 = `${tanggal_rab[2]}/${tanggal_rab[1]}/${tanggal_rab[0]}`;
                const tanggal_pr = response.data.tanggal_pr.split(/[- :]/);
                const wanted3 = `${tanggal_pr[2]}/${tanggal_pr[1]}/${tanggal_pr[0]}`;
                const tanggal_justifikasi = response.data.tanggal_pr.split(/[- :]/);
                const wanted4 = `${tanggal_justifikasi[2]}/${tanggal_justifikasi[1]}/${tanggal_justifikasi[0]}`;
                $("#sp3_id").val(response.data.sp3_id)
                $(".judul-pengadaan").html(response.data.judul_pengadaan)
                $(".department").html(response.data.department_cd)
                $(".no-sp3").html(response.data.no_sp3)
                $(".no-pr").html(response.data.no_pr)
                $(".nilai-pr").html(ribuan)
                $(".nilai-tax").html(ribuan)
                $(".vendor-name").html(response.data.nama_vendor)
                $(".no-rab").html(response.data.no_rab)
                $(".tanggal-rab").html(wanted2)
                $(".no-kak").html(response.data.no_kak)
                $(".tanggal-kak").html(wanted1)
                if (response.data.type_tax == '1') {
                    var type = 'Pajak Tidak Dipungut';
                } else if (response.data.type_tax == '2') {
                    var type = 'Pajak Dipungut';
                } else {
                    var type = 'Pajak Dipungut Sebagian';
                }
                $(".type-tax").html(type)
                $(".tanggal-pr").html(wanted3)
                $(".tanggal-justifikasi").html(wanted4)
                $(".no-mi").html(response.data.no_mi)

                // CONDITION STATUS FOR TAB
                if (response.data.proses_st == 'PROSES_DRKS') {
                    $("#peserta-tender").attr('style', 'display:none')
                    $("#evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-reviewrks").attr('style', 'display:none')
                    $(".tab-peserta-tender").attr('style', 'display:none')
                    $(".tab-evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-klarifikasi").attr('style', 'display:none')
                    $(".tab-contract").attr('style', 'display:none')
                    $(".tab-draftrks").removeAttr('style', 'display:none')
                } else if (response.data.proses_st == 'PROSES_RRKS') {

                    $("#penjelasan_start_date").val(response.jadwal.penjelasan_start_date)
                    $("#penjelasan_end_date").val(response.jadwal.penjelasan_end_date)
                    $("#pemasukan_start_date").val(response.jadwal.pemasukan_start_date)
                    $("#pemasukan_end_date").val(response.jadwal.pemasukan_end_date)
                    $("#penawaran_start_date").val(response.jadwal.penawaran_start_date)
                    $("#penawaran_end_date").val(response.jadwal.penawaran_end_date)
                    $("#evaluasi_start_date").val(response.jadwal.evaluasi_start_date)
                    $("#evaluasi_end_date").val(response.jadwal.evaluasi_end_date)
                    $("#pengumuman_start_date").val(response.jadwal.pengumuman_start_date)
                    $("#pengumuman_end_date").val(response.jadwal.pengumuman_end_date)
                    $("#tandatangan_start_date").val(response.jadwal.tandatangan_start_date)
                    $("#tandatangan_end_date").val(response.jadwal.tandatangan_end_date)

                    $("#peserta-tender").attr('style', 'display:none')
                    $("#evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-draftrks").attr('style', 'display:none')
                    $(".tab-peserta-tender").attr('style', 'display:none')
                    $(".tab-evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-klarifikasi").attr('style', 'display:none')
                    $(".tab-contract").attr('style', 'display:none')
                    $(".tab-reviewrks").removeAttr('style', 'display:none')
                }

            })
            $("#modal-approve").modal('show')
        })

        $('body').on('click', '.add-form-pelaksanaan', function() {
            var body = '<div class="form-group">'
            body += '<input type="date" name="pelaksanaan_aanwidjzing[]" class="form-control" placeholder="please insert item">'
            body += '</div>'
            $(".pelaksanaan_aanwidjzing").append(body)
        })

        // SAVE DATA RKS
        $('body').on('click', '.save-rks', function() {
            var file = $("#file")[0].files;
            var tanggal_rks = $("#tanggal-rks").val();
            var formData = new FormData();
            formData.append('file', file[0])
            formData.append('tanggal_rks', tanggal_rks)
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{ route('procurement.store') }}",
                method: "POST",
                dataType: 'JSON',
                data: formData,
                processData: false,
                contentType: false,
            }).done(function(response) {
                if (response.status == 200) {
                    Swal.fire(
                        'RKS Saved!',
                        'Your RKS has saved.',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'RKS failed Save!',
                        'Your RKS has failed save.',
                        'error'
                    )
                }
            })
        })

        // SAVE JADWAL PELAKSANAAN
        $('body').on('click', '.save-jadwal', function() {
            var formData = $("#jadwal-pelaksanaan").serialize()
            $.ajax({
                url: "{{ route('procurement.store') }}",
                method: "POST",
                dataType: 'JSON',
                data: formData,
            }).done(function(response) {
                console.log(response)
            })
        })

        $('body').on('click', '.add-button-vendor', function() {
            var body = '<div class="row mb-3">'
            body += '<div class="col-md-6">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>'
            body += '<select data-plugin="customselect" class="form-control" name="vendor_code[]">'
            body += '<option value="">Select Vendor</option>'
            body += '<option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>'
            body += '<option value="RK100002">PT. SARANA MULTI CORPORA</option>'
            body += '<option value="RK10003">PT. TRIINTI INTERNATIONAL</option>'
            body += '</select>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">PIC Name</label>'
            body += '<input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Email Corporate</label>'
            body += '<input type="text" name="email[]" class="form-control" placeholder="Please insert email">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>'
            body += '<input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Vendor Address</label>'
            body += '<textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $(".add-vendor").append(body)
        })
    })
</script>
@endpush