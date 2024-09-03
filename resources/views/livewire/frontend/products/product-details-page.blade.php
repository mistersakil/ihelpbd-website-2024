<main>
    <x-slot:innerBanner>
        {{-- <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" /> --}}
    </x-slot:innerBanner>


    <livewire:frontend.partials.home-about-section :item="$itemDetails" />

    <livewire:frontend.partials.home-projects :item="$itemDetails" />


    <livewire:frontend.components.key-characteristics :item="$itemDetails" />


    <livewire:frontend.components.article-section-one :item="$itemDetails" />

    @if (array_key_exists('faqs', $itemDetails))
        <livewire:frontend.components.faq-list :item="$itemDetails['faqs']" />
    @endif


</main>
