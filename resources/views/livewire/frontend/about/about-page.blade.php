<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.components.about-page-about-section :data="$data" />

    {{-- <livewire:frontend.partials.home-about-section :item="$itemDetails" /> --}}
</main>
