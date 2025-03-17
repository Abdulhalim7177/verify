@vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
                    <p class="text-muted">Scan the QR code to view invitation details.</p>
                </div>
            </div>
        </div>
    </div>
</div>
