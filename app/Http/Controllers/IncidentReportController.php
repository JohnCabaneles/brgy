<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BarangayId;
use Illuminate\Http\Request;
use App\Models\IncidentReport;
use Illuminate\Support\Facades\Auth;

class IncidentReportController extends Controller
{
    public function index()
    {
        $incidentReports = IncidentReport::orderBy('created_at', 'desc')->get();
        $barangayIds = User::orderBy('created_at', 'desc')->get();

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

        $formFields['user_id'] = $user->id;

        IncidentReport::create($formFields);

        return redirect()->route('redirects.success');

    }

    public function show($id)
    {
        $incidentReports = IncidentReport::findOrFail($id);

        return view('incidentReport.show', [
            'incidentReports' => $incidentReports
        ]);

    }

    public function success()
    {
        return view('redirects.success');
    }

}
