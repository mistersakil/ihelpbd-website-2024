<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    @if (array_key_exists('about', $itemDetails))
        <livewire:frontend.partials.home-about-section :item="$itemDetails['about']" />
    @endif
    @if (array_key_exists('projects', $itemDetails))
        <livewire:frontend.partials.home-projects :item="$itemDetails['projects']" />
    @endif
    @if (array_key_exists('characteristics', $itemDetails))
        <livewire:frontend.components.key-characteristics :item="$itemDetails['characteristics']" />
    @endif

    @if (array_key_exists('faqs', $itemDetails))
        <livewire:frontend.components.article-section-one :items="$itemDetails['articles']" />
    @endif

    @if (array_key_exists('faqs', $itemDetails))
        <livewire:frontend.components.faq-list :item="$itemDetails['faqs']" />
    @endif


</main>
