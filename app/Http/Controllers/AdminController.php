<?php

namespace App\Http\Controllers;

use App\Notifications\AppointmentReminder;
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
        $query = Appointment::with('patient')->orderBy('appointment_date', 'asc');
        if ($request->has('search')) {
            $search = $request->input('search');
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
        $appointment = Appointment::findOrFail($id);
        $patient = Patient::where('appointment_id', $id)->first();
        if (!$patient) {
            $patient = Patient::create([
                'appointment_id' => $appointment->id,
                'medicine' => '',
                'doctor_notes' => '',
            ]);
        }
        return view('admin.patient.update', compact('appointment', 'patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'health_condition' => 'string',
            'appointment_date' => 'required|date|after:today',
            'medicine' => 'required|string',
            'doctor_notes' => 'required|string',
        ]);
        // Update patient details
        $patient = Patient::findOrFail($id);
        $patient->update([
            'medicine' => $request->medicine,
            'doctor_notes' => $request->doctor_notes,
        ]);
        // Update appointment details
        $appointment = Appointment::findOrFail($patient->appointment_id);
        $appointment->update([
            'health_condition' => $request->health_condition,
            'appointment_date' => $request->appointment_date,
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Patient and appointment details updated successfully!');
    }

    // Delete appointment
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Appointment deleted successfully!');
    }

    public function sendReminders()
    {
        $appointments = Appointment::where('appointment_date', '>', now())
            ->where('appointment_date', '<=', now()->addDay())
            ->get();

        foreach ($appointments as $appointment) {
            $appointment->notify(new AppointmentReminder($appointment));
        }

        return redirect()->back()->with('success', 'Reminders sent successfully!');
    }

    public function calendar()
    {
        $appointments = Appointment::all()->map(function ($appointment) {
            return [
                'title' => $appointment->name,
                'start' => $appointment->appointment_date,
            ];
        });
        return view('admin.calendar', compact('appointments'));
    }
}

