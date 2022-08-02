@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Procurement</h4>
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
                            <label class="font-weight-bold">: <span class="vendor-name"></span>{{ $data->nama_vendor }}</label>
                        </div>
                    </div>
                    <div class="row">
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
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs">
                            @if($data->proses_st == 'PROSES_DRKS' || $data->proses_st == 'PROSES_RRKS' || $data->proses_st == 'PROSES_PP' || $data->proses_st == 'PROSES_AL' ||
                            $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP' || $data->proses_st == 'PROSES_KKN'
                            || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-draftrks">
                                <a href="#draftrks" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">RKS</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_PP' || $data->proses_st == 'PROSES_AL' || $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-peserta-tender">
                                <a href="#peserta-tender" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Peserta Tender</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_AL' || $data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-aanwidjzing">
                                <a href="#aanwidjzing" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Aanwidjzing</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_PDP' || $data->proses_st == 'PROSES_PPDP' || $data->proses_st == 'PROSES_EP'
                            || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-dokumen-penawaran">
                                <a href="#dokumen-penawaran" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Dokumen Penawaran</span>
                                </a>
                            </li>
                            @endif
                            @if($data->proses_st == 'PROSES_EP' || $data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-evaluasi-dokumen">
                                <a href="#evaluasi-dokumen" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Evaluasi Penawaran</span>
                                </a>
                            </li>
                            @if($data->proses_st == 'PROSES_KKN' || $data->proses_st == 'PROSES_EDH')
                            <li class="nav-item tab-klarifikasi">
                                <a href="#klarifikasi" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                    <span class="d-none d-sm-block">Klarifikasi, Konfirmasi dan Negoisasi</span>
                                </a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item tab-pemenang">
                                <a href="#pemenang" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Penetapan Pemenang</span>
                                </a>
                            </li>
                            <li class="nav-item tab-summary">
                                <a href="#summary" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                    <span class="d-none d-sm-block">Summary PBJ</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <div class="tab-content p-3 text-muted col-md-12">
                            <div class="tab-pane show active" id="draftrks">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                        <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="sp3_id" id="sp3-id" value="{{ $data->sp3_id }}" />
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Template Proposal/Dokumen Penawaran:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_penawaran" class="form-control" id="file-penawaran">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Template Dokumen RKS:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_dokumen" class="form-control" id="file-dokumen">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Metode Submit Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control" name="metode_dokumen" id="metode-dokumen">
                                                            <option value="">Select Sampul</option>
                                                            <option value="1_sampul">1 Sampul</option>
                                                            <option value="2_sampul">2 Sampul</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="catatan_rks" id="catatan-rks" class="form-control" placeholder="Please insert RKS note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    @if($data->proses_st == 'PROSES_DRKS')
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded save-rks">Submit</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if($data->proses_st == 'PROSES_RRKS')
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning btn-sm btn-rounded approve mr-2" data-bind="{{ $data->proses_st }}"><i class="uil uil-check"></i>Approve</button>
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded reject" data-bind="{{ $data->proses_st }}"><i class="uil uil-reject"></i>Reject</button>
                                </div>
                                @endif
                            </div>
                            <div class="tab-pane" id="peserta-tender">
                                <form action="{{ route('save.tender') }}" method="post" id="tender">
                                    <div class="add-vendor">
                                        <input type="hidden" name="sp3_id" id="sp3-id" value="{{ $data->sp3_id }}" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="row">
                                            @php
                                            $tender = \App\Models\TrxPesertaTender::where('sp3_id', $data->sp3_id)->get();
                                            @endphp
                                            @if($tender->count() > 0)
                                            @foreach($tender as $val)
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vendor Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select data-plugin="customselect" class="form-control" name="vendor_code[{{$val->peserta_tender_id}}]">
                                                                <option value="">Select Vendor</option>
                                                                <option value="RK10047" {{ $val->vendor_code == 'RK10047' ? ' selected' : '' }}>PT. TEKNOKRAT MITRA DATA</option>
                                                                <option value="RK100002" {{ $val->vendor_code == 'RK100002' ? ' selected' : '' }}>PT. SARANA MULTI CORPORA</option>
                                                                <option value="RK10003" {{ $val->vendor_code == 'RK10003' ? ' selected' : '' }}>PT. TRIINTI INTERNATIONAL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert phone number" value="{{ $val->phone_number }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">PIC Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="pic_name[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert pic name" value="{{ $val->pic_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Corporate:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="email[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert email" value="{{ $val->email_corporate }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vendor Address:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="vendor_address[{{$val->peserta_tender_id}}]" class="form-control" placeholder="Please insert vendor addres" value="{{ $val->address }}">{{ $val->address }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vendor Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select data-plugin="customselect" class="form-control" name="vendor_code[]">
                                                                <option value="">Select Vendor</option>
                                                                <option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>
                                                                <option value="RK100002">PT. SARANA MULTI CORPORA</option>
                                                                <option value="RK10003">PT. TRIINTI INTERNATIONAL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">PIC Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Corporate:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="email[]" class="form-control" placeholder="Please insert email" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Vendor Address:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres" value=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded save-tender" data-bind="{{ $data->proses_st }}">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="aanwidjzing">
                                <form id="form-aanwidjzing" enctype="multipart/form-data" method="post" action="{{ route('save.aanwidjzing') }}">
                                    @csrf
                                    <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                    <div class="add-aanwidjzing">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="10%" rowspan="2">N0</th>
                                                            <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" colspan="2">KEHADIRAN</th>
                                                            <th width="40%" rowspan="2">KETERANGAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="10%">YA</th>
                                                            <th width="10%">TIDAK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @php
                                                        $tender_list = DB::table('public.trx_peserta_tender as a')
                                                        ->select('a.peserta_tender_id','a.sp3_id','a.vendor_code','a.phone_number','a.pic_name','a.email_corporate',
                                                        'a.address','b.i_lifnr','b.e_name')
                                                        ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                        ->get();
                                                        $i = 1;
                                                        @endphp
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                {{ $val->e_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[{{$val->peserta_tender_id}}]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->peserta_tender_id}}]" id="verif_{{$val->peserta_tender_id}}_ya" value="1">
                                                                    <label class="custom-control-label" for="verif_{{$val->peserta_tender_id}}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="verif_value[{{$val->peserta_tender_id}}]" id="verif_{{$val->peserta_tender_id}}_tidak" value="0">
                                                                    <label class="custom-control-label" for="verif_{{$val->peserta_tender_id}}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="verif_note[{{$val->peserta_tender_id}}]" id="verif_{{ $val->peserta_tender_id}}_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berita Acara Aanwidjzing:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="file" name="file_berita_acara" class="form-control" id="file-draft">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-sm btn-rounded save-aanwidjzing">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="dokumen-penawaran">
                                <div class="add-dokumen-penawaran">
                                    @php
                                    $rks = \App\Models\DraftRks::where('sp3_id', $data->sp3_id)->first();
                                    @endphp
                                    @if($rks->metode == '1_sampul')
                                    @if($data->proses_st == 'PROSES_PDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.document-penawaran') }}" method="post" id="form-dokumen-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="3">PEMASUKAN DOKUMEN PENAWARAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="30%" rowspan="2">DOKUMEN (Admin, Teknis, Harga)</th>
                                                            <th width="30%" rowspan="2">TANGGAL SUBMIT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @php
                                                        $tender_list = DB::table('public.trx_peserta_tender as a')
                                                        ->select('a.peserta_tender_id','a.sp3_id','a.vendor_code','a.phone_number','a.pic_name','a.email_corporate',
                                                        'a.address','b.i_lifnr','b.e_name')
                                                        ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                        ->get();
                                                        $i = 1;
                                                        @endphp
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->e_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_dokumen[]" class="form-control" id="file-dokumen">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="dok_admin_date" name="dok_admin_date[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Pemasukan Dokumen:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_berita_acara" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <textarea name="catatan_berita_acara" id="catatan_berita_acara" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @elseif($data->proses_st == 'PROSES_PPDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="3">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="30%" rowspan="2">DOKUMEN (Admin, Teknis dan Harga)</th>
                                                        <th width="30%" rowspan="2">TANGGAL PEMBUKAAN DOKUMEN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_dokumen','b.i_lifnr','b.e_name')
                                                    ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->e_name }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_dokumen) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_dokumen }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks ml-1">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="3">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="30%" rowspan="2">DOKUMEN (Admin, Teknis dan Harga)</th>
                                                        <th width="30%" rowspan="2">TANGGAL PEMBUKAAN DOKUMEN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_dokumen','b.i_lifnr','b.e_name')
                                                    ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->e_name }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_dokumen) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_dokumen }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dokumen:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks ml-1">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @elseif($rks->metode == '2_sampul')
                                    @if($data->proses_st == 'PROSES_PDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.document-penawaran') }}" method="post" id="form-dokumen-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id }}" />
                                                <input type="hidden" name="metode" value="{{ $rks->metode }}" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">PEMASUKAN DOKUMEN PENAWARAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                            <th width="20%" rowspan="2">TANGGAL SUBMIT (Admin & Teknis)</th>
                                                            <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                            <th width="20%" rowspan="2">TANGGAL SUBMIT (Harga)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @php
                                                        $tender_list = DB::table('public.trx_peserta_tender as a')
                                                        ->select('a.peserta_tender_id','a.sp3_id','a.vendor_code','a.phone_number','a.pic_name','a.email_corporate',
                                                        'a.address','b.i_lifnr','b.e_name')
                                                        ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                        ->get();
                                                        @endphp
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->e_name }}
                                                                <input type="hidden" id="vendor_code" name="vendor_code[]" value="{{ $val->vendor_code }}" />
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_teknis[]" class="form-control" id="file-draft">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_submit_teknis[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <input type="file" name="file_harga[]" class="form-control" id="file-draft">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_submit_harga[]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Pemasukan Dok. Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Pemasukan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan Pemasukan Dok. Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan Pemasukan Dok. Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @elseif($data->proses_st == 'PROSES_PPDP')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Harga)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_teknis','a.tanggal_submit_harga','a.file_teknis','a.file_harga','b.i_lifnr','b.e_name')
                                                    ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->e_name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_teknis) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_teknis }}">
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_harga) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_harga }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve" data-bind="{{ $data->proses_st }}">Approve</button>
                                                    <button type="button" class="btn btn-warning btn-sm btn-rounded reject ml-1">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">PEMBUKAAN DOKUMEN PENAWARAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Admin & Teknis)</th>
                                                        <th width="20%" rowspan="2">DOKUMEN (Harga)</th>
                                                        <th width="20%" rowspan="2">TANGGAL PEMBUKAAN (Harga)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    @php
                                                    $dokumen = DB::table('public.trx_document_penawaran as a')
                                                    ->select('a.document_penawaran_id','a.sp3_id','a.vendor_code','a.tanggal_submit_dokumen', 'a.file_dokumen',
                                                    'a.tanggal_submit_teknis','a.tanggal_submit_harga','a.file_teknis','a.file_harga','b.i_lifnr','b.e_name')
                                                    ->join('mst_mmpm.tm_vendor as b','a.vendor_code','b.i_lifnr')
                                                    ->get();
                                                    @endphp
                                                    @foreach($dokumen as $doc)
                                                    <tr>
                                                        <td>
                                                            {{ $doc->e_name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_teknis) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_teknis }}">
                                                        </td>
                                                        <td>
                                                            <a href="{{ asset('file/sp3/', $doc->file_harga) }}">
                                                                Dokumen Penawaran File.pdf <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran" value="{{ $doc->tanggal_submit_harga }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Admin & Teknis:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Catatan Pembukaan Dok. Harga:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>

                            <div class="tab-pane" id="evaluasi-dokumen">
                                <div class="add-evaluasi-dokumen">
                                    <div class="row">
                                        <!-- <label for="exampleInputEmail1">if 1 Sampul:</label> -->
                                        <div class="col-md-12">
                                            <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-penawaran" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="1_sampul" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="5">EVALUASI DOKUMEN PENAWARAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="30%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="20%" rowspan="2">TANGGAL EVALUASI</th>
                                                            <th width="10%" rowspan="2">LOLOS</th>
                                                            <th width="10%" rowspan="2">TIDAK LOLOS</th>
                                                            <th width="30%" rowspan="2">CATATAN EVALUASI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->e_name }}
                                                                <input type="hidden" name="vendor_code[{{$val->peserta_tender_id }}]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_evaluasi_dokumen[{{$val->peserta_tender_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->peserta_tender_id }}]" id="penilaian_{{$val->peserta_tender_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="penilaian_{{$val->peserta_tender_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_dokumen[{{$val->peserta_tender_id }}]" id="penilaian_{{$val->peserta_tender_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="penilaian_{{$val->peserta_tender_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_evaluasi[{{ $val->peserta_tender_id }}]" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Evaluasi Dokumen:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                        <!-- <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('save.evaluasi-penawaran') }}" method="post" id="form-evaluasi-harga" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" value="{{ $data->sp3_id}}" />
                                                <input type="hidden" name="metode" value="2_sampul" />
                                                <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                    <thead style="text-align: center">
                                                        <tr>
                                                            <th width="100%" colspan="9">EVALUASI DOKUMEN PENAWARAN</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                            <th width="10%" rowspan="2">TANGGAL EVALUASI (Admin & Teknis)</th>
                                                            <th width="5%" rowspan="2">LOLOS</th>
                                                            <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                            <th width="20%" rowspan="2">CATATAN EVALUASI (Admin & Teknis)</th>
                                                            <th width="10%" rowspan="2">TANGGAL EVALUASI (Harga)</th>
                                                            <th width="5%" rowspan="2">LOLOS</th>
                                                            <th width="5%" rowspan="2">TIDAK LOLOS</th>
                                                            <th width="20%" rowspan="2">CATATAN EVALUASI (Harga)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="vertical-align: top">
                                                        @foreach($tender_list as $val)
                                                        <tr>
                                                            <td>
                                                                {{ $val->e_name }}
                                                                <input type="hidden" name="vendor_code[{{$val->peserta_tender_id }}]" value="{{ $val->vendor_code}}" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_admin[{{$val->peserta_tender_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->peserta_tender_id }}]" id="admin_{{$val->peserta_tender_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="admin_{{$val->peserta_tender_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_admin[{{$val->peserta_tender_id }}]" id="admin_{{$val->peserta_tender_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="admin_{{$val->peserta_tender_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_admin[{{$val->peserta_tender_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tanggal_harga[{{$val->peserta_tender_id }}]" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->peserta_tender_id}}]" id="harga_{{$val->peserta_tender_id }}_ya" value="1">
                                                                    <label class="custom-control-label" for="harga_{{$val->peserta_tender_id }}_ya">Ya</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" name="penilaian_harga[{{$val->peserta_tender_id}}]" id="harga_{{$val->peserta_tender_id }}_tidak" value="0">
                                                                    <label class="custom-control-label" for="harga_{{$val->peserta_tender_id }}_tidak">Tidak</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <textarea name="catatan_harga[{{$val->peserta_tender_id }}]" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Evaluasi Admin & Teknis:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Evaluasi Harga:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                        <!-- <button type="button" class="btn btn-warning btn-sm btn-rounded reject-rks">Reject</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="klarifikasi">
                                <div class="add-klarifikasi">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="5">KLARIFIKASI, KONFIRMASI DAN NEGOISASI</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="20%" rowspan="2">PESERTA TENDER</th>
                                                        <th width="20%" rowspan="2">TANGGAL KKN</th>
                                                        <th width="15%" rowspan="2">HPS/PAGU</th>
                                                        <th width="15%" rowspan="2">HARGA NEGOISASI</th>
                                                        <th width="30%" rowspan="2">CATATAN KKN</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Memo Internal Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pemenang">
                                <div class="add-pemenang">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pemenang Tender:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">Select Vendor</option>
                                                                <option value="PT. ABC">PT. ABC</option>
                                                                <option value="PT. MAJU MUNDUR">PT. MAJU MUNDUR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Hasil Pelelangan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Penetapan Pemenang note"></textarea>
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
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="summary">
                                <div class="add-summary">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <table class="table datatable-pagination" id="tabel-data" width="100%">
                                                <thead style="text-align: center">
                                                    <tr>
                                                        <th width="100%" colspan="6">SUMMARY PENGADAAN BARANG DAN JASA</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%" rowspan="2">KEGIATAN</th>
                                                        <th width="15%" rowspan="2">STATUS</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI KALENDER</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI KERJA</th>
                                                        <th width="10%" rowspan="2">UNCONTROLLED</th>
                                                        <th width="10%" rowspan="2">TOTAL HARI</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: top">
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 1
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Peserta Tender 2
                                                        </td>
                                                        <td>
                                                            <input type="text" id="dok_admin_date" name="dok_admin_date" class="form-control datepicker" placeholder="Tanggal Pemasukan Penawaran">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">
                                                        </td>
                                                        <td>
                                                            <textarea name="verif_1_note" id="verif_1_note" class="form-control" placeholder="Penjelasan"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded add-button-vendor"><i class="uil uil-plus"></i> Add Form</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label><br>
                                                <label for="exampleInputEmail1"></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Berita Acara Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Memo Internal Klarifikasi, Konfirmasi dan Negoisasi:</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded approve-rks">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="summary">
                                <div class="add-summary">
                                    <div class="row">
                                        <label for="exampleInputEmail1"></label>
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1" class="font-weight-bold"></label>
                                            <form action="#" id="form-draftrks" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="sp3_id" id="sp3_id" />
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">ID Pengadaan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">1.616</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Judul Pengadaan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Pengadaan ABC</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Berita Acara Hasil Pelelangan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="file_draft" class="form-control" id="file-draft">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <img src="{{ asset('assets/images/preview.png') }}" alt="" height="25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Catatan:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <textarea name="catatan_rks[]" class="form-control" placeholder="Please insert Penetapan Pemenang note"></textarea>
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
                                    </div>
                                </div>
                            </div>

                        </div>
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
        // SAVE DATA RKS
        $('body').on('click', '.save-rks', function() {
            var file_penawaran = $("#file-penawaran")[0].files;
            var file_dokumen = $("#file-dokumen")[0].files;
            var sp3_id = $("#sp3-id").val();
            var tanggal_rks = $("#tanggal-rks").val();
            var metode_dokumen = $("#metode-dokumen").val();
            var catatan_rks = $("#catatan-rks").val();
            var formData = new FormData();
            formData.append('file_penawaran', file_penawaran[0])
            formData.append('file_dokumen', file_dokumen[0])
            formData.append('tanggal_rks', tanggal_rks)
            formData.append('metode_dokumen', metode_dokumen)
            formData.append('catatan_rks', catatan_rks)
            formData.append('sp3_id', sp3_id)
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
                    Swal.fire({
                        title: 'RKS Saved',
                        text: "File change status to Reviewing RKS!",
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload()
                        }
                    })
                } else {
                    Swal.fire(
                        'RKS failed Save!',
                        'Your RKS has failed save.',
                        'error'
                    )
                }
            })
        })

        // APPROVE RKS
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve ?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('procurement.approve') }}",
                        method: "GET",
                        dataType: 'JSON',
                        data: {
                            type: 'approve',
                            sp3_id: '{{ $data->sp3_id }}',
                            proses_st: $(this).attr('data-bind')
                        },
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: 'Your penawaran is approved',
                                text: "File change status to Evaluasi Penawaran!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        }
                    })
                }
            })
        })

        // SAVE AANDWIDJZING
        $("#form-aanwidjzing").submit(function(e) {
            alert("Aaanwidjing saved !")
        });

        // SAVE DOKUMEN PENAWARAN
        $("#form-dokumen-penawaran").submit(function(e) {
            alert("Dokumen Penawaran saved !")
        });

        // SAVE EVALUASI 
        $("#form-evaluasi-penawaran").submit(function(e) {
            alert("Evaluasi Penawaran saved !")
        })
        $("#form-evaluasi-harga").submit(function(e) {
            alert("Evaluasi Penawaran saved !")
        })
        // SAVE FORM TENDER
        $('body').on('click', '.save-tender', function() {
            Swal.fire({
                title: 'Are you sure save Tender?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('save.tender') }}",
                        method: "post",
                        dataType: 'JSON',
                        data: $("#tender").serializeArray()
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: 'Peserta Tender Saved',
                                text: "File change status to Pelaksanaan Aanwidjzing!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        }
                    })
                }
            })
        })

        // SAVE DOKUMEN PENAWARAN
        $("body").on('click', '.reject', function(e) {
            Swal.fire({
                title: 'Are you sure reject dokumen penawaran?',
                text: "Your dokumen penawaran will back to pengumuman pengadaan !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('reject.pengadaan') }}",
                        method: "get",
                        dataType: 'JSON',
                        data: {
                            sp3_id: '{{ $data->sp3_id }}'
                        },
                    }).done(function(response) {
                        if (response.status == 200) {
                            Swal.fire({
                                title: 'Success rejected',
                                text: "File change status to Pengumuman Pengadaan!",
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload()
                                }
                            })
                        }
                    })
                }
            })
        });


        // ADD FORM TENDER
        $('body').on('click', '.add-button-vendor', function() {
            var body = '<div class="row border-top">'
            body += '<div class="col-md-12">'
            body += '<div class="form-group">'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Vendor Name:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<select data-plugin="customselect" class="form-control" name="vendor_code[]">'
            body += '<option value="">Select Vendor</option>'
            body += '<option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>'
            body += '<option value="RK100002">PT. SARANA MULTI CORPORA</option>'
            body += '<option value="RK10003">PT. TRIINTI INTERNATIONAL</option>'
            body += '</select>'
            body += '</div>'
            body += '</div>'

            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Phone Number:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">PIC Name:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Email Corporate:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<input type="text" name="email[]" class="form-control" placeholder="Please insert email">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-2">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Vendor Address:</label>'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-3">'
            body += '<div class="form-group">'
            body += '<textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $(".add-vendor").append(body)
        })
    })
</script>
@endpush