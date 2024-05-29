<?php

namespace App\Http\Controllers;

use App\Models\BarangayId;
use Illuminate\Http\Request;
use App\Models\IncidentReport;
use Illuminate\Support\Facades\Auth;

class IncidentReportController extends Controller
{
    public function index()
    {
        $incidentReports = IncidentReport::orderBy('created_at', 'desc')->get();
        $barangayIds = BarangayId::orderBy('created_at', 'desc')->get();

        return view('incidentReport.index', [
            'incidentReports' => $incidentReports,
            'barangayIds' => $barangayIds
        ]);
    }

    public function store(Request $request)
    {

        $user = auth()->user();

        $formFields = $request->validate([
            'subject' => 'string',
            'message'=> 'string',
        ]);

        $barangayId = $user->barangayId()->first();

        $formFields['user_id'] = $user->id;
        $formFields['brgy_id'] = $barangayId->id;

        IncidentReport::create($formFields);

        return back()->with('message', 'Incident Report created sucessfully');

    }

    public function show($id)
    {
        $incidentReports = IncidentReport::findOrFail($id);

        return view('incidentReport.show', [
            'incidentReports' => $incidentReports
        ]);

    }





}
