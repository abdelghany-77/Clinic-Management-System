@extends('layouts.app')

@section('title', 'Patient Messages')

@section('content')
  <div class="container">
    <h2 class="mb-4 text-center">📩 Patient Messages</h2>

    @if ($messages->isEmpty())
      <div class="alert alert-info text-center">No messages found.</div>
    @else
      <div class="row">
        @foreach ($messages as $message)
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4 shadow-lg border-0 rounded">
              <div class="card-body">
                <h5 class="card-title text-primary fw-bold text-center">{{ $message->subject }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  <i class="bi bi-person-circle"></i> <strong>Name:</strong> {{ $message->name }}
                </h6>
                <p class="text-secondary"><i class="bi bi-envelope"></i><strong>Email:</strong> {{ $message->email }}</p>
                <p class="card-text text-dark"><strong>Message:</strong> {{ $message->message }}</p>
                <p class="text-muted"><small><i class="bi bi-clock"></i> <strong>Received at:</strong>
                    {{ $message->created_at->format('d M Y, H:i') }}</small></p>
              </div>
              <div class="card-footer bg-light text-end">
                <!-- Delete Form -->
                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this message?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i> Delete
                  </button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>

  <script>
    function confirmDelete(id) {
      if (confirm("Are you sure you want to delete this message?")) {
        window.location.href = "/admin/messages/delete/" + id;
      }
    }
  </script>

@endsection
