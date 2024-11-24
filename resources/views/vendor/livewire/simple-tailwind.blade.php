@props(['scrollTo' => 'body', 'paginator'])

@php
    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? "(\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()"
        : '';

    // Define the base button classes for pagination
    $baseClasses = 'inline-block px-2 py-1.5 rounded-lg font-bold mt-2 sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800 hover:sm:bg-indigo-800 hover:md:bg-violet-800 hover:lg:bg-purple-800';

    // Define active state classes for pagination
    $activeClasses = 'bg-blue-800 text-black hover:text-blue-900';

    // Define inactive state classes for pagination
    $inactiveClasses = 'bg-blue-600 text-white hover:bg-blue-800 hover:text-blue-900';

    // Define the button color classes depending on the page state (active or inactive)
    $previousButtonClasses = $paginator->onFirstPage() ? "{$baseClasses} {$inactiveClasses}" : "{$baseClasses} {$activeClasses}";
    $nextButtonClasses = $paginator->hasMorePages() ? "{$baseClasses} {$activeClasses}" : "{$baseClasses} {$inactiveClasses}";
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            {{-- Previous Page Link --}}
            <span>
                @if ($paginator->onFirstPage())
                    <span class="{{ $previousButtonClasses }} cursor-not-allowed">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    @if (method_exists($paginator, 'getCursorName'))
                        <button 
                            type="button" 
                            dusk="previousPage" 
                            wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}" 
                            wire:click="setPage('{{ $paginator->previousCursor()->encode() }}', '{{ $paginator->getCursorName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            class="{{ $previousButtonClasses }}">
                            {!! __('pagination.previous') !!}
                        </button>
                    @else
                        <button 
                            type="button" 
                            wire:click="previousPage('{{ $paginator->getPageName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" 
                            class="{{ $previousButtonClasses }}">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                @endif
            </span>

            {{-- Next Page Link --}}
            <span>
                @if ($paginator->hasMorePages())
                    @if (method_exists($paginator, 'getCursorName'))
                        <button 
                            type="button" 
                            dusk="nextPage" 
                            wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}" 
                            wire:click="setPage('{{ $paginator->nextCursor()->encode() }}', '{{ $paginator->getCursorName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            class="{{ $nextButtonClasses }}">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <button 
                            type="button" 
                            wire:click="nextPage('{{ $paginator->getPageName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" 
                            class="{{ $nextButtonClasses }}">
                            {!! __('pagination.next') !!}
                        </button>
                    @endif
                @else
                    <span class="{{ $nextButtonClasses }} cursor-not-allowed">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
