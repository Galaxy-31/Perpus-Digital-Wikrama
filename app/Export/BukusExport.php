<?php

namespace App\Exports;

use App\Http\Controllers\BukuController;
use App\Models\buku;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukusExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }

    public function map($data): array
    {
        return[
            $data->id,
            $data->IUD,
            $data->judul,
            $data->pengarang,
            $data->penerbit,
            $data->kategori,
            $data->tahun,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nis Siswa',
            'Judul Buku',
            'Nama Pengarang',
            'Nama Penerbit',
            'Kategori',
            'Tahun',
        ];
    }
}