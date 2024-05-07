<main>
    @dump($state)
    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$title" :active-item="$activeItem">

                @can('client-create')
                    <x-slot:add_new>
                        <livewire:backend.addons.add-new-component title="add new" />
                    </x-slot:add_new>
                @endcan

            </x-backend.addons.breadcrumb-component>
        </x-slot:breadcrumb>
        <!-- /:breadcrumb -->

        <form class="row g-3" class="was-validated">
            <div class="col-md-6">
                <livewire:backend.addons.labeled-input-text-component label="title" icon="{{ _icons('user') }}">
            </div>

        </form>
        <!-- /form-->

    </x-backend.addons.card-component>
</main>
