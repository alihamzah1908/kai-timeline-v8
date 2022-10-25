<style>
    body {
        font-size: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    #table-evaluasi {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table-evaluasi td,
    #table-evaluasi th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table-evaluasi tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table-evaluasi tr:hover {
        background-color: #ddd;
    }

    #table-evaluasi th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #fff;
        color: black;
    }
</style>

<body>
    <table width="100%">
        <tr>
            <th width="10%">
            </th>
            <th width="70%">
            </th>
            <th width="4%" height="2em" style="background-color: red;">
            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th width="10%">
                <img src="data:image/png;base64, {{ base64_encode(file_get_contents(public_path('assets/images/Logo_KAI_Commuter.svg.png'))) }}" width="100px">
            </th>
            <th width="70%">
                SURAT PERINTAH PELAKSANAAN PENGADAAN<br />
                FR.KCJ.00175
            </th>
            <th width="20%">
            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th align="left">
                UNIT LOGISTIK
            </th>
            <th style="width: 20%;"></th>
            <th style="width: 30%;" align="left">
                <table>
                    <tr>
                        <td>TGL TERBIT</td>
                        <td>:</td>
                        <!-- <td>{{ date('d M Y', strtotime($data->created_at)) }}</td> -->
                        <td>09 NOVEMBER 2015</td>
                    </tr>
                    <tr>
                        <td>NO.TERBIT</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>NO. REVISI</td>
                        <td>:</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TGL REVISI</td>
                        <td>:</td>
                        <!-- <td>-</td> -->
                        <td>10 JULI 2019</td>
                    </tr>
                </table>
            </th>
        </tr>
    </table>
    <hr />
    <table width="100%">
        <tr>
            <th>
                <!-- <img src="{{ asset('assets/images/rks.png') }}"> -->
            </th>
            <th>
                <u>SURAT PERINTAH PELAKSANAAN PENGADAAN</u><br />
                NOMOR : {{ $data->no_sp3 }}
            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th>
                <!-- <img src="{{ asset('assets/images/rks.png') }}"> -->
            </th>
            <td style="width: 30%;" align="left">
                <!-- Tanggal ini nanti di update ke tanggal approval -->
                Jakarta, {{date('d M Y', strtotime($data->updated_at)) }} <br />
                Kepada Yth., <br />
                Panitia Pengadaan <br />
                {{ $timeline ? strtoupper($timeline->pbj) : '' }} <br />
                Di Tempat
            </td>
        </tr>
    </table>
    <?php
    $text = [];
    $total = [];
    foreach ($npp as $val) {
        $text[] = 'No. ' . $val->no_pr . ' tanggal ' . $val->tanggal_pr . ' senilai Rp. ' . number_format($val->nominal_pr_ip,2,',','.') . ',-' . '';
        $total[] = $val->nominal_pr_ip;
        $no_pr = is_numeric($val->no_pr);
    }
    ?>
    <table width="100%">
        <tr>
            <td>
                <table width="100%">
                    <tr valign="top">
                        <td width="1%">1. </td>
                        <td width="8%" colspan="2">Menunjuk : </td>
                    </tr>
                    <tr valign="top">
                        <td></td>
                        <td width="1%">a. </td>
                        <td>MI dari {{ $data->department_cd }} ke CUGP {{ $data->no_mi }} tanggal 13 Juli 2022 perihal : <b>{{ $data->perihal_mi }}</b>;</td>
                    </tr>
                    <tr valign="top">
                        <td></td>
                        <td width="1%">b. </td>
                        <td>
                            @if($no_pr == false)Ijin Prinsip @elseif($no_pr == true) PR/NPD ACC*) @endif  {{ implode(' dan ', $text) }} dengan total Rp. {{ number_format(array_sum($total), 2,',','.') }} -
                            {{ terbilang(array_sum($total)) }} (rupiah)
                        </td>
                    </tr>
                </table>
                <table width="100%" style="margin-top: 3em">
                    <tr>
                        <td width="1%">2.</td>
                        <td>Sehubungan hal tersebut diatas, agar dilaksanakan proses :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <center>
                                <b>{{ $data->judul_pengadaan }};<br />
                                    Pagu Dana Rp. {{ number_format(array_sum($total), 2,',','.') }} -
                                </b>
                            </center>
                        </td>
                    </tr>
                </table>
                <table width="100%" style="margin-top: 3em">
                    <tr>
                        <td width="1%">3.</td>
                        <td>Terlampir kami sampaikan Dokumen Pendukung lainnya :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. RAB </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Nota Persetujuan Dana / @if($no_pr == false)Ijin Prinsip @elseif($no_pr == true) PR/NPD @endif</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Justifikasi Kebutuhan Barang/Jasa; </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. KAK</td>
                    </tr>
                </table>
                <table width="100%" style="margin-top: 3em">
                    <tr>
                        <td width="1%">4.</td>
                        <td>Dalam proses pengadaan mengacu kepada Petunjuk Pelaksanaan Pengadaan Barang/Jasa Nomor SK.016/CU/KCI/IV/2019 tanggal 02 April 2019</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>SK.010/CU/KCI/II/2020 tanggal 14 Februari 2020 dan Peraturan Direksi PT KCI Nomor 030.1/PERDIR/AL.106/VII/KCI/2021 tanggal 26 Juli 2021. </td>
                    </tr>
                </table>
                <table width="100%" style="margin-top: 3em">
                    <tr>
                        <td width="1%">5.</td>
                        <td>Mohon kabar setelah diperoleh hasil, terima kasih.</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th align="left">
            </th>
            <th style="width: 20%;"></th>
            <td>
                <table align="center">
                    <tr>
                        <td>PLT Logistic Planning, Evaluation, and Import Manager (unit pengusul)</td>
                    </tr>
                </table>
                <table style="margin-top: 7em;" align="center">
                    <tr>
                        <td>
                            <u><b>SUBAGYO</b></u><br />
                            <b>NIPP. 41264</b>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" style="page-break-before: always;">
        <tr>
            <th width="10%">
            </th>
            <th width="70%">
            </th>
            <th width="4%" height="2em">
                FORM G1
            </th>
        </tr>
        <tr>
            <th width="10%">
                <img src="data:image/png;base64, {{ base64_encode(file_get_contents(public_path('assets/images/Logo_KAI_Commuter.svg.png'))) }}" width="100px">
            </th>
            <th width="70%">
                FORM KENDALI PENERBITAN SP3<br />
                (SURAT PERINTAH PELAKSANAAN PENGADAAN)
            </th>
            <th width="20%">
            </th>
        </tr>
    </table>
    <table width="100%" style="margin-top: 20px;">
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                JUDUL PENGADAAN
            </th>
            <th style="vertical-align: top">
                :
            </th>
            <td>{{ $data->judul_pengadaan }}</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                NO ID
            </th>
            <th>
                :
            </th>
            <td>1610</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                NILAI
            </th>
            <th>
                :
            </th>
            <td>Rp. {{ number_format(array_sum($total), 2,',','.') }} -</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                UNIT
            </th>
            <th>
                :
            </th>
            <td>{{ $data->division_cd }}</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                METODE PENGADAAN
            </th>
            <th>
                :
            </th>
            <td>{{ ($data->type_metode == 1 ? ' Penunjukan Langsung' : ($data->type_metode == 2 ? ' Pemilihan Langsung' : 'Pelelangan Terbuka')) }}</td>
        </tr>
    </table>
    </div>
    <?php
    if ($evaluasi) {
        $arr = $evaluasi->toArray();
        $arr0 = array_key_exists('0', $arr) ? $arr[0]["pemenuhan"] : '';
        $arr0ket = array_key_exists('0', $arr) ? $arr[0]["keterangan"] : '';
        $nomor0 = array_key_exists('0', $arr) ? $arr[0]["nomor_evaluasi"] : '';
        $tanggal0 = array_key_exists('0', $arr) ? $arr[0]["tanggal_evaluasi"] : '';
        $arr1 = array_key_exists('1', $arr) ? $arr[1]["pemenuhan"] : '';
        $arr1ket = array_key_exists('1', $arr) ? $arr[1]["keterangan"] : '';
        $nomor1 = array_key_exists('1', $arr) ? $arr[1]["nomor_evaluasi"] : '';
        $tanggal1 = array_key_exists('1', $arr) ? $arr[1]["tanggal_evaluasi"] : '';
        $arr2 = array_key_exists('2', $arr) ? $arr[2]["pemenuhan"] : '';
        $arr2ket = array_key_exists('2', $arr) ? $arr[2]["keterangan"] : '';
        $nomor2 = array_key_exists('2', $arr) ? $arr[2]["nomor_evaluasi"] : '';
        $tanggal2 = array_key_exists('2', $arr) ? $arr[2]["tanggal_evaluasi"] : '';
        $arr3 = array_key_exists('3', $arr) ? $arr[3]["pemenuhan"] : '';
        $arr3ket = array_key_exists('3', $arr) ? $arr[3]["keterangan"] : '';
        // $nomor3 = array_key_exists('3', $arr) ? $arr[3]["nomor_evaluasi"] : '';
        $nomor3 = array_key_exists('3', $arr) ? $arr[3]["nomor_evaluasi"] : '';
        $tanggal3 = array_key_exists('3', $arr) ? $arr[3]["tanggal_evaluasi"] : '';
        $arr4 = array_key_exists('4', $arr) ? $arr[4]["pemenuhan"] : '';
        $arr4ket = array_key_exists('4', $arr) ? $arr[4]["keterangan"] : '';
        // $nomor4 = array_key_exists('4', $arr) ? $arr[4]["nomor_evaluasi"] : '';
        $nomor4 = array_key_exists('4', $arr) ? $arr[4]["nomor_evaluasi"] : '';
        $tanggal4 = array_key_exists('4', $arr) ? $arr[4]["tanggal_evaluasi"] : '';
        $arr5 = array_key_exists('5', $arr) ? $arr[5]["pemenuhan"] : '';
        $arr5ket = array_key_exists('5', $arr) ? $arr[5]["keterangan"] : '';
        $nomor5 = array_key_exists('5', $arr) ? $arr[5]["nomor_evaluasi"] : '';
        // $nomor5 = array_key_exists('5', $arr) ? $arr[5]["nomor_evaluasi"] : '';
        $tanggal5 = array_key_exists('5', $arr) ? $arr[5]["tanggal_evaluasi"] : '';
        $arr6 = array_key_exists('6', $arr) ? $arr[6]["pemenuhan"] : '';
        $arr6ket = array_key_exists('6', $arr) ? $arr[6]["keterangan"] : '';
        $nomor6 = array_key_exists('6', $arr) ? $arr[6]["nomor_evaluasi"] : '';
        $tanggal6 = array_key_exists('6', $arr) ? $arr[6]["tanggal_evaluasi"] : '';
        $arr7 = array_key_exists('7', $arr) ? $arr[7]["pemenuhan"] : '';
        $arr7ket = array_key_exists('7', $arr) ? $arr[7]["keterangan"] : '';
        $nomor7 = array_key_exists('7', $arr) ? $arr[7]["nomor_evaluasi"] : '';
        $tanggal7 = array_key_exists('7', $arr) ? $arr[7]["tanggal_evaluasi"] : '';
        $arr8 = array_key_exists('8', $arr) ? $arr[8]["pemenuhan"] : '';
        $arr8ket = array_key_exists('8', $arr) ? $arr[8]["keterangan"] : '';
        $nomor8 = array_key_exists('8', $arr) ? $arr[8]["nomor_evaluasi"] : '';
        $tanggal8 = array_key_exists('8', $arr) ? $arr[8]["tanggal_evaluasi"] : '';
        $arr9 = array_key_exists('9', $arr) ? $arr[9]["pemenuhan"] : '';
        $arr9ket = array_key_exists('9', $arr) ? $arr[9]["keterangan"] : '';
        $nomor9 = array_key_exists('9', $arr) ? $arr[9]["nomor_evaluasi"] : '';
        $tanggal9 = array_key_exists('9', $arr) ? $arr[9]["tanggal_evaluasi"] : '';
        $arr10 = array_key_exists('10', $arr) ? $arr[10]["pemenuhan"] : '';
        $arr10ket = array_key_exists('10', $arr) ? $arr[10]["keterangan"] : '';
        $nomor10 = array_key_exists('10', $arr) ? $arr[10]["nomor_evaluasi"] : '';
        $tanggal10 = array_key_exists('10', $arr) ? $arr[10]["tanggal_evaluasi"] : '';
        $arr11 = array_key_exists('11', $arr) ? $arr[11]["pemenuhan"] : '';
        $arr11ket = array_key_exists('11', $arr) ? $arr[11]["keterangan"] : '';
        $nomor11 = array_key_exists('11', $arr) ? $arr[11]["nomor_evaluasi"] : '';
        $tanggal11 = array_key_exists('11', $arr) ? $arr[11]["tanggal_evaluasi"] : '';
        $arr12 = array_key_exists('12', $arr) ? $arr[12]["pemenuhan"] : '';
        $arr12ket = array_key_exists('12', $arr) ? $arr[12]["keterangan"] : '';
        $nomor12 = array_key_exists('12', $arr) ? $arr[12]["nomor_evaluasi"] : '';
        $tanggal12 = array_key_exists('12', $arr) ? $arr[12]["tanggal_evaluasi"] : '';
        $nilai_pr = [];
        $arrcheck = [];
        foreach ($npp as $val) {
            $nilai_pr[] = $val->no_pr;
            $arrcheck[] = is_numeric($val->no_pr);
        }
        $checkNumeric = array_sum($arrcheck);
                                                    
    }else{
        $checkNumeric = false;
    }
    ?>
    <table id="table-evaluasi" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 20%;">URAIAN DOKUMEN</th>
                <th style="width: 10%;">NOMOR</th>
                <th>TANGGAL</th>
                <th style="width: 10%;" colspan="2">PEMENUHAN</th>
                <th style="width: 5%;">KETERANGAN/KELENGKAPAN/KESESUAIAN </th>
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
                <th style='width:10%'></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>MI Permohonan Pengadaan dari User</td>
                <td>@if($evaluasi){!! $nomor0 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal0 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr0 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr0 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr0ket }}@endif</td>
            </tr>
            @if($checkNumeric > 0)
            <tr>
                <td>2.</td>
                <td>NPD</td>
                <td>@if($evaluasi){!! $nomor1 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal1 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr1 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr1 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr1ket }}@endif</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Permohonan Dana dari User (NPD)</td>
                <td>@if($evaluasi){!! $nomor2 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal2 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr2 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr2 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr2ket }}@endif</td>
            </tr>
            @else
            <tr>
                <td>2.</td>
                <td>IJIN PRINSIP</td>
                <td></td>
                <td></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr1 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr1 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr1ket }}@endif</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Permohonan Dana dari User (Ijin Prinsip)</td>
                <td>@if($evaluasi){!! $nomor2 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal2 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr2 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr2 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr2ket }}@endif</td>
            </tr>
            @endif
            <tr>
                <td>4.</td>
                <td>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</td>
                <td>@if($evaluasi){!! $nomor3 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal3 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr3 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr3 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr3ket }}@endif</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</td>
                <td>@if($evaluasi){!! $nomor4 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal4 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr4 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr4 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr4ket }}@endif</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR</td>
                <td>@if($evaluasi){!! $nomor5 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal5 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr5 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr5 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr5ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>a. MPPL</td>
                <td>@if($evaluasi){!! $nomor6 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal6 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr6 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr6 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr6ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Denda</td>
                <td>@if($evaluasi){!! $nomor7 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal7 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr7 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr7 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr7ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>c. Metode Pembayaran</td>
                <td>@if($evaluasi){!! $nomor8 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal8 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr8 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr8 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr8ket }}@endif</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>RKIP</td>
                <td>@if($evaluasi){!! $nomor9 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal9 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr9 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr9 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr9ket }}@endif</td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>PML/PNL</center>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Permohonan Persetujuan Direksi</td>
                <td>@if($evaluasi){!! $nomor10 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal10 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr10 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr10 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr10ket }}@endif</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Persetujuan Direksi (Justifikasi PNL)</td>
                <td>@if($evaluasi){!! $nomor11 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal11 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr11 == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr11 == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr11ket }}@endif</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tr>
            <td>Catatan</td>
            <td>:</td>
            <td>@if($evalnotes) {{ $evalnotes->catatan_evaluasi }} @endif</td>
        </tr>
    </table>
</body>