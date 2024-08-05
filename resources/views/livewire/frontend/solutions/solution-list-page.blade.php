<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.partials.solutions-section sectionTitle="solutions"
        sectionSubTitle="our provided best solutions" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="6" />

</main>
