<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    {{-- <livewire:frontend.partials.home-about-section /> --}}
    <livewire:frontend.components.about-page-about-section />
</main>
