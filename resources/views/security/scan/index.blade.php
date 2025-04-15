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
                                    <form id="upload-form" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="qr-image" class="form-label">QR Code Image</label>
                                            <input class="form-control" type="file" id="qr-image" accept="image/*" required>
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
                                        
                                        <div id="resident-info" class="d-none">
                                            <dl class="row">
                                                <dt class="col-sm-3">Name:</dt>
                                                <dd class="col-sm-9" id="resident-name"></dd>
                                                
                                                <dt class="col-sm-3">Email:</dt>
                                                <dd class="col-sm-9" id="resident-email"></dd>
                                                
                                                <dt class="col-sm-3">Status:</dt>
                                                <dd class="col-sm-9" id="resident-status"></dd>
                                                
                                                <dt class="col-sm-3">Time:</dt>
                                                <dd class="col-sm-9" id="resident-time"></dd>
                                            </dl>
                                        </div>
                                        
                                        <div id="invitation-info" class="d-none">
                                            <dl class="row">
                                                <dt class="col-sm-3">Guest:</dt>
                                                <dd class="col-sm-9" id="guest-name"></dd>
                                                
                                                <dt class="col-sm-3">Host:</dt>
                                                <dd class="col-sm-9" id="host-name"></dd>
                                                
                                                <dt class="col-sm-3">Event Date:</dt>
                                                <dd class="col-sm-9" id="event-date"></dd>
                                                
                                                <dt class="col-sm-3">Event Time:</dt>
                                                <dd class="col-sm-9" id="event-time"></dd>
                                                
                                                <dt class="col-sm-3">Status:</dt>
                                                <dd class="col-sm-9" id="invitation-status"></dd>
                                                
                                                <dt class="col-sm-3">Used At:</dt>
                                                <dd class="col-sm-9" id="used-at"></dd>
                                                
                                                <dt class="col-sm-3">Time:</dt>
                                                <dd class="col-sm-9" id="invitation-time"></dd>
                                            </dl>
                                        </div>
                                        
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
@endsection

@section('scripts')
<script src="https://unpkg.com/html5-qrcode@2.3.4/html5-qrcode.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize variables
        let html5QrCode = null;
        const config = { fps: 10, qrbox: { width: 250, height: 250 } };
        
        // Initialize camera scanner
        function initializeScanner() {
            if (html5QrCode === null) {
                html5QrCode = new Html5Qrcode("reader");
            }
            
            // Start scanning with camera
            html5QrCode.start(
                { facingMode: "environment" },
                config,
                qrCodeSuccessCallback
            ).catch(error => {
                console.error("Unable to start scanner", error);
                alert("Unable to start the camera scanner. Please check your camera permissions or try the 'Upload Image' option.");
            });
        }
        
        // Initialize scanner when the camera tab is shown
        initializeScanner();
        
        // Handle tab changes
        document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(tab => {
            tab.addEventListener('shown.bs.tab', function (event) {
                if (event.target.id === 'camera-tab') {
                    initializeScanner();
                } else if (event.target.id === 'upload-tab') {
                    // Stop scanner when switching to upload tab
                    if (html5QrCode !== null && html5QrCode.isScanning) {
                        html5QrCode.stop().catch(error => {
                            console.error("Unable to stop scanner", error);
                        });
                    }
                }
            });
        });
        
        // QR Code success callback
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            // Stop scanning
            if (html5QrCode !== null && html5QrCode.isScanning) {
                html5QrCode.stop().then(() => {
                    console.log("QR Code scanning stopped.");
                    processQrCodeData(decodedText);
                }).catch((err) => {
                    console.error("Failed to stop QR Code scanner:", err);
                });
            } else {
                processQrCodeData(decodedText);
            }
        };
        
        // Handle image upload form submission
        document.getElementById('upload-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fileInput = document.getElementById('qr-image');
            if (fileInput.files && fileInput.files[0]) {
                const imageFile = fileInput.files[0];
                
                // Create a file reader
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.onload = function() {
                        // Create a canvas and draw the image
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.width = img.width;
                        canvas.height = img.height;
                        context.drawImage(img, 0, 0, img.width, img.height);
                        
                        // Get image data for QR scanning
                        const imageData = canvas.toDataURL('image/jpeg');
                        
                        // Use HTML5 QR Code library to scan the image
                        if (html5QrCode === null) {
                            html5QrCode = new Html5Qrcode("reader");
                        }
                        
                        html5QrCode.scanFile(imageFile, true)
                            .then(decodedText => {
                                processQrCodeData(decodedText);
                            })
                            .catch(error => {
                                console.error("Error scanning file:", error);
                                displayError("Could not detect a valid QR code in the uploaded image. Please try another image or use camera scanning.");
                            });
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(imageFile);
            }
        });
        
        // Process QR code data
        function processQrCodeData(qrCodeData) {
            // Send QR code data to server
            fetch('{{ route("security.scan.process") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    qr_data: qrCodeData
                })
            })
            .then(response => response.json())
            .then(data => {
                displayScanResult(data);
            })
            .catch(error => {
                console.error('Error processing QR code:', error);
                displayError('Failed to process QR code. Please try again.');
            });
        }
        
        // Display scan result
        function displayScanResult(data) {
            const scanResult = document.getElementById('scan-result');
            const resultHeader = document.getElementById('result-header');
            const resultTitle = document.getElementById('result-title');
            const resultMessage = document.getElementById('result-message');
            const resultCard = document.getElementById('result-card');
            
            // Show the result div
            scanResult.classList.remove('d-none');
            
            // Reset all info divs
            document.getElementById('resident-info').classList.add('d-none');
            document.getElementById('invitation-info').classList.add('d-none');
            
            // Set header and message based on status
            resultTitle.textContent = getResultTitle(data.status);
            resultMessage.textContent = data.message;
            
            // Set card styling based on status
            resultCard.className = 'card';
            resultHeader.className = 'card-header';
            
            switch(data.status) {
                case 'success':
                    resultCard.classList.add('border-success');
                    resultHeader.classList.add('bg-success', 'text-white');
                    break;
                case 'warning':
                    resultCard.classList.add('border-warning');
                    resultHeader.classList.add('bg-warning', 'text-dark');
                    break;
                case 'error':
                    resultCard.classList.add('border-danger');
                    resultHeader.classList.add('bg-danger', 'text-white');
                    break;
                default:
                    resultCard.classList.add('border-info');
                    resultHeader.classList.add('bg-info', 'text-white');
            }
            
            // Display data based on type
            if (data.data && data.data.type) {
                if (data.data.type === 'resident') {
                    displayResidentInfo(data.data);
                } else if (data.data.type === 'invitation') {
                    displayInvitationInfo(data.data);
                }
            }
        }
        
        // Display resident information
        function displayResidentInfo(data) {
            const residentInfo = document.getElementById('resident-info');
            
            document.getElementById('resident-name').textContent = data.name;
            document.getElementById('resident-email').textContent = data.email;
            document.getElementById('resident-status').textContent = data.status;
            document.getElementById('resident-time').textContent = data.timestamp;
            
            residentInfo.classList.remove('d-none');
        }
        
        // Display invitation information
        function displayInvitationInfo(data) {
            const invitationInfo = document.getElementById('invitation-info');
            
            document.getElementById('guest-name').textContent = data.guest_name;
            document.getElementById('host-name').textContent = data.host_name;
            document.getElementById('event-date').textContent = data.event_date;
            document.getElementById('event-time').textContent = data.event_time;
            document.getElementById('invitation-status').textContent = data.status;
            document.getElementById('used-at').textContent = data.used_at || 'Not used yet';
            document.getElementById('invitation-time').textContent = data.timestamp;
            
            invitationInfo.classList.remove('d-none');
        }
        
        // Display error message
        function displayError(message) {
            const scanResult = document.getElementById('scan-result');
            const resultHeader = document.getElementById('result-header');
            const resultTitle = document.getElementById('result-title');
            const resultMessage = document.getElementById('result-message');
            const resultCard = document.getElementById('result-card');
            
            // Show the result div
            scanResult.classList.remove('d-none');
            
            // Reset all info divs
            document.getElementById('resident-info').classList.add('d-none');
            document.getElementById('invitation-info').classList.add('d-none');
            
            // Set error message
            resultTitle.textContent = 'Error';
            resultMessage.textContent = message;
            
            // Set card styling to error
            resultCard.className = 'card border-danger';
            resultHeader.className = 'card-header bg-danger text-white';
        }
        
        // Get result title based on status
        function getResultTitle(status) {
            switch(status) {
                case 'success':
                    return 'Success';
                case 'warning':
                    return 'Warning';
                case 'error':
                    return 'Error';
                default:
                    return 'Result';
            }
        }
        
        // Scan again button
        document.getElementById('scan-again').addEventListener('click', function() {
            // Hide result
            document.getElementById('scan-result').classList.add('d-none');
            
            // Reset file input
            const fileInput = document.getElementById('qr-image');
            if (fileInput) {
                fileInput.value = '';
            }
            
            // Check which tab is active and restart scanning if camera tab
            const activeCameraTab = document.getElementById('camera-tab').classList.contains('active');
            if (activeCameraTab) {
                // Start scanning again with camera
                initializeScanner();
            } else {
                // Switch back to camera tab
                bootstrap.Tab.getOrCreateInstance(document.getElementById('camera-tab')).show();
            }
        });
    });
</script>
@endsection