<div class="card">
    <div class="card-header px-4 py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="mb-0 text-capitalize text-muted">
            {{ $card_title ?? null }}
        </h6>
        @if ($has_buttons)
        <livewire:backend.addons.add-new-component title="Add new service" />
        @endif

    </div>
    <div class="card-body p-4">
        {{ $slot }}
    </div>
</div>