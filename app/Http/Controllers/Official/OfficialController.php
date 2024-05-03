<?php

namespace App\Http\Controllers\Official;


use App\Models\Officials\Official;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficialController extends Controller
{
    public function index() {
        $officials = Official::orderBy('created_at', 'desc')->get();

        return view('officials.index', [
            'officials' => $officials
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
        ]);

        Official::create($formFields);

        return redirect()->back();
    }

    public function update(Request $request, Official $official) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
        ]);

        $official->update($formFields);

        return redirect('/official')->with('message', 'Official updated successfully.');
    }

    public function destroy(Official $official) {
        $official->delete();

        return back()->with('message', 'Official deleted successfully.');
    }
}
