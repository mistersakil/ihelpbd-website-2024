<main>
    {{-- @dump($itemDetails) --}}
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    @if (array_key_exists('about', $itemDetails))
        <livewire:frontend.partials.home-about-section />
    @endif
    @if (array_key_exists('projects', $itemDetails))
        <livewire:frontend.partials.home-projects />
    @endif
    @if (array_key_exists('projects', $itemDetails))
        <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
            sectionSubTitle="why you will give us priority" />
    @endif



</main>
