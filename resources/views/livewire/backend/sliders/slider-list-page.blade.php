<main>

    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$module" :active-item="$activeItem">

                {{-- @can('sliders-list') --}}
                <x-slot:add_new>
                    <livewire:backend.addons.add-new-btn-component title="add new" icon="add"
                        route="admin.sliders.create" />
                </x-slot:add_new>
                {{-- @endcan --}}

            </x-backend.addons.breadcrumb-component>
        </x-slot:breadcrumb>
        <!-- /:breadcrumb -->


    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
