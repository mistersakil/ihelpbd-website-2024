<a @if ($hasRoute) href="{{ $route }}" wire:navigate @endif
    class="btn btn-outline-secondary px-3 btn-sm text-capitalize" title="{{ $title }}">
    <i class="{{ $icon }}"></i>
    {{ $title }}
</a>
