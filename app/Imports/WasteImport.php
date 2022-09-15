<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WasteImport implements WithHeadingRow, ToCollection
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
            $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($val["tanggal"]);
            if ($val["tanggal"]) {
                $date1 = (array) $date1;
                $strDate = date('Y-m-d', strtotime($date1["date"]));
            } else {
                $strDate = null;
            }
            $data = \App\Models\WarehouseWaste::where('tanggal', $strDate)
                ->where('uraian', $val["uraian"])
                ->where('proses_pengangkutan', $val["proses_pengangkutan"])
                ->first();
            if ($data) {
                $obj = \App\Models\WarehouseWaste::findOrFail($data->warehouse_waste_id);
            } else {
                $obj = new \App\Models\WarehouseWaste();
            }
            $obj->tanggal = $strDate;
            $obj->uraian = $val["uraian"];
            $obj->proses_pengangkutan = $val["proses_pengangkutan"];
            $obj->harga_kontrak = $val["harga_kontrak"];
            $obj->realisasi_qty = $val["realisasi_qty"];
            $obj->realisasi_penjualan = $val["realisasi_penjualan"];
            $obj->total_penjualan = $val["total_penjualan"];
            $obj->estimasi_user = $val["estimasi_user"];
            $obj->save();
        }
    }
}
