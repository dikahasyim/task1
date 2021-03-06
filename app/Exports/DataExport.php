<?php

namespace App\Exports;

use App\Data;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
		#return Data::all();
		$data = Data::orderBy('id_a', 'asc')
               ->get();
        return $data;
    }
}
