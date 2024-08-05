<main>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    <livewire:frontend.partials.home-about-section />
    {{-- <livewire:frontend.partials.home-projects /> --}}

    <livewire:frontend.partials.home-services-section2 sectionTitle="solutions"
        sectionSubTitle="our provided best solutions" :dataList="$solutionList" />

    <livewire:frontend.partials.products-section sectionTitle="products" sectionSubTitle="our most valuable products"
        :limit="6" />

    {{-- <livewire:frontend.partials.home-choose-section /> --}}

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    <livewire:frontend.partials.home-testimonial-section />

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
