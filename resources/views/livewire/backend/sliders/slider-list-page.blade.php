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
                                <th>{{ __('title') }}</th>
                                <th>{{ __('body') }}</th>
                                <th>{{ __('link') }}</th>
                                <th>{{ __('link text') }}</th>
                                <th>{{ __('order') }}</th>
                                <th>{{ __('status') }}</th>
                                <th>{{ __('actions') }}</th>

                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tbody>
                            @foreach ($models as $model)
                                <tr role="row" class="odd" wire:key="slider_key_{{ $model->id }}">
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $model->slider_title }}
                                    </td>
                                    <td>
                                        {{ $model->slider_body }}
                                    </td>
                                    <td>
                                        {{ $model->slider_link }}
                                    </td>
                                    <td>
                                        {{ $model->slider_link_text }}
                                    </td>
                                    <td>
                                        {{ $model->order }}
                                    </td>
                                    <td>
                                        {{-- {{ $model->is_active }} --}}
                                        <livewire:backend.addons.is-active-component :isActive="$model->is_active" :modelId="$model->id"
                                            wire:key="{{ rand() }}" />
                                    </td>
                                    <td>
                                        {{ $model->created_at }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /.table -->
                    {{ $models->links() }}
                @else
                    nothing found
                @endif
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
