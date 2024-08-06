<main>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    <livewire:frontend.partials.home-about-section />
    {{-- <livewire:frontend.partials.home-projects /> --}}

    <livewire:frontend.partials.solutions-section sectionTitle="solutions" sectionSubTitle="our provided best solutions"
        :limit="5" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="3" />

    <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
        sectionSubTitle="why you will give us priority" />

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
