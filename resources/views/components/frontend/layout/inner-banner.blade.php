@props(['metaTitle' => 'default page title'])
<div class="inner-banner" style="background-image:url({{ Vite::asset('resources/frontend/images/inner-banner1.jpg') }})">
    <div class="container">
        <div class="inner-title text-center">
            <h3>
                {{ __($metaTitle) }}
            </h3>
            <ul>
                <li>
                    <a wire:navigate href="{{ route('web.home') }}">
                        {{ __('home') }}
                    </a>
                </li>
                <li>
                    {{ __($metaTitle) }}
                </li>
            </ul>
        </div>
    </div>
</div>
