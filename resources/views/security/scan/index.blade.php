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

                    <div class="text-center mb-4">
                        <h4>Position the QR code in front of your camera</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div id="reader" class="mx-auto" style="width: 500px; max-width: 100%; border-radius: 10px; overflow: hidden;"></div>
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
        const html5QrCode = new Html5Qrcode("reader");
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            // Stop scanning
            html5QrCode.stop().then(() => {
                console.log("QR Code scanning stopped.");
                processQrCodeData(decodedText);
            }).catch((err) => {
                console.error("Failed to stop QR Code scanner:", err);
            });
        };
        
        const config = { fps: 10, qrbox: { width: 250, height: 250 } };
        
        // Start scanning
        html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);
        
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
            // Hide result and restart scanner
            document.getElementById('scan-result').classList.add('d-none');
            
            // Start scanning again
            html5QrCode.start(
                { facingMode: "environment" },
                config,
                qrCodeSuccessCallback
            );
        });
    });
</script>
@endsection