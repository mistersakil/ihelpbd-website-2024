<div class="card">
    <div class="card-body p-3">
        {{ $breadcrumb ?? false }}
        @if (!empty($cardTitle))
            <div class="card-title d-flex align-items-center">
                <div>
                    <i class="{{ $cardIcon }} me-3 font-18 text-primary border p-2"></i>
                </div>
                <h5 class="mb-0 text-capitalize text-secondary">
                    {{ $cardTitle }}
                </h5>
            </div>
            <hr>
        @endif ()
        {{ $slot }}
    </div>
    <div class="card-footer bg-white">
        {{ $cardFooter ?? false }}
    </div>
</div>
