@extends('layouts.app')

@section('title', 'Edit Patient Details')

@section('content')
  <div class="container py-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-primary fw-bold">Update Patient Details</h2>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
    </div>

    <!-- Validation Errors -->
    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <!-- Form -->
    <div class="card shadow-sm border-0">
      <div class="card-body p-4">
        <form action="{{ route('admin.patient.update', $patient->id) }}" method="POST">
          @csrf
          @method('PUT')

          <!-- Read-only Appointment Information -->
          <h5 class="text-muted mb-3">Appointment Details</h5>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark">Name</label>
              <input type="text" class="form-control bg-light" value="{{ $patient->appointment->name }}" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark">Phone</label>
              <input type="tel" class="form-control bg-light" value="{{ $patient->appointment->phone }}" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark">Age</label>
              <input type="number" class="form-control bg-light" value="{{ $patient->appointment->age }}" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold text-dark">Appointment Date & Time <span class="text-danger">*</span></label>
              <input type="datetime-local" name="appointment_date" class="form-control"
                value="{{ old('appointment_date', date('Y-m-d\TH:i', strtotime($patient->appointment->appointment_date))) }}"
                required>
              @error('appointment_date')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-md-6">
              <label class="form-label fw-bold text-dark">Health Condition <span class="text-danger">*</span></label>
              <textarea name="health_condition" class="form-control" rows="3" required>
                {{ old('health_condition', $patient->appointment->health_condition) }}
              </textarea>
              @error('health_condition')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

          </div>
          <hr class="my-4">
          <div class="row g-3">
            <div class="col-12">
              <label class="form-label fw-bold text-dark">Medicine <span class="text-danger">*</span></label>
              <textarea name="medicine" class="form-control" rows="2" required>{{ old('medicine', $patient->medicine) }}</textarea>
              @error('medicine')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-12">
              <label class="form-label fw-bold text-dark">Doctor Notes <span class="text-danger">*</span></label>
              <textarea name="doctor_notes" class="form-control" rows="3" required>{{ old('doctor_notes', $patient->doctor_notes) }}</textarea>
              @error('doctor_notes')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm hover-scale">Update
              Patient</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
