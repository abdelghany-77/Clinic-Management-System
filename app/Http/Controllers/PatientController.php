<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // Show all patients
    public function index()
    {
        $patients = Patient::all();
        return view('admin.dashboard', compact('patients'));
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('admin.patient.show', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'health_condition' => 'required|string',
            'medicine' => 'required|string',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update([
            'health_condition' => $request->health_condition,
            'medicine' => $request->medicine,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Patient details updated.');
    }
}
