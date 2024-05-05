<x-backend.addons.card-component>
    <x-slot:breadcrumb>
        <x-backend.addons.breadcrumb-component title="{{ __('dashboard') }}" active-item="{{ __('clients') }}">

            @can('client-create')
                <x-slot:add_new>
                    <livewire:backend.addons.add-new-component title="add new" />
                </x-slot:add_new>
            @endcan

        </x-backend.addons.breadcrumb-component>
    </x-slot:breadcrumb>

    {{-- <livewire:backend.client.client-component /> --}}
</x-backend.addons.card-component>
