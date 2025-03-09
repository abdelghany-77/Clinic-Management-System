<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointment');
    }

    // Store new appointment
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[A-Za-z ]+$/',
            'phone' => 'required',
            'age' => 'required|integer|min:1|max:80',
            'appointment_date' => 'required|date|after:today',
            'health_condition' => 'nullable|string',
        ]);

        $appointmentDateTime = strtotime($request->appointment_date);
        $lastDayOfMonth = strtotime('last day of this month');

        // Prevent booking on Fridays
        if (date('N', $appointmentDateTime) == 5) {
            return back()->withErrors(['appointment_date' => 'The clinic is closed on Fridays.']);
        }

        // Ensure appointment is within the current month
        if ($appointmentDateTime > $lastDayOfMonth) {
            return back()->withErrors(['appointment_date' => 'Appointments cannot be booked beyond this month.']);
        }

        // Extract the time from the appointment date
        $appointmentTime = date('H:i', $appointmentDateTime);

        // Check if the appointment time is within the allowed range
        if ($appointmentTime < '06:00' || $appointmentTime > '23:00') {
            return back()->withErrors(['appointment_date' => 'Appointments must be between 6 AM and 11 PM.']);
        }

        // Check for an existing appointment at the same time
        $existingAppointment = Appointment::where('appointment_date', $request->appointment_date)->first();
        if ($existingAppointment) {
            return back()->withErrors(['appointment_date' => 'This appointment slot is already booked. Please choose another time.']);
        }

        // Create the appointment
        Appointment::create($request->all());
        return redirect()->route('appointment.thankyou')
            ->with('success', 'Your appointment is booked! Please arrive 15 minutes earlier.');
    }
}
