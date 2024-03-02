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
            'url' => $row['url'] ?? null,
            'type'=> $row['type'] ?? null,
            'name'=> $row['name'] ?? null,
            'age'=> $row['age'] ?? null,
            'sex'=> $row['sex'] ?? null,
            'job'=> $row['job'] ?? null,
            'note'=> $row['note'] ?? null,
            'theme'=> $row['theme'] ?? null,
            'area'=> $row['area'] ?? null,
            'rate'=> $row['rate'] ?? null
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
