<main>
    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    <div class="project-area pt-100 pb-70">
        <div class="container">
            <div class="row pt-45 justify-content-center">
                @forelse ($productList as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item">
                            <a href="{{ $product['slug'] }}">
                                <img src="{{ ucfirst($product['img_featured']) }}" alt="Project Images">
                            </a>
                            <div class="content content-max">
                                <h3>
                                    <a href="{{ $product['slug'] }}">
                                        {{ ucfirst($product['title']) }}
                                    </a>
                                </h3>
                                <p>
                                    {{ ucfirst($product['body']) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="section-title text-center">
                        <code>There is no product available right now! Please come back soon</code>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</main>
