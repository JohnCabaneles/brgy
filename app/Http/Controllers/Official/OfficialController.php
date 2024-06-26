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
            'gender' => 'required',
            'age' => 'required',
            'idNumber' => 'required',
            'position' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Official::create($formFields);

        return redirect()->back();
    }

    public function edit(Official $official) {
        return view('officials.edit', ['officials' => $official]);
    }

    public function update(Request $request, Official $official) {

        $formFields = $request->validate([
            'firstName' => 'string',
            'lastName' => 'string',
            'gender' => 'string',
            'age' => 'string',
            'idNumber' => 'string',
            'position' => 'string',
            'contactNumber' => 'string',
            'email' => 'string',
        ]);

        $official->update($formFields);

        return redirect('/officials')->with('message', 'Official updated successfully!');
    }

    public function destroy(Official $official) {
        $official->delete();

        return back()->with('message', 'Official deleted successfully.');
    }
}
