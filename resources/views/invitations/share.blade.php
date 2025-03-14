<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h3>{{ __('Guest Code') }}</h3>
                </div>

                <div class="card-body text-center">
                    <!-- Display the QR code -->
                    <img src="{{ asset('storage/' . $invitation->qrcode) }}" alt="Invitation QR Code" class="img-fluid mb-3">
                    <p class="text-muted">Scan the QR code to view your invitation details.</p>
                </div>
            </div>
        </div>
    </div>
</div>
