<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use App\Imports\InfoImport;
use Maatwebsite\Excel\Facades\Excel;

class InfoController extends Controller
{

    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        set_time_limit(0);

        Excel::import(new InfoImport,request()->file('file'));

        return back();
    }
}
