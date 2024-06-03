<?php

namespace App\Http\Controllers\Permit;

use App\Models\Permit;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permits = Permit::orderBy('created_at', 'desc')->paginate(10);

        return view('permit.index', [
            'permits' => $permits
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $permits = Permit::findOrFail($id);

        return view('permit.show', [
            'permits' => $permits,
        ]);
    }

    public function downloadPdf($id)
    {
        $permits = Permit::findOrFail($id);
        
        $pdf = Pdf::loadView('pdf.permit_details', compact('permits'));
        return $pdf->download('business_permit.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permit $permit)
    {
        $formFields = $request->validate([
            'payment' => 'string',
        ]);

        $permit->update($formFields);

        return redirect()->back()->with('message', 'Barangay Id successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permit $permit)
    {
        $permit->delete();

        return back()->with('message', 'Permit deleted successfully.');
    }
}
