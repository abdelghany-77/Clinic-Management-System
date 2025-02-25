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

        if (date('N', strtotime($request->appointment_date)) == 5) {
            return back()->withErrors(['appointment_date' => 'The clinic is closed on Fridays.']);
        }
        Appointment::create($request->all());
        return redirect()->route('appointment.thankyou')->with('success', 'Your appointment is booked! Please arrive 15 minutes earlier.');
    }

    
}
