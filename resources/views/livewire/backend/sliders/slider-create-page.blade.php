<main>
    @dump($slider_title)
    @dump($is_active)
    @dump($slider_link)
    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$metaTitle" :active-item="$activeItem">

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
                <label for="slider_title" class="form-label">{{ __('slider title') }}</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <i class="{{ _icons('title') }}"></i>
                    </span>
                    <input wire:model.lazy="slider_title" type="text"
                        class="form-control  @error('slider_title') is-invalid @enderror" id="slider_title"
                        wire:dirty.class="border border-warning">
                    @error('slider_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                @if (!$errors->has('slider_title'))
                    <div class="form-text">
                        {{ __('slider title required') }}
                    </div>
                @endif

            </div>
            <!-- /.col-->

            <div class="col-md-6">
                <label for="slider_body" class="form-label">{{ __('slider body') }}</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <i class="{{ _icons('body') }}"></i>
                    </span>
                    <input wire:model.lazy="slider_body" type="text"
                        class="form-control  @error('slider_body') is-invalid @enderror" id="slider_body"
                        wire:dirty.class="border border-warning">
                    @error('slider_body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                @if (!$errors->has('slider_body'))
                    <div class="form-text">
                        {{ __('slider body required') }}
                    </div>
                @endif

            </div>
            <!-- /.col-->

            <div class="col-md-6">
                <label for="slider_link_text" class="form-label">{{ __('slider link text') }}</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <i class="{{ _icons('body') }}"></i>
                    </span>
                    <input wire:model.lazy="slider_link_text" type="text"
                        class="form-control  @error('slider_link_text') is-invalid @enderror" id="slider_link_text"
                        wire:dirty.class="border border-warning">
                    @error('slider_link_text')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                @if (!$errors->has('slider_link_text'))
                    <div class="form-text">
                        {{ __('slider link text optional') }}
                    </div>
                @endif

            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <label for="slider_link" class="form-label">{{ __('slider link') }}</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <i class="{{ _icons('body') }}"></i>
                    </span>
                    <input wire:model.lazy="slider_link" type="text"
                        class="form-control  @error('slider_link') is-invalid @enderror" id="slider_link"
                        wire:dirty.class="border border-warning">
                    @error('slider_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                @if (!$errors->has('slider_link'))
                    <div class="form-text">
                        {{ __('slider link required when slider text available') }}
                    </div>
                @endif

            </div>
            <!-- /.col-->



        </form>
        <!-- /form -->


        <x-slot:cardFooter>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="form-check form-switch">
                        <input wire:model.live='is_active' class="form-check-input" type="checkbox" role="switch"
                            id="is_active">
                        <label class="form-check-label" for="is_active">
                            {{ __('active') }}
                        </label>
                    </div>
                    <button wire:click="save" type="button" class="btn btn-sm btn-primary px-4 radius-10">
                        <i class="{{ _icons('save') }}"></i>
                        Save
                    </button>
                </div>
            </div>
            <!-- /.col -->

        </x-slot:cardFooter>
        <!-- /cardFooter -->

    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
