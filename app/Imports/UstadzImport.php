<?php

namespace App\Imports;

use App\Models\Ustadz;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');
class UstadzImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ustadz([
            'nama'      => $row['Nama'],
            'mapel'     => $row['Mata Pelajaran'],
            'nip'     => $row['NIP'],
            'tempat_lahir'     => $row['Tempat Lahir'],
            'tanggal_lahir'     => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Tanggal Lahir']),
            'alamat'     => $row['Alamat'],
        ]);
    }
}
