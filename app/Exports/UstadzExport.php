<?php

namespace App\Exports;

use App\Models\Ustadz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class UstadzExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ustadz::select("nama", "mapel", "nip", "tempat_lahir", "tanggal_lahir", "alamat")->get();
    }

    public function headings(): array
    {
        return ["Nama", "Mata Pelajaran", "NIP", "Tempat Lahir", "Tanggal Lahir", "Alamat"];
    }

    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            // 'C' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
        ];
    }
}
