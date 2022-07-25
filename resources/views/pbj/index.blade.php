@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List PBJ</h4>
                        </div>
                    </div>
                    <table id="datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Directorate</th>
                                <th>Division</th>
                                <th>Department</th>
                                <th>Realisasi</th>
                                <th>Judul Pengadaan</th>
                                <th>Nilai PR</th>
                                <th>Type Tax</th>
                                <th>Nilai TAX</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Jadwal Pelaksanaan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#rks" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">RKS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Peserta Tender</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Evaluasi Dokumenn</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#klarifikasi-negoisasi" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Klarifikasi dan Negoisasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contract" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                <span class="d-none d-sm-block">Contract</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-3 text-muted col-md-12">
                        <div class="tab-pane show active" id="home">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Jadwal Pemberian Penjelasan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pelaksanaan_aanwidjzing">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Pemasukan Dokumen Penawaran</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Pembukaan Dokumen Penawaran</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Evaluasi Administrasi, Teknis, dan Harga </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Penetapan dan Pengumuman Pemenang </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Penandatanganan Kontrak  </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Start Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="font-weight-bold">End Date </label>
                                        <input type="date" name="jadwal_pemasukan" class="form-control" placeholder="Please insert jadwal pemasukan">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded btn-sm add-form-pelaksanaan">Add Form</button>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="berita">
                            <form action="{{ route('procurement.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="font-weight-bold">Berita Acara</label>
                                        <textarea name="berita_acara" class="form-control" placeholder="Please insert berita acara"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold">Tanggal</label>
                                            <input type="date" name="tanggal_acara" class="form-control" placeholder="Please insert tanggal">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="pemasukan-dokumen">
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
                        <div class="tab-pane" id="profile">
                            <table id="datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Judul Pengadaan</th>
                                        <th>Tanggal RKS</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $files = DB::table('draft_rks_file as a')
                                    ->join('trx_sp3 as b','a.sp3_id','b.sp3_id')
                                    ->get();
                                    @endphp
                                    @foreach($files as $file)
                                    <td>{{ $file->judul_pengadaan }}</td>
                                    <td>{{ $file->tanggal_rks }}</td>
                                    <td>
                                        <a href="{{ asset('file/rks/' . $file->file) }}" target="_blank">
                                            <i class="uil uil-file"></i>
                                        </a>
                                    </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-rks" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Draft RKS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('procurement.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="sp3_id" id="sp3_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Upload Template/Proposal</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal</label>
                                <input type="date" name="tanggal_rks" class="form-control" placeholder="Please insert tanggal rks">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
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
            ajax: "{{ route('data.procurement') }}",
            columns: [{
                    data: 'directorate_cd'
                },
                {
                    data: 'division_cd'
                },
                {
                    data: 'department_cd'
                },
                {
                    data: 'realisasi'
                },
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'nilai_pr'
                },
                {
                    data: 'type_tax'
                },
                {
                    data: 'nilai_tax'
                },
                {
                    data: 'proses_st'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
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
            $("#modal-approve").modal('show')
        })

        $('body').on('click', '.add-form-pelaksanaan', function() {
            var body = '<div class="form-group">'
            body += '<input type="date" name="pelaksanaan_aanwidjzing[]" class="form-control" placeholder="please insert item">'
            body += '</div>'
            $(".pelaksanaan_aanwidjzing").append(body)
        })
    })
</script>
@endpush