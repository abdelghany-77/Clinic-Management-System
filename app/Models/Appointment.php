<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'phone', 'age', 'appointment_date', 'health_condition'];

    // Link Appointment to Patient record
    public function patient()
    {
        return $this->hasOne(Patient::class, 'appointment_id', 'id');
    }

    // Link Appointment to patient
    public function user()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    // Link Appointment to Doctor
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
