<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VisaTravelCheckService;

class VisaController extends Controller
{
    public function check(Request $request, VisaTravelCheckService $visaService)
    {
        $validated = $request->validate([
            'passport_code' => 'required|string|max:10',
            'destination' => 'required|string|max:50',
        ]);
    
        $result = $visaService->checkVisa($validated['passport_code'], $validated['destination']);
        
    
        return view('visa-result', ['result' => $result]);
    }
    
}
