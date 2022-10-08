<?php

namespace App\Exports;

use App\Models\Ustadzah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithMapping;

class UstadzahExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ustadzah::select("nama", "mapel", "nip", "tempat_lahir", "tanggal_lahir", "alamat")->get();
    }

    // public function map($data): array
    // {
    //     return [
    //         $data->nama,
    //         $data->mapel,
    //         $data->nip,
    //         $data->tempat_lahir,
    //         Date::dateTimeToExcel($data->tanggal_lahir),            
    //         $data->alamat,
    //     ];
    // }

    // public function map($project): array
    // {
    //     return [
    //         $project->nama,
    //         Date::stringToExcel($project->tanggal_lahir),
    //     ];
    // }

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
