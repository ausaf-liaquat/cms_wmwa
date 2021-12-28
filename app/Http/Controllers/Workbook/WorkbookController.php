<?php

namespace App\Http\Controllers\Workbook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workbook;

class WorkbookController extends Controller
{
    public function openWorkbook()
    {
       $workbook = Workbook::where('id',1)->with('topics')->first();
        return view('Workbook.Introduction.topic_introduction', compact('workbook'));
    }
}
