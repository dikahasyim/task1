<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task1_result3;
 use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExport;

class DataController extends Controller
{
    public function index()
    {
        $data = Task1_result3::paginate(5);
		#$data = Task1_result3::sortByDesc('id_a')->paginate(5);
 
        return view('welcome', ['posts' => $data]);
    }
	public function export($type)
    {
        return Excel::download(new DataExport, 'data.' . $type);
    }
}
