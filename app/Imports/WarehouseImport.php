<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WarehouseImport implements WithHeadingRow, ToCollection
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
            $data = \App\Models\WarehousePart::where('sloc', $val["sloc"])
                ->where('material', $val["material"])
                ->first();
            if ($data) {
                $obj = \App\Models\WarehousePart::findOrFail($data->warehouse_part_id);
            } else {
                $obj = new \App\Models\WarehousePart();
            }
            $obj->pint = $val["pint"];
            $obj->sloc = $val["sloc"];
            $obj->material = $val["material"];
            $obj->material_description = $val["material_description"];
            $obj->bun = $val["bun"];
            $obj->unrestricted = $val["unrestricted"];
            $obj->value_unrestricted = $val["value_unrestricted"];
            $obj->mtyp = $val["mtyp"];
            $obj->save();
        }
    }
}
