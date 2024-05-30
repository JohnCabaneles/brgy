<?php

namespace App\Http\Controllers\Permit;

use App\Models\User;
use App\Models\Permit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userPermitController extends Controller
{
    public function index()
    {
        $permits = Permit::orderBy('created_at', 'desc')->get();
        $user = auth()->user();

        return view('userPermit.index', [
            'permits' => $permits,
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'businessName' => 'string',
            'location' => 'string',
            'owner' => 'string',
        ]);

        $formFields['user_id'] = auth()->id();

        Permit::create($formFields);

        return redirect()->route('redirects.success');
    }

    public function success()
    {
        return view('redirects.success');
    }
}
