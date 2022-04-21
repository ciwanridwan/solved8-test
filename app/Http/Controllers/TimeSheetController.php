<?php

namespace App\Http\Controllers;

use App\Models\MonthlyActivity;
use App\Models\Staff;
use App\Models\TimeSheet;
use Illuminate\Http\Request;

class TimeSheetController extends Controller
{
    public function create()
    {
        return view('pages.forms');
    }
    public function store(Request $request) 
    {
        $timeAndDesc = new TimeSheet();
        $timeAndDesc->jam = $request->input('jam');
        $timeAndDesc->deskripsi = $request->input('deskripsi');
        // Save Data
        $timeAndDesc->save();

        return redirect('/first-page');
    }

    public function edit($id)
    {
        $timeSheet = TimeSheet::where('id', $id)->first();

        return view('pages.edit')->with('timeSheet', $timeSheet);
    }

    public function update(Request $request, $id)
    {
        $timeSheet = TimeSheet::where('id', $id)->update([
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/first-page');
    }

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
        // Data Staff
        $staff = Staff::where('id', 1)->get();
        
        // passing data from table Monthly Activity
        $monthlyActivities = MonthlyActivity::all(); 
        return view('pages.second')->with('staff', $staff)->with('monthlyActivities', $monthlyActivities);
    }
}
