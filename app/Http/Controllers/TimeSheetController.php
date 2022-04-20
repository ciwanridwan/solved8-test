<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\TimeSheet;
use Illuminate\Http\Request;

class TimeSheetController extends Controller
{
    public function firstPage()
    {
        // Data Staff
        $staff = Staff::where('id', 1)->get();

        // Time Sheet
        $timeSheetHarian = TimeSheet::get();
        return view('pages.first')->with('timeSheetHarian', $timeSheetHarian)->with('staff', $staff);
    }

    public function secondPage()
    {
        return view('pages.second');
    }
}
