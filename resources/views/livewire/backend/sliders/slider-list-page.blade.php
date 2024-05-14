<main>

    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$metaTitle" :active-item="$activeItem">

                {{-- @can('sliders-create') --}}
                <x-slot:add_new>
                    <livewire:backend.addons.add-new-btn-component title="add new" />
                </x-slot:add_new>
                {{-- @endcan --}}

            </x-backend.addons.breadcrumb-component>
        </x-slot:breadcrumb>
        <!-- /:breadcrumb -->


    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
