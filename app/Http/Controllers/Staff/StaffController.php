<?php

namespace App\Http\Controllers\Staff;

use App\Models\staff\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index() {
        $staffs = Staff::orderBy('created_at', 'desc')->get();

        return view('staffs.index', ['staffs' => $staffs]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'idNumber' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Staff::create($formFields);

        return redirect()->back();
    }

    public function edit(Staff $staff) {
        return view('staffs.edit', ['staffs' => $staff]);
    }

    public function update(Request $request, Staff $staff) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'idNumber' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
        ]);

        $staff->update($formFields);

        return redirect('/staffs')->with('message', 'Staff updated successfully');
    }

    public function destroy(Staff $staff) {
        $staff->delete();

        return back()->with('message', 'Staff deleted successfully');
    }
}
