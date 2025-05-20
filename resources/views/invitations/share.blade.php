<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        width: 100%;
        padding: 1rem;
        box-sizing: border-box;
    }
    .card {
        border-radius: 18px;
        border: none;
        background: #fff;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
        width: 100%;
        max-width: 420px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .card-header {
        border-radius: 18px 18px 0 0;
        background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
        color: #fff;
        padding: 1.5rem 1rem;
        width: 100%;
        text-align: center;
    }
    .card-header h3 {
        margin: 0;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .card-body {
        padding: 2rem 1.5rem;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .card-body img {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        box-shadow: 0 2px 8px rgba(37,99,235,0.08);
        max-width: 180px;
        margin-bottom: 1.5rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: auto;
    }
    .card-body h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #64748b;
        font-weight: 500;
        text-align: center;
    }
    .card-body h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #1e293b;
        letter-spacing: 2px;
        text-align: center;
        word-break: break-all;
    }
    .btn {
        display: inline-block;
        font-weight: 400;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.375rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        margin: 0.5rem 0;
    }
    .btn-success {
        color: #fff;
        background-color: #198754;
        border-color: #198754;
    }
    .btn-success:hover {
        color: #fff;
        background-color: #157347;
        border-color: #146c43;
    }
    .btn-info {
        color: #fff;
        background-color: #0dcaf0;
        border-color: #0dcaf0;
    }
    .btn-info:hover {
        color: #fff;
        background-color: #31d2f2;
        border-color: #25cff2;
    }

    /* Responsive styles */
    @media (max-width: 600px) {
        .container {
            padding: 0.5rem;
        }
        .card {
            max-width: 100%;
            min-width: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .card-header {
            padding: 1.5rem 1rem;
        }
        .card-body {
            padding: 1.5rem 1rem;
        }
        .card-body img {
            max-width: 100%;
            margin-bottom: 1.5rem;
        }
        .card-body h2 {
            font-size: 2.5rem;
        }
        .btn {
            width: 100%;
            font-size: 1.3rem;
            padding: 0.75rem 1rem;
        }
    }
</style>
<div class="container">
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
            navigator.clipboard.writeText(token).then(() => {
                alert('Token copied to clipboard!');
            }).catch((error) => {
                alert('Error copying token: ' + error);
            });
        }
    }
</script>
