<main>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    <livewire:frontend.partials.home-about-section />
    {{-- <livewire:frontend.partials.home-projects /> --}}

    <livewire:frontend.partials.solutions-section sectionTitle="solutions" sectionSubTitle="our provided best solutions"
        :limit="5" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="3" />

    {{-- <livewire:frontend.partials.home-choose-section /> --}}

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
