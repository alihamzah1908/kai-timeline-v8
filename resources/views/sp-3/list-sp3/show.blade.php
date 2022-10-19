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
                                <span class="d-none d-sm-block">Evaluasi</span>
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

                                            <dt class="col-sm-5 font-weight-normal font-weight-bold">Perihal MI
                                            </dt>
                                            <dd class="col-sm-1 font-weight-normal">:</dd>
                                            <dd class="col-sm-6 font-weight-normal">
                                                {{ $data->perihal_mi }}
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
                                                    <i class="uil uil-file"></i>&nbsp; {{ $pr->file_justifikasi }}
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($evaluasi) {
                            $arr = $evaluasi->toArray();
                            $arr0 = array_key_exists('0', $arr) ? $arr[0]["pemenuhan"] : '';
                            $arr0ket = array_key_exists('0', $arr) ? $arr[0]["keterangan"] : '';
                            $arr1 = array_key_exists('1', $arr) ? $arr[1]["pemenuhan"] : '';
                            $arr1ket = array_key_exists('1', $arr) ? $arr[1]["keterangan"] : '';
                            $arr2 = array_key_exists('2', $arr) ? $arr[2]["pemenuhan"] : '';
                            $arr2ket = array_key_exists('2', $arr) ? $arr[2]["keterangan"] : '';
                            $arr3 = array_key_exists('3', $arr) ? $arr[3]["pemenuhan"] : '';
                            $arr3ket = array_key_exists('3', $arr) ? $arr[3]["keterangan"] : '';
                            $arr4 = array_key_exists('4', $arr) ? $arr[4]["pemenuhan"] : '';
                            $arr4ket = array_key_exists('4', $arr) ? $arr[4]["keterangan"] : '';
                            $arr5 = array_key_exists('5', $arr) ? $arr[5]["pemenuhan"] : '';
                            $arr5ket = array_key_exists('5', $arr) ? $arr[5]["keterangan"] : '';
                            $arr6 = array_key_exists('6', $arr) ? $arr[6]["pemenuhan"] : '';
                            $arr6ket = array_key_exists('6', $arr) ? $arr[6]["keterangan"] : '';
                            $arr7 = array_key_exists('7', $arr) ? $arr[7]["pemenuhan"] : '';
                            $arr7ket = array_key_exists('7', $arr) ? $arr[7]["keterangan"] : '';
                            $arr8 = array_key_exists('8', $arr) ? $arr[8]["pemenuhan"] : '';
                            $arr8ket = array_key_exists('8', $arr) ? $arr[8]["keterangan"] : '';
                            $arr9 = array_key_exists('9', $arr) ? $arr[9]["pemenuhan"] : '';
                            $arr9ket = array_key_exists('9', $arr) ? $arr[9]["keterangan"] : '';
                            $arr10 = array_key_exists('10', $arr) ? $arr[10]["pemenuhan"] : '';
                            $arr10ket = array_key_exists('10', $arr) ? $arr[10]["keterangan"] : '';
                            $arr11 = array_key_exists('11', $arr) ? $arr[11]["pemenuhan"] : '';
                            $arr11ket = array_key_exists('11', $arr) ? $arr[11]["keterangan"] : '';
                            $arr12 = array_key_exists('12', $arr) ? $arr[12]["pemenuhan"] : '';
                            $arr12ket = array_key_exists('12', $arr) ? $arr[12]["keterangan"] : '';
                        }
                        ?>
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
                                                            <p>{{ $data ? $data->no_mi : '' }}</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" placeholder="please insert item" value="{{ $data ? $data->no_mi : '' }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $data->tanggal_mi }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" placeholder="please insert uraian" value="{{ $data->tanggal_mi }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr0 ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr0 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr0ket }}@endif"> @if($evaluasi){{ $arr0ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $nilai_pr = [];
                                                    $tanggal_pr = [];
                                                    $arrcheck = [];
                                                    foreach ($trx_npp as $val) {
                                                        $nilai_pr[] = $val->no_pr;
                                                        $arrcheck[] = is_numeric($val->no_pr);
                                                        $tanggal_pr[] = $val->tangggal_pr;
                                                    }
                                                    $checkNumeric = array_sum($arrcheck)
                                                    ?>
                                                    @if($checkNumeric > 0)
                                                    <tr>
                                                        <th>2.</th>
                                                        <td>
                                                            <p>NPD</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="NPD">
                                                        </td>
                                                        <td>
                                                            <p>{{ implode(', ', $nilai_pr) }}</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ implode(', ', $nilai_pr) }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $tanggal_pr[0] }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tanggal_pr[0] }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr1 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr1 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr1ket }}@endif"> @if($evaluasi){{ $arr1ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3.</th>
                                                        <td>
                                                            <p>Permohonan Dana dari User (NPD)</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="Permohonan Dana dari User (NPD)">
                                                        </td>
                                                        <td>
                                                            <p>{{ implode(', ', $nilai_pr) }}</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ implode(', ', $nilai_pr) }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $tanggal_pr[0] }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tanggal_pr[0] }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr2 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr2 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr2ket }}@endif"> @if($evaluasi){{ $arr2ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    @else
                                                    <tr>
                                                        <th>2.</th>
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
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr1 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr1 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr1ket }}@endif"> @if($evaluasi){{ $arr1ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3.</th>
                                                        <td>
                                                            <p>Permohonan Dana dari User (Ijin Prinsip)</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="Permohonan Dana dari User (Ijin Prinsip)">
                                                        </td>
                                                        <td>
                                                            <p>{{ implode(', ', $nilai_pr) }}</p>
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ implode(', ', $nilai_pr) }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $tanggal_pr[0] }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tanggal_pr[0] }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr2 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr2 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr2ket }}@endif"> @if($evaluasi){{ $arr2ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    <?php
                                                    $no_rab = [];
                                                    $tgl_rab = [];
                                                    $no_just = [];
                                                    $tgl_just = [];
                                                    foreach ($trx_npp as $val) {
                                                        $no_rab[] = $val->no_rab . '/' . $val->tanggal_rab . '/' . $data->judul_pengadaan;
                                                        $tgl_rab[] = $val->tanggal_rab;
                                                        $no_just[] = $val->no_justifikasi . '/' . $val->tanggal_justifikasi . '/' . $data->judul_pengadaan;
                                                        $tgl_just[] = $val->tanggal_justifikasi;
                                                    }
                                                    $rabImpld = implode(', ', $no_rab);
                                                    $tglImpld = implode(', ', $tgl_rab);
                                                    $justImpld = implode(', ', $no_just);
                                                    $justTglImpld = implode(', ', $tgl_just);
                                                    ?>
                                                    <tr>
                                                        <th>4.</th>
                                                        <td>
                                                            <p>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="No RAB, Tanggal RAB dan Judul Pengadaan di RAB">
                                                        </td>
                                                        <td>
                                                            @foreach($trx_npp as $pr){{ $pr->no_rab . '/' . $pr->tanggal_rab . '/' . $data->judul_pengadaan}} <br />@endforeach
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ $rabImpld }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $tgl_rab[0] }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tgl_rab[0] }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr3 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr3 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr3ket }}@endif"> @if($evaluasi){{ $arr3ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>
                                                            <p>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</p>
                                                            <input type="hidden" name="item_value[]" class="form-control" value="No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi">
                                                        </td>
                                                        <td>
                                                            @foreach($trx_npp as $pr){{ $pr->no_justifikasi . '/' . $pr->tanggal_justifikasi . '/' . $data->judul_pengadaan}} <br />@endforeach
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ $justImpld }}">
                                                        </td>
                                                        <td>
                                                            <p>{{ $tgl_just[0] }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $tgl_just[0] }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr4 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr4 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr4ket }}@endif"> @if($evaluasi){{ $arr4ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
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
                                                            <input type="hidden" name="nomor[]" class="form-control" value="{{ $data->no_kak . '/' . date('Y-m-d', strtotime($data->tanggal_kak)) . '/' . $data->judul_pengadaan}}">
                                                        </td>
                                                        <td>
                                                            <p>{{ date('Y-m-d', strtotime($data->tanggal_kak)) }}</p>
                                                            <input type="hidden" name="tanggal[]" class="form-control" value="{{ $data->tanggal_kak }}">
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr5 == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr6 == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr7 == 'Ya' ? ' checked' : ''}}@endif> Ya <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr8 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr5 == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr6 == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr7 == 'Tidak' ? ' checked' : ''}}@endif> Tidak <br /><br /><br /><br />
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr8 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr5ket }}@endif"> @if($evaluasi){{ $arr6ket }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr6ket }}@endif"> @if($evaluasi){{ $arr7ket }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr7ket }}@endif"> @if($evaluasi){{ $arr8ket }}@endif</textarea><br />
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr8ket }}@endif"> @if($evaluasi){{ $arr9ket }}@endif</textarea><br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.</td>
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
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr9 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr9 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr9ket }}@endif"> @if($evaluasi){{ $arr9ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8.</td>
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
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr10 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr10 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr10ket }}@endif"> @if($evaluasi){{ $arr10ket }}@endif</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9.</td>
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
                                                            <input type="checkbox" name="pemenuhan[]" value="Ya" @if($evaluasi){{ $arr11 == 'Ya' ? ' checked' : ''}}@endif> Ya
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="pemenuhan[]" value="Tidak" @if($evaluasi){{ $arr11 == 'Tidak' ? ' checked' : ''}}@endif> Tidak
                                                        </td>
                                                        <td>
                                                            <textarea name="keterangan[]" class="form-control" value="@if($evaluasi){{ $arr11ket }}@endif"> @if($evaluasi){{ $arr11ket }}@endif</textarea>
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
                                            @if(!auth()->user()->hasRole('manajer_user'))
                                            <button class="btn btn-primary btn-sm btn-rounded save ml-2" type="button"><i class="uil uil-sim-card"></i>
                                                @if($evaluasi) Update @else Save @endif
                                            </button>
                                            @endif
                                            @if($evaluasi)
                                            <a href="{{ route('evaluasi.print.sp')}}?id={{ request()->id}}" target="_blank">
                                                <button class="btn btn-primary btn-sm btn-rounded ml-2" type="button"><i class="uil uil-print"></i> Print </button>
                                            </a>
                                            @endif
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($data->proses_st == 'PROSES_SSP3' && $evaluasi != '')
                        @can('sp3.approval-list')
                        <a class="approve d-flex justify-content-start" role="presentation" href="javascript:void(0)" data-bind="{{ $data->sp3_id }}">
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