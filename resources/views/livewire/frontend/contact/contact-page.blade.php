<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <livewire:frontend.components.contact-card-section />

    <livewire:frontend.components.contact-form-section />
</main>
