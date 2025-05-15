@if(session('success'))
<div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
    <div class="d-flex align-items-center">
        <i class="ki-duotone ki-shield-tick fs-2 me-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <div>
            <strong>Success!</strong> {{ session('success') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
    <div class="d-flex align-items-center">
        <i class="ki-duotone ki-shield-cross fs-2 me-3">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <div>
            <strong>Error!</strong> {{ session('error') }}
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show mb-5" role="alert">
    <div class="d-flex align-items-center">
        <i class="ki-duotone ki-warning-2 fs-2 me-3">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <div>
            <strong>Warning!</strong> Please check the form for errors.
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-hide alerts after 5 seconds
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            setTimeout(function() {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 5000);
        });
    });
</script>