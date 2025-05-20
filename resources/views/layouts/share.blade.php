@extends('layouts.share')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
        min-height: 100vh;
    }
    .container {
        margin-top: 60px;
    }
    .card {
        border-radius: 18px;
        border: none;
        background: #fff;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    }
    .card-header {
        border-radius: 18px 18px 0 0;
        background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
        color: #fff;
        padding: 1.5rem 1rem;
    }
    .card-header h3 {
        margin: 0;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .card-body {
        padding: 2rem 1.5rem;
    }
    .card-body img {
        border-radius: 12px;
        border: 2px solid #e5e7eb;
        box-shadow: 0 2px 8px rgba(37,99,235,0.08);
        max-width: 180px;
        margin-bottom: 1.5rem;
    }
    .card-body h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #64748b;
        font-weight: 500;
    }
    .card-body h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #1e293b;
        letter-spacing: 2px;
    }
    .btn {
        min-width: 140px;
        font-weight: 600;
        border-radius: 8px;
        transition: background 0.2s, color 0.2s;
        box-shadow: 0 2px 8px rgba(16,185,129,0.08);
    }
    .btn-success {
        background: linear-gradient(90deg, #22d3ee 0%, #16a34a 100%);
        border: none;
        color: #fff;
    }
    .btn-success:hover {
        background: linear-gradient(90deg, #16a34a 0%, #22d3ee 100%);
        color: #fff;
    }
    .btn-info {
        background: linear-gradient(90deg, #818cf8 0%, #0ea5e9 100%);
        border: none;
        color: #fff;
    }
    .btn-info:hover {
        background: linear-gradient(90deg, #0ea5e9 0%, #818cf8 100%);
        color: #fff;
    }
</style>
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
@endsection