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
                            <a wire:navigate href="{{ $product['slug'] }}">
                                <img src="{{ $product['img_thumb'] }}" alt="Project Images">
                            </a>
                            <div class="content content-max">
                                <h3>
                                    <a wire:navigate href="{{ $product['slug'] }}">
                                        {{ ucfirst($product['title']) }}
                                    </a>
                                </h3>
                                <p>
                                    {{ ucfirst($product['body']) }}
                                </p>
                            </div>
                        </div>
                        <!-- /.project-item-->
                    </div>
                    <!-- /.col-->
                @empty
                    <div class="section-title text-center">
                        <code>There is no product available right now! Please come back soon</code>
                    </div>
                @endforelse

            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /.project-area -->
</main>
