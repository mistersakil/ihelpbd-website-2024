<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>
    <livewire:frontend.partials.home-services-section2 :dataList="$solutionList" />
</main>
