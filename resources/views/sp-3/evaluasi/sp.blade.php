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
                <td>@if($evaluasi){{$evaluasi[0]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[0]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[0]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[0]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[0]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>NPD</td>
                <td>@if($evaluasi){{$evaluasi[1]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[1]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[1]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[1]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[1]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>IJIN PRINSIP</td>
                <td>@if($evaluasi){{$evaluasi[2]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[2]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[2]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[2]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[2]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Permohonan Dana dari User (NPD/Ijin Prinsip)</td>
                <td>@if($evaluasi){{$evaluasi[3]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[3]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[3]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[3]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[3]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>No RAB, Tanggal RAB dan Judul Pengadaan di RAB</td>
                <td>@if($evaluasi){{$evaluasi[4]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[4]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[4]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[4]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[4]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>No Justifikasi, Tanggal Justifikasi dan Judul Pengadaan di Justifikasi</td>
                <td>@if($evaluasi){{$evaluasi[5]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[5]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[5]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[5]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[5]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>No KAK/TOR, Tanggal KAK/TOR dan Judul Pengadaan di KAK/TOR</td>
                <td>@if($evaluasi){{$evaluasi[6]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[6]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[6]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[6]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[6]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>a. MPPL</td>
                <td>@if($evaluasi){{$evaluasi[7]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[7]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[7]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[7]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[7]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Denda</td>
                <td>@if($evaluasi){{$evaluasi[8]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[8]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[8]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[8]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[8]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td></td>
                <td>b. Metode Pembayaran</td>
                <td>@if($evaluasi){{$evaluasi[9]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[9]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[9]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[9]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[9]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>8</td>
                <td>RKIP</td>
                <td>@if($evaluasi){{$evaluasi[10]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[10]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[10]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[10]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[10]->keterangan }}@endif</td>
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
                <td>@if($evaluasi){{$evaluasi[11]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[11]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[11]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[11]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[11]->keterangan }}@endif</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Persetujuan Direksi (Justifikasi PNL)</td>
                <td>@if($evaluasi){{$evaluasi[12]->nomor_evaluasi }}@endif</td>
                <td>@if($evaluasi){{$evaluasi[12]->tanggal_evaluasi }}@endif</td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[12]->pemenuhan == 'Ya' ? ' checked' : ' ' }}@endif/></td>
                <td><input type="checkbox" @if($evaluasi){{$evaluasi[12]->pemenuhan == 'Tidak' ? ' checked' : ' ' }}@endif/></td>
                <td>@if($evaluasi){{$evaluasi[12]->keterangan }}@endif</td>
            </tr>
        </tbody>
    </table>
</body>