<?php 
function tgl_indos($tanggal)
{
	$bulan = array(
		1 => 'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        body,
        table {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        th {
            height: 30px;
        }

        @media print {}
    </style>
</head>

<body>
    <table border="0" width="100%" style="margin-top: 5em">
        <tr>
            <th>
                <!-- <img src="{{ asset('assets/images/Logo_KAI_Commuter.svg.png') }}" alt="" height="45" /> -->
            </th>
            <th>SURAT KEPUTUSAN<br />
                DIREKSI PT KERETA COMMUTER INDONESIA<br />
                NOMOR : {{ $spr ? $spr->nomor_spr : '' }} <br /><br />
                TENTANG<br />
                PENUNJUKAN REKANAN SELAKU PELAKSANA KEGIATAN <br />
                KONSULTAN {{ $data ? strtoupper($data->judul_pengadaan) : '' }}
            </th>
            <th>
            </th>
        </tr>
    </table>
    <table border="0" width="100%">
        @php 
        $tgl_penetapan = $vendor ? date('Y-m-d', strtotime($vendor->created_at)) : '';
        @endphp 
        <thead>
            <tr align="left">
                <th style="width: 10%" valign="top">MENUNJUK </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%" valign="top">
                    Surat Penawaran Harga dari {{ $vendor ? $vendor->vendor_name : '' }} Nomor : SRT-229/INFRAS-VI/BAW/2022, tanggal {{ tgl_indos($tgl_penetapan) }}.
                </td>
            </tr>
            <tr align="left">
                <th style="width: 10%" valign="top">MENINMBANG </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%" valign="top">Setelah diadakan penelitian dengan seksama dari harga penawaran setelah dilakukan negosiasi sebesar
                    Rp. {{ $negosiasi ? number_format($negosiasi->harga_negosiasi,2,',','.') : '' }} (terbilang : {{ terbilang($negosiasi ? $negosiasi->harga_negosiasi : '') }} rupiah) merupakan harga yang wajar dan dapat diterima sesuai dengan spesifikasi yang sudah ditentukan
                    dan sudah melalui tahapan pelelangan sesuai dengan ketentuan
                </td>
            </tr>
            <tr align="left">
                <th style="width: 10%" valign="top">MEMPERHATIKAN </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%" valign="top"></td>
            </tr>
        </thead>
    </table>
    <table border="0" width="100%" style="margin-left: 1%;">
        <thead>
            <tr align="left">
                <td style="width: 50%" valign="top">1. Nama Kegiatan</td>
                <td style="width: 2%;" valign="top">: </td>
                <td style="width: 40%" valign="top">
                    <b>
                        {{ strtoupper($data ? $data->judul_pengadaan : '') }}
                    </b>
                </td>
            </tr>
        </thead>
    </table>
    <table border="0" width="100%">
        <thead>
            <tr align="left">
                <th style="width: 10%" valign="top">MENETAPKAN </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%" style="text-align: justify;">
                    Kepada <b>{{ $vendor ? $vendor->vendor_name : '' }}</b> yang beralamat di {{ $vendor ? $vendor->street : '' }}, {{ $vendor ? $vendor->city : '' }} {{ $vendor ? $vendor->postal_code : '' }}, diberikan pekerjaan <b>{{ $data ? strtoupper($data->judul_pengadaan) : '' }}</b>, 
                    dengan harga sebesar <b>Rp. {{ $negosiasi ? number_format($negosiasi->harga_negosiasi,2,',','.') : '' }} (terbilang : {{ terbilang($negosiasi ? $negosiasi->harga_negosiasi : '') }} rupiah) </b> berdasarkan harga satuan yang telah ditentukan, dengan Jangka waktu pelaksanaan
                    pekerjaan {{ $spr ? $spr->total_hari_kerja : '' }} ({{ terbilang($spr ? $spr->total_hari_kerja : '')}}) hari kalender dan atau masa pekerjaan konsultan pengawas mengikuti
                    masa pekerjaan kontruksi, terhitung sejak Surat Perintah Mulai Pekerjaan atau Kontrak ditandatangani
                </td>
            </tr>
            <tr align="left">
                @php 
                // persentasei 
                $percent = ($negosiasi->harga_negosiasi * 5) / 100;

                // total hari kerja
                $rks = \App\Models\DraftRks::select('created_at')->where('sp3_id', $data->sp3_id)->first();
                $pcp = \App\Models\TrxPenetapanPemenang::select('created_at')->where('sp3_id', $data->sp3_id)->first();
                $rksNew = $rks ? new DateTime($rks->created_at) : new DateTime();
                $pcpNew = $pcp ? new DateTime($pcp->created_at) : new DateTime();
                $interval = $rksNew->diff($pcpNew);
                $days = $interval->days;
                @endphp
                <th style="width: 10%" valign="top">PERTAMA </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%" style="text-align: justify;">
                    Berdasarkan usulan dan penetapan calon pemenang Nomor : 83/LL/NONSAR/KCI/UPP/VIII/2022, tanggal
                    {{ tgl_indos($tgl_penetapan) }} sambil menunggu terbitnya Surat Perjanjian/kontrak <b>{{ $data ? $data->judul_pengadaan : '' }}</b>, 
                    Penyedia Barang/Jasa dapat memulai melakukan persiapan pekerjaan dan menyerahkan
                    Jaminan Pelaksanaan yang dikeluarkan oleh bank umum sesuai yang ditentukan dalam dokumen lelang,
                    sekurang-kurangnya sebesar 5% dari nilai negosiasi atau setara dengan Rp {{ number_format($percent,2,',','.') }} (terbilang : {{ terbilang($percent)}} rupiah) berlaku selama {{ $days }} ({{ terbilang($days) }}) hari kalender.
                </td>
            </tr>
            <tr align="left">
                <th style="width: 10%" valign="top">KEDUA </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%">
                    Segala hal yang berhubungan dengan hak, kewajiban dan pelaksanaan di dalam pekerjaan ini akan diatur
                    dalam Surat Perjanjian/Kontrak.
                </td>
            </tr>
            <tr align="left">
                <th style="width: 10%" valign="top">KETIGA </th>
                <th style="width: 2%;" valign="top">: </th>
                <td style="width: 70%">
                    Surat Perjanjian dimaksud pada butir Kedua akan segera ditandatangani oleh kedua belah pihak.
                </td>
            </tr>
        </thead>
    </table>
    <table border="0" width="100%">
        <thead>
            <tr>
                <td width="40%"></td>
                <td width="20%">Petikan Surat Keputusan ini disampaikan kepada </td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Rekanan </td>
                <td>:</td>
                <td>{{ $vendor ? $vendor->vendor_name : '' }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Nomor NPWP </td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td valign="top">Alamat Rekanan </td>
                <td valign="top">:</td>
                <td valign="top">
                    {{ $vendor ? $vendor->street : '' }}, {{ $vendor ? $vendor->city : '' }} {{ $vendor ? $vendor->postal_code : '' }}
                </td>
            </tr>
        </thead>
    </table>
    <table border="0" width="100%">
        <thead>
            <tr>
                <td width="50%"></td>
                <td>Ditetapkan di </td>
                <td>:</td>
                <td>Jakarta</td>
            </tr>
            <tr>
                <td></td>
                <td>Pada Tanggal </td>
                <td>:</td>
                <td>{{ tgl_indos($tgl_penetapan) }}</td>
            </tr>
        </thead>
    </table>
    <table border="0" width="100%">
        <thead>
            <tr>
                <th width="50%">

                </th>
                <th>
                    PT KERETA COMMUTER INDONESIA<br />
                    a.n. Direksi PT Kereta Commuter Indonesia<br />
                    Logistic Vice President<br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <u>KARINA AMANDA</u><br />
                </th>
            </tr>
        </thead>
    </table>
</body>