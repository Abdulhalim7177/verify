<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pEUijZElLUpfUMUap/ir0HxYWL8QsqnI5i3RFVav0FzJW21WuPBxNa0JfG/W3vXI" crossorigin="anonymous">
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
                    <h3 class="text-muted">Qrcode Token</h3>
                    <h2 class="fw-bold text-dark">{{$invitation->qrcodetoken}}.</h2>
                    @auth
                    <!-- Share URL button -->
                    <button class="btn btn-success mt-3" onclick="sharePage()">Share Page</button>

                    <!-- Share QR Code Token button -->
                    <button class="btn btn-info mt-3" onclick="shareToken()">Share Token</button>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sharePage() {
        const pageUrl = window.location.href;
        if (navigator.share) {
            navigator.share({
                title: document.title,
                url: pageUrl
            }).then(() => {
                alert('Page shared successfully!');
            }).catch((error) => {
                alert('Error sharing the page: ' + error);
            });
        } else {
            // Fallback for browsers that do not support the Web Share API
            navigator.clipboard.writeText(pageUrl).then(() => {
                alert('Page URL copied to clipboard!');
            }).catch((error) => {
                alert('Error copying URL: ' + error);
            });
        }
    }

    function shareToken() {
        const token = "{{ $invitation->qrcodetoken }}";
        if (navigator.share) {
            navigator.share({
                title: 'QR Code Token',
                text: `Here is the QR Code Token: ${token}`
            }).then(() => {
                alert('Token shared successfully!');
            }).catch((error) => {
                alert('Error sharing the token: ' + error);
            });
        } else {
            // Fallback for browsers that do not support the Web Share API
            navigator.clipboard.writeText(token).then(() => {
                alert('Token copied to clipboard!');
            }).catch((error) => {
                alert('Error copying token: ' + error);
            });
        }
    }
</script>
