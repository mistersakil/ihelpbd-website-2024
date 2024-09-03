<main>
    <x-slot:innerBanner>
        {{-- <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" /> --}}
    </x-slot:innerBanner>


    <livewire:frontend.partials.home-about-section :item="$itemDetails" />

    @if (array_key_exists('projects', $itemDetails))
        <livewire:frontend.partials.home-projects :item="$itemDetails['projects']" />
    @endif
    @if (array_key_exists('characteristics', $itemDetails))
        <livewire:frontend.components.key-characteristics :item="$itemDetails['characteristics']" />
    @endif

    @if (array_key_exists('articles', $itemDetails))
        <livewire:frontend.components.article-section-one :items="$itemDetails['articles']" />
    @endif

    @if (array_key_exists('faqs', $itemDetails))
        <livewire:frontend.components.faq-list :item="$itemDetails['faqs']" />
    @endif


</main>
