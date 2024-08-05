<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products" />
</main>
