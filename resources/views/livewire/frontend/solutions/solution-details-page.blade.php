<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    <livewire:frontend.partials.home-about-section />

    <livewire:frontend.partials.home-projects />

    <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
        sectionSubTitle="why you will give us priority" />

</main>
