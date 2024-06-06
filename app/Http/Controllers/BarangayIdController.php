<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BarangayId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BarangayIdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();

        return view('barangayId.index', [
            'barangayIds' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      $formFields = $request->validate([
            'firstName' => 'string',
            'lastName' => 'string',
            'gender' => 'string',
            'age' => 'string',
            'contactNumber' => 'string',
            'email' => 'string',
            'address' => 'string',
            'apartment' => 'string',
            'city' => 'string',
            'province' => 'string',
            'zipCode' => 'string',
            'status' => 'string',
        ]);

        $brgyIdNumber = 'BRGY_' . str_pad(rand(010101010, 99999990), 4, '0', STR_PAD_LEFT);

        $formFields['brgy_id'] = $brgyIdNumber;
        $formFields['password'] = Hash::make('password');

        User::create($formFields);

        return back()->with('message', 'Barangay Id created sucessfully');
    }

    public function show(Request $request) {
        $searchQuery = $request->input('q');

        // Perform the search query using the Product model
        $barangayIds = User::where('brgy_id', 'like', '%' . $searchQuery . '%')->paginate(10);

        return view('barangayId.index', ['barangayIds' => $barangayIds]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('q');

        // Perform the search query using the Product model
        $barangayIds = User::where('brgy_id', 'like', '%' . $searchQuery . '%')->paginate(10);

        return view('barangayId.index', ['barangayIds' => $barangayIds]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('barangayId.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $formFields = $request->validate([
            'firstName' => 'string',
            'lastName' => 'string',
            'gender' => 'string',
            'age' => 'string',
            'contactNumber' => 'string',
            'address' => 'string',
            'apartment' => 'string',
            'city' => 'string',
            'province' => 'string',
            'zipCode' => 'string',
        ]);

        $user->update($formFields);

        return redirect('/barangayId')->with('message', 'Barangay Id successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brgyIds = User::findOrFail($id);

        $brgyIds->delete();

        return back()->with('success', 'Barangay Id deleted successfully!');
    }
}
