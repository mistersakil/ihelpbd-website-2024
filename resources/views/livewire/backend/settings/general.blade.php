<x-backend.layout.master>
    <x-slot:meta_title>Dashboard</x-slot>
        <x-slot:breadcrumb>
            <livewire:backend.partials.breadcrumb />
            </x-slot>

            <livewire:backend.settings.general-settings-component />

            @push('dynamic_js')
            <script>
            window.addEventListener('alert_success', event => {
                event.preventDefault();
                Toast.fire({
                    icon: event.detail.type,
                    title: event.detail.message,
                });
            })
            </script>
            @endpush

</x-backend.layout.master>