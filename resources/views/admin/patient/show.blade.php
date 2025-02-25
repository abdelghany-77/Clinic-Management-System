@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Patient Details</h1>
    <div class="card p-4">
        <p><strong>Name:</strong> {{ $patient->name }}</p>
        <p><strong>Phone:</strong> {{ $patient->phone }}</p>
        <p><strong>Age:</strong> {{ $patient->age }}</p>
        <p><strong>Appointment Date:</strong> {{ $patient->appointment_date }}</p>
        <p><strong>Health Condition:</strong> {{ $patient->health_condition ?? 'Not Provided' }}</p>
        <p><strong>Medicine:</strong> {{ $patient->medicine ?? 'Not Prescribed' }}</p>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Patient Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.patient.update', $patient->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Health Condition</label>
                            <textarea name="health_condition" class="form-control" required>{{ $patient->health_condition }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Medicine</label>
                            <input type="text" name="medicine" class="form-control" required value="{{ $patient->medicine }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
