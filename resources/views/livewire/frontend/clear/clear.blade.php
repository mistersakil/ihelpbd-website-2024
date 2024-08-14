<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    <div class="error-404 d-flex align-items-center justify-content-center">
        <div class="card shadow-none bg-transparent">
            <div class="card-body text-center">
                <h1 class="display-4">{{ __('cache cleared') }}</h1>

            </div>
        </div>
    </div>
</main>
