<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InklaringImports implements WithHeadingRow, ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $arr_new = collect();
        foreach ($rows as $row) {
            if ($row->filter()->isNotEmpty()) {
                $arr_new->push($row);
            }
        }
        foreach ($arr_new as $val) {
            $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_kontrak"]);
            $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_jamlak"]);
            $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_hbl"]);
            $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_inv_hbl"]);
            $date5 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_pck_list_hbl"]);
            $date6 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_sktd"]);
            $date7 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_sppb"]);
            $date8 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_dokumen_tambahan_hbl"]);
            $date9 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_cds"]);
            $date10 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_diterima"]);
            $date11 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_bast"]);
            $date12 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tgl_lapor_simodis"]);
            if (
                $val["tgl_kontrak"] || $val["tgl_jamlak"] || $val["tgl_hbl"] || $val["tgl_inv_hbl"] || $val["tgl_pck_list_hbl"]
                || $val["tgl_sktd"] || $val["tgl_sppb"] || $val["tgl_dokumen_tambahan_hbl"] || $val["tgl_cds"] || $val["tgl_diterima"]
                || $val["tgl_bast"] || $val["tgl_lapor_simodis"]
            ) {
                $date1 = (array) $date1;
                $strDate1 = date('Y-m-d', strtotime($date1["date"]));
                $date2 = (array) $date2;
                $strDate2 = date('Y-m-d', strtotime($date2["date"]));
                $date3 = (array) $date3;
                $strDate3 = date('Y-m-d', strtotime($date3["date"]));
                $date4 = (array) $date4;
                $strDate4 = date('Y-m-d', strtotime($date4["date"]));
                $date5 = (array) $date5;
                $strDate5 = date('Y-m-d', strtotime($date5["date"]));
                $date6 = (array) $date6;
                $strDate6 = date('Y-m-d', strtotime($date5["date"]));
                $date7 = (array) $date7;
                $strDate7 = date('Y-m-d', strtotime($date6["date"]));
                $date8 = (array) $date8;
                $strDate8 = date('Y-m-d', strtotime($date7["date"]));
                $date9 = (array) $date9;
                $strDate9 = date('Y-m-d', strtotime($date9["date"]));
                $date10 = (array) $date10;
                $strDate10 = date('Y-m-d', strtotime($date10["date"]));
                $date11 = (array) $date11;
                $strDate11 = date('Y-m-d', strtotime($date11["date"]));
                $date12 = (array) $date12;
                $strDate12 = date('Y-m-d', strtotime($date12["date"]));
            } else {
                $strDate1 = null;
                $strDate2 = null;
                $strDate3 = null;
                $strDate4 = null;
                $strDate5 = null;
                $strDate6 = null;
                $strDate7 = null;
                $strDate8 = null;
                $strDate9 = null;
                $strDate10 = null;
                $strDate11 = null;
                $strDate12 = null;
            }
            $data = \App\Models\Inklaring::where('judul_pengadaan', $val["judul_pengadaan"])
                ->first();
            if ($data) {
                $obj = \App\Models\Inklaring::findOrFail($data->trx_inklaring_id);
            } else {
                $obj = new \App\Models\Inklaring();
            }
            $obj->judul_pengadaan =  $val['judul_pengadaan'];
            $obj->vendor_name = $val['vendor_name'];
            $obj->thn_aggrn_rkap = $val['thn_aggrn_rkap'];
            $obj->kategori_import = $val['kategori_import'];
            $obj->jenis_kontrak = $val['jenis_kontrak'];
            $obj->no_kontrak = $val['no_kontrak'];
            $obj->tgl_kontrak = $strDate1;
            $obj->file_kontrak = $val['file_kontrak'];
            $obj->non_termin = $val['non_termin'];
            $obj->mppl_kontrak = $val["mppl_kontrak"];
            $obj->no_jamlak = $val['no_jamlak'];
            $obj->tgl_jamlak = $strDate2;
            $obj->file_jamlak = $val["file_jamlak"];
            $obj->mppl_jamlak = $val["mppl_jamlak"];
            $obj->start_jamlak = $val["start_jamlak"];
            $obj->end_jamlak = $val["end_jamlak"];
            $obj->ktgr_pmbyrn_lc = $val["ktgr_pmbyrn_lc"];
            $obj->surat_perm_pemb_lc = $val["surat_perm_pemb_lc"];
            $obj->tgl_pemb_lc = $val["tgl_pemb_lc"];
            $obj->no_tgl_lc = $val['no_tgl_lc'];
            $obj->doc_lc = $val["doc_lc"];
            $obj->file_lc = $val['file_lc'];
            $obj->ket_lc = $val["ket_lc"];
            $obj->eta_pengiriman = $val['eta_pengiriman'];
            $obj->eta_tiba = $val['eta_tiba'];
            $obj->no_tgl_hbl = $val['no_tgl_hbl'];
            $obj->tgl_hbl = $strDate3;
            $obj->tgl_inv_hbl = $strDate4;
            $obj->tgl_pck_list_hbl = $strDate5;
            $obj->legal_kci = $val['legal_kci'];
            $obj->tgl_sktd = $strDate6;
            $obj->srt_kuasa_do = $val['srt_kuasa_do'];
            $obj->srt_kuasa_pabean = $val['srt_kuasa_pabean'];
            $obj->tgl_sppb = $strDate7;
            $obj->tgl_dokumen_tambahan_hbl = $val['tgl_dokumen_tambahan_hbl'];
            $obj->keterangan = $val['keterangan'];
            $obj->tgl_cds = $strDate8;
            $obj->tgl_diterima = $strDate9;
            $obj->ket_cds = $val['ket_cds'];
            $obj->tgl_pengujian_bast = $strDate10;
            $obj->tgl_bast = $strDate11;
            $obj->ket_bast = $val['ket_bast'];
            $obj->no_purpose = $val['no_purpose'];
            $obj->tgl_bayar_vendor = $strDate11;
            $obj->ket_pemb = $val['ket_pemb'];
            $obj->no_invoice = $val['no_invoice'];
            $obj->tgl_lapor_simodis = $strDate12;
            $obj->ket_simodis = $val['ket_simodis'];
            $obj->status_monitoring = $val['status_monitoring'];
            $obj->note = $val['note'];
            $obj->save();
        }
    }
}
