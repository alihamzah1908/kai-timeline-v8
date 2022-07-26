@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.sp3') }}"><b>Back to list</b></a></li>
                    <li class="breadcrumb-item"><a href="#"><b>Detail {{ $data->judul_pengadaan }}</b></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                <span class="d-none d-sm-block">Form Evaluasi</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="home">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <dl class="row mb-2 mt-3">
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No. NPP
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->no_sp3 }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Procurement Title</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->judul_pengadaan }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">RKAP Value </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ number_format($data->nilai_pr, 0) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Vendor Name
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ str_replace(array( '"', '[', ']' ),'' , $data->nama_vendor); }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Department</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->department_cd }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Division </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->division_cd }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Status </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-bold">
                                                <badges class="badge badge-danger">{{ $data->get_status->keterangan }}</badges>
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tax Type
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ ($data->type_tax == '1' ? 'Pajak Tidak Dipungut' : ($data->type_tax == '2' ? ' Pajak Dipungut' : 'Pajak Dipungut Biaya Sebagian')) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tax Value</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ number_format($data->nilai_tax, 0) }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tipe Pemilihan
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                {{ ($data->type_metode == '1' ? 'Penunjukan Langsung' : ($data->type_metode == '2' ? 'Pemilihan Langsung' : 'Lelang Terbuka')) }}
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6">
                                        <dl class="row mb-2 mt-3">
                                            <dt class="col-sm-5 font-weight-bold">No PR </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->no_pr }}, <br />@endforeach
                                            </dd>
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tanggal PR </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->tanggal_pr }}, <br />@endforeach
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No Justifikasi Kebutuhan Barang </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->no_justifikasi }}, <br />@endforeach
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tanggal Justifikasi Kebutuhan Barang </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->tanggal_justifikasi ? date('d M Y', strtotime($pr->tanggal_justifikasi)) : '' }}, <br />@endforeach
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No. MI </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->no_mi }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tanggal MI
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                {{ $data->tanggal_mi ? date('d M Y', strtotime($data->tanggal_mi)) : '' }}
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No. Justifikasi Penunjukan/Pemilihan Langsung
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->no_justifikasi}}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tanggal Justifikasi Penunjukan/ Pemilihan Langsung
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                {{ $data->tanggal_justifikasi_pemilihan ? date('d M Y', strtotime($data->tanggal_justifikasi_pemilihan)) : '' }}
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No. RAB</dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->no_rab }}, <br />@endforeach
                                            </dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">RAB Date </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr){{ $pr->tanggal_rab ? date('d M Y', strtotime($pr->tanggal_rab)) : '' }}, <br />@endforeach
                                            </dd>
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">No KAK </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->no_kak }}</dd>

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Tanggal KAK </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ $data->tanggal_kak ? date('d M Y', strtotime($data->tanggal_kak)) : '' }}</dd>
                                            @if($data->timeline_id == '')
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">COA </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">{{ str_replace(array( '"', '[', ']' ),'', $data->coa); }}</dd>
                                            @endif
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">File PR </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr)
                                                <a href="{{ asset('file/sp3/'. $pr->file_pr) }}" target="_blank">
                                                    <i class="uil uil-file"></i>&nbsp; {{ $pr->file_pr }}
                                                </a>
                                                , <br />@endforeach
                                            </dd>
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">File RAB </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr)
                                                <a href="{{ asset('file/sp3/'. $pr->file_rab) }}" target="_blank">
                                                    <i class="uil uil-file"></i>&nbsp; {{ $pr->file_rab }}
                                                </a>
                                                , <br />@endforeach
                                            </dd>
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">File Justifikasi Barang </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                @foreach($trx_npp as $pr)
                                                <a href="{{ asset('file/sp3/'. $pr->file_justifikasi) }}" target="_blank">
                                                    <i class="uil uil-file"></i>&nbsp; {{ $pr->file_justifikasi }}
                                                </a>
                                                , <br />@endforeach
                                            </dd>
                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">File Justifikasi Penunjukan/Pemilihan Langsung </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                <a href="{{ asset('file/sp3/'. $pr->file_justifikasi) }}" target="_blank">
                                                    <i class="uil uil-file"></i>&nbsp; {{ $data->file_justifikasi_pemilihan }}
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show" id="profile">
                            <div class="col-md-12">
                                <form action='{{ route("evaluasi.store") }}' id="form-evaluasi" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th width="5">No</th>
                                                        <th>Urian Dokumen</th>
                                                        <th>Nomor</th>
                                                        <th>Tanggal</th>
                                                        <th colspan="2" class="text-left">Pemenuhan</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Ya</th>
                                                        <th>Tidak</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1.</th>
                                                        <td>
                                                            <p>MI Permohonan Pengadaan dari User</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" placeholder="please insert uraian" value="MI Permohonan Pengadaan dari User">
                                                        </td>
                                                        <td>
                                                            <p>23/MI/COHP/KCI/VII/2022</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" placeholder="please insert item" value="23/MI/COHP/KCI/VII/2022">
                                                        </td>
                                                        <td>
                                                            <p>13 July 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" placeholder="please insert uraian" value="2022-07-13">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[0]" value="Ya" @if($evaluasi){{ $evaluasi[0]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[0]" value="Tidak" @if($evaluasi){{ $evaluasi[0]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[2]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[0]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2.</th>
                                                        <td>
                                                            <p>NPD</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="NPD">
                                                        </td>
                                                        <td>
                                                            <p>2100074947 <br />2100074949</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="2100074947<br />2100074949">
                                                        </td>
                                                        <td>
                                                            <p>06 June 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="2022-06-06">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[1]" value="Ya" @if($evaluasi){{ $evaluasi[1]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[1]" value="Tidak" @if($evaluasi){{ $evaluasi[1]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[2]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[1]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3.</th>
                                                        <td>
                                                            <p>IJIN PRINSIP</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="IJIN PRINSIP">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[2]" value="Ya" @if($evaluasi){{ $evaluasi[2]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[2]" value="Tidak" @if($evaluasi){{ $evaluasi[2]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[2]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[2]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4.</th>
                                                        <td>
                                                            <p>Permohonan Dana dari User (NPD/Ijin Prinsip)</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="Permohonan Dana dari User (NPD/Ijin Prinsip)">
                                                        </td>
                                                        <td>
                                                            <p>2100074947 <br />2100074949</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="2100074947 <br />2100074949">
                                                        </td>
                                                        <td>
                                                            <p>06 June 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="2022-06-06">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[3]" value="Ya" @if($evaluasi){{ $evaluasi[3]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[3]" value="Tidak" @if($evaluasi){{ $evaluasi[3]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[3]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[3]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>5.</th>
                                                        <td>
                                                            <p>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="No RAB, Tanggal RAB dan Judul Pengadaan di RAB">
                                                        </td>
                                                        <td>
                                                            @foreach($trx_npp as $pr){{ $pr->no_rab . '/' . $pr->tanggal_rab . '/' . $data->judul_pengadaan}} <br />@endforeach
                                                            <input type="hidden" name="nomor[]" class="form-control" value="307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022">
                                                        </td>
                                                        <td>
                                                            <p>19 Mei 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[4]" value="Ya" @if($evaluasi){{ $evaluasi[4]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[4]" value="Tidak" @if($evaluasi){{ $evaluasi[4]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[4]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[4]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
                                                        <td>
                                                            <p>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi">
                                                        </td>
                                                        <td>
                                                            @foreach($trx_npp as $pr){{ $pr->no_justifikasi . '/' . $pr->tanggal_justifikasi . '/' . $data->judul_pengadaan}} <br />@endforeach
                                                            <input type="hidden" name="nomor[]" class="form-control" value="307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022">
                                                        </td>
                                                        <td>
                                                            <p>19 Mei 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[5]" value="Ya" @if($evaluasi){{ $evaluasi[5]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[5]" value="Tidak" @if($evaluasi){{ $evaluasi[5]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[5]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[5]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.</td>
                                                        <td>
                                                            <p>No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR</p><br /><br />
                                                            <p>a. MPPL</p><br /><br /><br />
                                                            <p>b. DENDA</p><br /><br /><br />
                                                            <p>b. Metode Pembayaran</p>
                                                            <input type="hidden" name="item_cd[]" value="a" />
                                                            <input type="hidden" name="item_cd[]" value="b" />
                                                            <input type="hidden" name="item_cd[]" value="c" />
                                                            <input type="hidden" name="item_value[]" class="form-control" value="No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR">
                                                            <input type="hidden" name="item_value[]" class="form-control" value="MPPL">
                                                            <input type="hidden" name="item_value[]" class="form-control" value="DENDA">
                                                            <input type="hidden" name="item_value[]" class="form-control" value="METODE PEMBAYARAN">
                                                        </td>
                                                        <td>
                                                            <p>{{ $data->no_kak . '/' . date('Y-m-d', strtotime($data->tanggal_kak)) . '/' . $data->judul_pengadaan}}</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="054/COH/KCI/V/2022">
                                                        </td>
                                                        <td>
                                                            <p>19 Mei 2022</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[6]" value="Ya" @if($evaluasi){{ $evaluasi[6]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[7]" value="Ya" @if($evaluasi){{ $evaluasi[7]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[8]" value="Ya" @if($evaluasi){{ $evaluasi[8]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[9]" value="Ya" @if($evaluasi){{ $evaluasi[9]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[6]" value="Tidak" @if($evaluasi){{ $evaluasi[6]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[7]" value="Tidak" @if($evaluasi){{ $evaluasi[7]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[8]" value="Tidak" @if($evaluasi){{ $evaluasi[8]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="radio" name="pemenuhan[9]" value="Tidak" @if($evaluasi){{ $evaluasi[9]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[6]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[6]->keterangan }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[7]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[7]->keterangan }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[8]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[8]->keterangan }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[9]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[9]->keterangan }}@endif</textarea><br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8.</td>
                                                        <td>
                                                            <p>RKIP</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="RKIP">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[10]" value="Ya" @if($evaluasi){{ $evaluasi[10]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[10]" value="Tidak" @if($evaluasi){{ $evaluasi[10]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[10]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[10]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9.</td>
                                                        <td>
                                                            <p>Permohonan Persetujuan Direksi</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="Permohonan Persetujuan Direksi">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[11]" value="Ya" @if($evaluasi){{ $evaluasi[11]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[11]" value="Tidak" @if($evaluasi){{ $evaluasi[11]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[11]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[11]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10.</td>
                                                        <td>
                                                            <p>Persetujuan Direksi (Justifikasi PNL)</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="Persetujuan Direksi (Justifikasi PNL)">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <p></p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="">
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[12]" value="Ya" @if($evaluasi){{ $evaluasi[12]->pemenuhan == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="pemenuhan[12]" value="Tidak" @if($evaluasi){{ $evaluasi[12]->pemenuhan == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $evaluasi[12]->keterangan }}@endif"> @if($evaluasi){{ $evaluasi[12]->keterangan }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="ml-3">
                                                <tr>
                                                    <th>Catatan </th>
                                                </tr>
                                                <tr>
                                                    <th><textarea name="catatan_evaluasi" class="form-control" cols="50" value="@if($evalnotes) {{ $evalnotes->catatan_evaluasi }} @endif">@if($evalnotes) {{ $evalnotes->catatan_evaluasi }} @endif</textarea> </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button class="btn btn-primary btn-sm btn-rounded save ml-2" type="button"><i class="uil uil-sim-card"></i>
                                                @if($evaluasi) Update @else Save @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($data->proses_st == 'PROSES_SSP3')
                        @can('sp3.approval-list')
                        <a class="approve d-flex justify-content-end" role="presentation" href="javascript:void(0)" data-bind="{{ $data->sp3_id }}">
                            <button class="btn btn-warning btn-sm btn-rounded">
                                <i class="uil uil-check"></i> Approve
                            </button>
                        </a>
                        @endcan
                        @endif
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
        $('body').on('click', '.save', function(e) {
            Swal.fire({
                title: 'Are you sure save evaluasi ?',
                // text: 'Your procurement are send to contract!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    e.preventDefault()
                    $("#form-evaluasi").submit();
                }
            })
        })
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve NPP?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
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
                                'Approved!',
                                'Your NPP has approved.',
                                'success'
                            )
                            window.location.href = '{{ route("sp3.task.approval") }}';
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your NPP failed approved.',
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