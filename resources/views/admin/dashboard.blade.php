@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary fw-bold">Patients Dashboard</h1>
        <span class="badge bg-info text-dark"> Total: {{ $appointments->count() }}</span>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Search Form -->
    <form action="{{ route('admin.dashboard') }}" method="GET" class="mb-5">
        <div class="input-group shadow-sm">
            <input type="text" name="search" class="form-control" placeholder="Search by Name or Phone..."
                value="{{ request()->search }}" aria-label="Search patients">
            <button type="submit" class="btn btn-primary px-4">Search</button>
        </div>
    </form>
    @php
        $groupedAppointments = $appointments->groupBy(function ($appointment) {
            return \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y');
        });
    @endphp

    @forelse ($groupedAppointments as $date => $appointmentsByDate)
        <h3 class="text-secondary fw-bold my-4">{{ $date }}</h3>
        <div class="row g-4">
            @foreach ($appointmentsByDate as $appointment)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-semibold">{{ $appointment->name }}</h5>
                            <p class="card-text mb-1"><strong>Phone:</strong> {{ $appointment->phone }}</p>
                            <p class="card-text mb-1"><strong>Age:</strong> {{ $appointment->age }}</p>
                            <p class="card-text mb-1">
                                <strong>Time:</strong>
                                {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y -h:i A') }}
                            </p>
                            <p class="card-text mb-1">
                                <strong>Health Condition:</strong>
                                {{ $appointment->health_condition ?? 'Not Provided' }}
                            </p>
                            <hr class="my-3">
                            <p class="card-text mb-1"><strong>Medicine:</strong>
                                {{ $appointment->patient ? $appointment->patient->medicine : 'Not yet' }}
                            </p>
                            <p class="card-text mb-1"><strong>Notes:</strong>
                                {{ $appointment->patient ? $appointment->patient->doctor_notes : 'Not yet' }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="{{ route('admin.patient.update', $appointment->id) }}"
                               class="btn btn-warning w-100 mb-2 fw-semibold hover-scale">Edit Patient</a>
                            <form action="{{ route('admin.patient.destroy', $appointment->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this patient?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100 fw-semibold hover-scale">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted fs-5">No patients found.</p>
        </div>
    @endforelse
</div>
@endsection
