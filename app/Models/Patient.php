<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['appointment_id', 'medicine', 'doctor_notes'];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
