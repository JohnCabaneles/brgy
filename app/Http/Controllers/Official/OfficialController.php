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
}
