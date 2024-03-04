<?php

namespace App\Imports;

use App\Models\Sample;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Request;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SamplesImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sample([
            'user_id' => $row['id_nhan_vien'] ?? null,
            'url' => $row['duong_dan'] ?? null,
            'type'=> $row['loai'] ?? null,
            'name'=> $row['ten'] ?? null,
            'age'=> $row['tuoi'] ?? null,
            'sex'=> $row['gioi_tinh'] ?? null,
            'job'=> $row['nghe_nghiep'] ?? null,
            'note'=> $row['ghi_chu'] ?? null,
            'theme'=> $row['chu_de'] ?? null,
            'area'=> $row['khu_vuc'] ?? null,
            'rate'=> $row['danh_gia'] ?? null
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
