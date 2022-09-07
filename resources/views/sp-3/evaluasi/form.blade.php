@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-left mt-1">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.sp3') }}">List SP3</a></li>
                    <li class="breadcrumb-item"><a href="#">Form Evaluasi</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body p-0">
                    <h6 class="card-title border-bottom p-3 mb-0 ">Evaluasi SP3 {{ $data->judul_pengadaan }}</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row page-title">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action='{{ route("evaluasi.store") }}' id="form-evaluasi" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                    <thead style="text-align: center">
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
                                    <tbody style="vertical-align: top">
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
                                                <input type="radio" name="pemenuhan[0]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[0]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <input type="radio" name="pemenuhan[1]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[1]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <input type="radio" name="pemenuhan[2]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[2]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <input type="radio" name="pemenuhan[3]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[3]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>5.</th>
                                            <td>
                                                <p>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</p>
                                                <input type="hidden" name="item_value[]" class="form-control" value="No RAB, Tanggal RAB dan Judul Pengadaan di RAB">
                                            </td>
                                            <td>
                                                <p>307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022</p>
                                                <input type="hidden" name="nomor[]" class="form-control" value="307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022">
                                            </td>
                                            <td>
                                                <p>19 Mei 2022</p>
                                                <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[4]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[4]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</p>
                                                <input type="hidden" name="item_value[]" class="form-control" value="No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi">
                                            </td>
                                            <td>
                                                <p>307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022</p>
                                                <input type="hidden" name="nomor[]" class="form-control" value="307/RAB/COH/KCI/V/2022 <br />308/RAB/COH/KCI/V/2022">
                                            </td>
                                            <td>
                                                <p>19 Mei 2022</p>
                                                <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[5]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[5]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <p>054/COH/KCI/V/2022</p>
                                                <input type="hidden" name="nomor[]" class="form-control" value="054/COH/KCI/V/2022">
                                            </td>
                                            <td>
                                                <p>19 Mei 2022</p>
                                                <input type="hidden" name="tanggal[]" class="form-control" value="2022-05-19">
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[6]" value="Ya"> Ya <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[7]" value="Ya"> Ya <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[8]" value="Ya"> Ya <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[9]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[6]" value="Tidak"> Tidak <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[7]" value="Tidak"> Tidak <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[8]" value="Tidak"> Tidak <br /><br /><br /><br />
                                                <input type="radio" name="pemenuhan[9]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea><br />
                                                <textarea name="keterangan[]" class="form-control"></textarea><br />
                                                <textarea name="keterangan[]" class="form-control"></textarea><br />
                                                <textarea name="keterangan[]" class="form-control"></textarea><br />
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
                                                <input type="radio" name="pemenuhan[10]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[10]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <input type="radio" name="pemenuhan[11]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[11]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
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
                                                <input type="radio" name="pemenuhan[12]" value="Ya"> Ya
                                            </td>
                                            <td>
                                                <input type="radio" name="pemenuhan[12]" value="Tidak"> Tidak
                                            </td>
                                            <td>
                                                <textarea name="keterangan[]" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-12 d-flex justify-content-start">
                            <button class="btn btn-success btn-rounded add-form btn-sm" type="button">Add Form</button>
                        </div> -->
                            <div class="col-md-12 d-flex justify-content-end">
                                <input class="btn btn-primary btn-sm btn-rounded save ml-2" type="submit" name="save" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection