<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $query = Appointment::with('patient');

        // Check if a search query is provided
        if ($request->has('search')) {
            $search = $request->input('search');

            // Search by name or phone number
            $query->where('name', 'LIKE', "%$search%")
            ->orWhere('phone', 'LIKE', "%$search%");
        }

        $appointments = $query->get();

        return view('admin.dashboard', compact('appointments'));
    }


    public function showPatient($id)
    {
        $patient = Patient::findOrFail($id);
        return view('admin.patient.show', compact('patient'));
    }


    // Show edit form
    public function edit($id)
    {
        $patient = Patient::where('appointment_id', $id)->first();
        if (!$patient) {
            $appointment = Appointment::findOrFail($id);
            $patient = Patient::create([
                'appointment_id' => $appointment->id,
                'medicine' => '',
                'doctor_notes' => '',
            ]);
        }
        return view('admin.patient.update', compact('patient'));
    }

    // Update patient details
    public function update(Request $request, $id)
    {
        $request->validate([
            'health_condition' => 'string',
            'medicine' => 'required|string',
            'doctor_notes' => 'required|string',
        ]);


        $patient = Patient::findOrFail($id);
        $patient->update([
            'medicine' => $request->medicine,
            'doctor_notes' => $request->doctor_notes,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Patient details updated successfully!');
    }

    // Delete appointment
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Appointment deleted successfully!');
    }

}
