@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Scan QR Code') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav nav-tabs mb-4" id="scanMethodTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="camera-tab" data-bs-toggle="tab" data-bs-target="#camera-tab-pane" type="button" role="tab" aria-controls="camera-tab-pane" aria-selected="true">
                                <i class="fas fa-camera me-1"></i> Camera Scan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="upload-tab" data-bs-toggle="tab" data-bs-target="#upload-tab-pane" type="button" role="tab" aria-controls="upload-tab-pane" aria-selected="false">
                                <i class="fas fa-upload me-1"></i> Upload Image
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="scanMethodTabsContent">
                        <!-- Camera Scan Tab -->
                        <div class="tab-pane fade show active" id="camera-tab-pane" role="tabpanel" aria-labelledby="camera-tab" tabindex="0">
                            <div class="text-center mb-4">
                                <h4>Position the QR code in front of your camera</h4>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div id="reader" class="mx-auto" style="width: 500px; max-width: 100%; border-radius: 10px; overflow: hidden;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Image Tab -->
                        <div class="tab-pane fade" id="upload-tab-pane" role="tabpanel" aria-labelledby="upload-tab" tabindex="0">
                            <div class="text-center mb-4">
                                <h4>Upload an image with a QR code</h4>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <form id="upload-form" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="qr-image" class="form-label">QR Code Image</label>
                                            <input class="form-control" type="file" id="qr-image" name="qr_image" accept="image/*" required>
                                            <div class="form-text">Upload an image containing a QR code (.jpg, .png, .gif, etc.)</div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class="btn btn-primary">Scan Uploaded Image</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="scan-result" class="d-none">
                                <div id="result-card" class="card">
                                    <div class="card-header" id="result-header">Result</div>
                                    <div class="card-body">
                                        <h5 class="card-title" id="result-title">QR Code Result</h5>
                                        <p class="card-text" id="result-message"></p>
                                        <button id="scan-again" class="btn btn-primary mt-3">Scan Another</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const qrCodeReader = new Html5Qrcode("reader");
        const scanResult = document.getElementById('scan-result');
        const resultMessage = document.getElementById('result-message');
        const scanAgainButton = document.getElementById('scan-again');

        qrCodeReader.start(
            { facingMode: "environment" },
            {
                fps: 10,
                qrbox: 250
            },
            (decodedText) => {
                qrCodeReader.stop();
                scanResult.classList.remove('d-none');
                resultMessage.textContent = decodedText;
            },
            (errorMessage) => {
                console.warn(errorMessage);
            }
        );

        scanAgainButton.addEventListener('click', () => {
            scanResult.classList.add('d-none');
            qrCodeReader.start(
                { facingMode: "environment" },
                {
                    fps: 10,
                    qrbox: 250
                }
            );
        });
    });
</script>
@endsection
