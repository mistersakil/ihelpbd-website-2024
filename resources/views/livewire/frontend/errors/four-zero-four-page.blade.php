<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    <div class="error-area pb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>{{ __('four zero four numeric') }}</h1>
                    <h3>{{ __('oops page not found') }}</h3>
                    <p>{{ __('the page you are looking for might have been removed') }}</p>
                    <a wire:navigate href="{{ route('web.home') }}" class="default-btn btn-bg-two">
                        {{ __('return to home page') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
