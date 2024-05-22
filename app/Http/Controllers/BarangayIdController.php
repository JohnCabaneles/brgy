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
        $barangayIds = BarangayId::orderBy('created_at', 'desc')->get();

        return view('barangayId.index', [
            'barangayIds' => $barangayIds,
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
            'contactNumber' => 'string',
            'email' => 'string',
            'address' => 'string',
            'apartment' => 'string',
            'city' => 'string',
            'province' => 'string',
            'zipCode' => 'string',
        ]);

        $brgyIdNumber = 'BRGY_' . str_pad(rand(010101010, 99999990), 4, '0', STR_PAD_LEFT);

        $formFields['user_id'] = auth()->id();
        $formFields['brgy_id'] = $brgyIdNumber;

        BarangayId::create($formFields);

        return back()->with('message', 'Barangay Id created sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangayId $barangayId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangayId $barangayId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangayId $barangayId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brgyIds = BarangayId::findOrFail($id);

        $brgyIds->delete();

        return back()->with('success', 'Barangay Id deleted successfully!');
    }
}
