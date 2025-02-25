@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
  <div class="container">
    <h1 class="mt-4 text-primary text-center">Patients</h1>

    @if (session('success'))
      <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <!-- Search Form -->
    <form action="{{ route('admin.dashboard') }}" method="GET" class="mb-4">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by Name or Phone..."
          value="{{ request()->search }}">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    <!-- Patient Cards -->
    <div class="row">
      @forelse ($appointments as $appointment)
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title text-primary">{{ $appointment->name }}</h5>
              <p class="card-text"><strong>Phone:</strong> {{ $appointment->phone }}</p>
              <p class="card-text"><strong>Age:</strong> {{ $appointment->age }}</p>
              <p class="card-text"><strong>Appointment Date:</strong>
                {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y - h:i A') }}</p>
              <p class="card-text"><strong>Health Condition:</strong>
                {{ $appointment->health_condition ?? 'Not Provided' }}</p>
              <hr>
              <p class="card-text"><strong>Medicine:</strong>
                {{ $appointment->patient ? $appointment->patient->medicine : 'N/A' }}</p>
              <p class="card-text"><strong>Doctor Notes:</strong>
                {{ $appointment->patient ? $appointment->patient->doctor_notes : 'N/A' }}</p>
              <a href="{{ route('admin.patient.update', $appointment->id) }}" class="btn btn-warning m-1 w-100">Edit
                Patient</a>
              <form action="{{ route('admin.patient.destroy', $appointment->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this patient?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm m-1 w-100">
                  <i class="bi bi-trash"></i> Delete
                </button>
              </form>


            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p class="text-muted">No patients found.</p>
        </div>
      @endforelse
    </div>
  </div>
  <script>
    function confirmDelete(id) {
      if (confirm("Are you sure you want to delete this message?")) {
        window.location.href = "/admin/messages/delete/" + id;
      }
    }
  </script>
@endsection

<!-- Custom CSS -->
<style>
  /* Card Styling */
  .card {
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
  }

  .card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
  }

  /* Buttons */
  .btn-warning {
    border-radius: 5px;
    font-size: 16px;
  }
</style>
