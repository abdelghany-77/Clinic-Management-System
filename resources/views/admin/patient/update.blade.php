@extends('layouts.app')

@section('title', 'Edit Patient Details')

@section('content')
<div class="container">
    <h2 class="text-primary mt-4">Update Patient Details</h2>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.patient.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Read-only Appointment Information -->
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" class="form-control" value="{{ $patient->appointment->name }}" >
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Phone</label>
            <input type="tel" class="form-control" value="{{ $patient->appointment->phone }}" >
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Age</label>
            <input type="number" class="form-control" value="{{ $patient->appointment->age }}" >
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Health Condition</label>
            <textarea class="form-control" rows="3" >{{ $patient->appointment->health_condition }}</textarea>
        </div>

        <!-- Doctor Editable Fields -->
        <div class="mb-3">
            <label class="form-label fw-bold">Medicine</label>
            <textarea name="medicine" class="form-control" rows="2" required>{{ $patient->medicine }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Doctor Notes</label>
            <textarea name="doctor_notes" class="form-control" rows="3" required>{{ $patient->doctor_notes }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2 shadow">Update Patient</button>
    </form>
</div>
@endsection
