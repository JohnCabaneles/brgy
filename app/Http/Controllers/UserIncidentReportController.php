<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserIncidentReportController extends Controller
{
    public function index()
    {
        return view('userIncidentReport.index');
    }


}
