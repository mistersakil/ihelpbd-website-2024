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

        <div class="row">
            <div class="col-sm-12 table-responsive">
                @if ($models->count())
                    <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;"
                        role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('title') }}</th>
                                <th>{{ __('body') }}</th>
                                <th class="text-center">{{ __('order') }}</th>
                                <th>{{ __('status') }}</th>
                                <th class="text-center">{{ __('actions') }}</th>

                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tbody>
                            @foreach ($models as $index => $model)
                                <tr class="odd" wire:key="slider_key_{{ $model->id }}">
                                    <td>
                                        {{ $models->firstItem() + $index }}
                                    </td>
                                    <td>
                                        {!! Vite::showUploadedImg($model->slider_image, 'sliders') !!}
                                    </td>
                                    <td>
                                        {{ $model->slider_title }}
                                    </td>
                                    <td>
                                        {{ $model->slider_body }}
                                    </td>

                                    <td>
                                        <div
                                            class="d-flex align-items-center justify-content-center gap-2 order-actions">
                                            @if ($firstModel && $models->firstItem() + $index == 1 && $countModel == 1)
                                                <a href="javascript:void(0)"
                                                    class="bg-gray
                                                    text-secondary border-secondary"
                                                    title="{{ __('order not available') }}">
                                                    <i class="{{ _icons('stop') }}"></i>
                                                </a>
                                            @elseif ($firstModel && $models->firstItem() + $index == 1)
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'DOWN')"
                                                    class="bg-gray
                                                    text-danger border-danger"
                                                    title="{{ __('order down') }}">
                                                    <i class="{{ _icons('arrow_down') }}"></i>
                                                </a>
                                            @elseif ($lastModel && $models->firstItem() + $index == $countModel)
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'UP')"
                                                    class="bg-gray text-success border-success"
                                                    title="{{ __('order up') }}">
                                                    <i class="{{ _icons('arrow_up') }}"></i>
                                                </a>
                                            @else
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'DOWN')"
                                                    class="bg-gray text-danger border-danger"
                                                    title="{{ __('order down') }}">
                                                    <i class="{{ _icons('arrow_down') }}"></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'UP')"
                                                    class="bg-gray text-success border-success"
                                                    title="{{ __('order up') }}">
                                                    <i class="{{ _icons('arrow_up') }}"></i>
                                                </a>
                                            @endif


                                        </div>
                                    </td>
                                    <td>
                                        <livewire:backend.addons.is-active-component :isActive="$model->is_active" :modelId="$model->id"
                                            wire:key="{{ rand() }}" />
                                    </td>

                                    <td>
                                        <div
                                            class="d-flex align-items-center justify-content-center gap-1 order-actions">
                                            <a wire:navigate href="{{ route('admin.sliders.edit', $model->id) }}"
                                                title="{{ __('edit') }}" class="badge bg-info text-white">
                                                <i class="{{ _icons('edit') }}"></i>
                                            </a>
                                            <a href="javascript:void(0)" wire:click="deleteModel({{ $model->id }})"
                                                title="{{ __('delete') }}" class="badge bg-danger text-white">
                                                <i class="{{ _icons('delete') }}"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- /tr -->
                            @endforeach

                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /.table -->
                    {{ $models->links() }}
                @else
                    <livewire:backend.addons.no-data-found-component goBackRoute="admin.sliders.list" />
                @endif
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
