<?php

namespace App\Exports;

use App\Models\Stulist;
use Maatwebsite\Excel\Concerns\FromCollection;

class StulistExport implements FromCollection
{
    public function collection()
    {
        return Stulist::all();
    }
}
