@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
<div class="container text-center mt-5">
    <div class="alert alert-success p-4 rounded shadow-lg">
        <h1 class="text-success fw-bold"><i class="bi bi-check-circle-fill"></i> Thank You!</h1>
        <p class="fs-5">Your appointment has been successfully booked.</p>
        <p class="fw-bold text-danger">Please arrive 15 minutes earlier.</p>
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg rounded-pill shadow-sm mt-3">
            <i class="bi bi-house-door-fill"></i> Return to Home
        </a>
    </div>
</div>
@endsection
