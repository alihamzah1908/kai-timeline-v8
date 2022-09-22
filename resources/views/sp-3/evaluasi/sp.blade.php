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
            <th>
                <!-- <img src="{{ asset('assets/images/rks.png') }}"> -->
            </th>
            <th>
                SURAT PERINTAH PELAKSANAAN PENGADAAN<br />
                FR.KCJ.00175
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
                TGL TERBIT &nbsp;&nbsp;&nbsp;&nbsp;: 09 NOVEMBER 2015 <br />
                NO.TERBIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1 <br />
                NO. REVISI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 2 <br />
                TGL REVISI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 10 JULI 2019
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
                NOMOR : 093/REN-LOG/KCI/VII/2022
            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th>
                <!-- <img src="{{ asset('assets/images/rks.png') }}"> -->
            </th>
            <td style="width: 30%;" align="left">
                Jakarta, 18 - Juli - 2022 <br />
                Kepada Yth., <br />
                Panitia Pengadaan <br />
                SARANA / NON SARANA <br />
                Di Tempat
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>
                1. &nbsp; Menunjuk : <br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp; a. MI dari COH ke CUG No.23/MI/COH/KCI/VII/2022 tanggal 13 Juli 2022 perihal : Permohonan Proses Pengadaan <b>{{ $data->judul_pengadaan }}</b>; <br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp; b. Ijin Prinsip/PR/NPD ACC*) No. 2100074947 tanggal 6 Juni 2022 senilai Rp. 710.188.121,- dan No.2100074949 tanggal 6 Juni 2022 senilai
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.12.249.243,- dengan total Rp. 722.437.364 (tujuh ratus dua puluh dua juta empat ratus tiga puluh tujuh ribu tiga ratus enam puluh empat rupiah).
                <br />
                <br />
                <br />
                <br />
                <br />
                2. &nbsp; Sehubungan hal tersebut diatas, agar dilaksanakan proses : <br /><br />
                <center><b>{{ $data->judul_pengadaan }};<br />
                        Pagu Dana Rp. {{ number_format($data->nilai_pr, 2)}},-
                    </b></center>
                <br />
                <br />
                <br />
                <br />
                <br />
                3. &nbsp; Terlampir kami sampaikan Dokumen Pendukung lainnya : <br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. RAB<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Nota Persetujuan Dana<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Justifikasi Kebutuhan Barang/Jasa;<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. KAK
                <br />
                <br />
                <br />
                <br />
                4. &nbsp; Dalam proses pengadaan mengacu kepada Petunjuk Pelaksanaan Pengadaan Barang/Jasa Nomor SK.016/CU/KCI/IV/2019 tanggal 02 April 2019,
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SK.010/CU/KCI/II/2020 tanggal 14 Februari 2020 dan Peraturan Direksi PT KCI Nomor 030.1/PERDIR/AL.106/VII/KCI/2021 tanggal 26 Juli 2021.
                <br />
                <br />
                <br />
                <br />
                5. &nbsp; Mohon kabar setelah diperoleh hasil, terima kasih.
            </td>
            <th align="right">

            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th align="left">
            </th>
            <th style="width: 20%;"></th>
            <td>
                PLT Logistic Planning, Evaluation, and Import Manager (unit pengusul)
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <center><u><b>SUBAGYO</b></u><br />
                    <b>NIPP. 41264</b></center>
            </td>
        </tr>
    </table>
    <table width="100%" style="page-break-before: always;">
        <tr>
            <th>
                <!-- <img src="{{ asset('assets/images/rks.png') }}"> -->
            </th>
            <th>
                FORM KENDALI PENERBITAN SP3<br />
                (SURAT PERINTAH PELAKSANAAN PENGADAAN)
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
            <td>{{ number_format($data->nilai_pr, 2) }}</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                UNIT
            </th>
            <th>
                :
            </th>
            <td>{{ $data->directorate_cd . '/' . $data->division_cd . '/' . $data->department_cd }}</td>
        </tr>
        <tr>
            <th align="left" width="200" style="vertical-align: top">
                METODE PENGADAAN
            </th>
            <th>
                :
            </th>
            <td>{{ $data->type_metode }}</td>
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
        $nomor3 = array_key_exists('3', $arr) ? $arr[3]["nomor_evaluasi"] : '';
        $tanggal3 = array_key_exists('3', $arr) ? $arr[3]["tanggal_evaluasi"] : '';
        $arr4 = array_key_exists('4', $arr) ? $arr[4]["pemenuhan"] : '';
        $arr4ket = array_key_exists('4', $arr) ? $arr[4]["keterangan"] : '';
        $nomor4 = array_key_exists('4', $arr) ? $arr[4]["nomor_evaluasi"] : '';
        $tanggal4 = array_key_exists('4', $arr) ? $arr[4]["tanggal_evaluasi"] : '';
        $arr5 = array_key_exists('5', $arr) ? $arr[5]["pemenuhan"] : '';
        $arr5ket = array_key_exists('5', $arr) ? $arr[5]["keterangan"] : '';
        $nomor5 = array_key_exists('5', $arr) ? $arr[5]["nomor_evaluasi"] : '';
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
    }
    ?>
    <table id="table-evaluasi" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th>URAIAN DOKUMEN</th>
                <th>NOMOR</th>
                <th>TANGGAL</th>
                <th colspan="2">PEMENUHAN</th>
                <th>KETERANGAN/KELENGKAPAN/KESESUAIAN </th>
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
                <td><input type="checkbox" @if($evaluasi) {{ $arr[0] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[0] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr0ket }}@endif</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>NPD</td>
                <td>@if($evaluasi){!! $nomor1 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal1 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[1] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[1] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr1ket }}@endif</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>IJIN PRINSIP</td>
                <td>@if($evaluasi){!! $nomor2 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal2 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[2] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[2] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr2ket }}@endif</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Permohonan Dana dari User (NPD/Ijin Prinsip)</td>
                <td>@if($evaluasi){!! $nomor3 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal3 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr[3] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[3] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr3ket }}@endif</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</td>
                <td>@if($evaluasi){!! $nomor4 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal4 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr[4] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[4] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr4ket }}@endif</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</td>
                <td>@if($evaluasi){!! $nomor5 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal5 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr[5] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[5] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr5ket }}@endif</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR</td>
                <td>@if($evaluasi){!! $nomor6 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal6 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{$arr[6] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[6] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr6ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>a. MPPL</td>
                <td>@if($evaluasi){!! $nomor7 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal7 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[7] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi){{ $arr[7] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr7ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Denda</td>
                <td>@if($evaluasi){!! $nomor8 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal8 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[8] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[8] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr8ket }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Metode Pembayaran</td>
                <td>@if($evaluasi){!! $nomor9 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal9 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[9] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[9] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr9ket }}@endif</td>
            </tr>
            <tr>
                <td>8</td>
                <td>RKIP</td>
                <td>@if($evaluasi){!! $nomor10 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal10 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[10] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[10] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr10ket }}@endif</td>
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
                <td>9.</td>
                <td>Permohonan Persetujuan Direksi</td>
                <td>@if($evaluasi){!! $nomor11 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal11 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[11] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[11] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr11ket }}@endif</td>
            </tr>
            <tr>
                <td>10</td>
                <td>@if($evaluasi){!! $nomor12 !!}@endif</td>
                <td>@if($evaluasi){{ $tanggal12 }}@endif</td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[12] == 'Ya' ? ' checked' : ' ' }}@endif /></td>
                <td><input type="checkbox" @if($evaluasi) {{ $arr[12] == 'Tidak' ? ' checked' : ' ' }}@endif /></td>
                <td>@if($evaluasi){{$arr12ket }}@endif</td>
            </tr>
        </tbody>
    </table>
</body>