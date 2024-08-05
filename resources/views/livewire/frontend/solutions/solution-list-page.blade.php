<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.partials.home-services-section2 sectionTitle="solutions"
        sectionSubTitle="our provided best solutions" :dataList="$solutionList" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="3" />

</main>
