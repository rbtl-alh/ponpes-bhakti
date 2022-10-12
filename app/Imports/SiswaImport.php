<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Siswa([
            'nama'      => $row['Nama'],
            'nisn'     => $row['NISN'],            
            'jenis_kelamin'     => $row['Jenis Kelamin'],            
            'tempat_lahir'     => $row['Tempat Lahir'],
            // 'tanggal_lahir'     => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Tanggal Lahir']),
            'tanggal_lahir'     => $row['Tanggal Lahir'],
            'alamat'     => $row['Alamat'],
        ]);
    }
}
