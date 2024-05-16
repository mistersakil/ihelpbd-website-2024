<div class="row mt-3">
    <div class="col-sm-12 col-md-3">
        <p class="text-muted">
            {!! __('showing') !!}
            <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
            {!! __('of') !!}
            <span class="fw-semibold">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
    </div>

    <!-- Start: GoTo page  -->
    <div class="col-sm-12 col-md-1">
        <label for="gotoPage">{{ __('goto') }}</label>
        <input type="number" wire:model.live="pageNumber" min="1" max="{{ $paginator->total() }}" id="gotoPage"
            class="gotoPage">
    </div>
    <!-- End: GoTo page  -->

    <div class="col-sm-12 col-md-8">

        @if ($paginator->hasPages())
            <nav class="d-flex justify-content-end align-items-start">


                <ul class="pagination">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <button type="button"
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                        </li>
                    @endif

                    <!-- Start: Pagination Elements -->
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active"
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"
                                        aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                                        <button type="button" class="page-link"
                                            wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    <!-- End: Pagination Elements -->

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <button type="button"
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled" aria-label="@lang('pagination.next')">&rsaquo;</button>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        @endif
    </div>
</div>
