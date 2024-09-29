@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-400 border border-white cursor-default leading-5 rounded-md dark:text-white dark:bg-blue-400 dark:border-white">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    @if(method_exists($paginator,'getCursorName'))
                        <button type="button" dusk="previousPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}" wire:click="setPage('{{$paginator->previousCursor()->encode()}}','{{ $paginator->getCursorName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-white leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-blue-600 active:text-white transition ease-in-out duration-150 dark:bg-blue-600 dark:border-white dark:text-white dark:focus:border-blue-700 dark:active:bg-blue-600 dark:active:text-white">
                                {!! __('pagination.previous') !!}
                        </button>
                    @else
                        <button
                            type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-white leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-blue-600 active:text-white transition ease-in-out duration-150 dark:bg-blue-600 dark:border-white dark:text-white dark:focus:border-blue-700 dark:active:bg-blue-600 dark:active:text-white">
                                {!! __('pagination.previous') !!}
                        </button>
                    @endif
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if(method_exists($paginator,'getCursorName'))
                        <button type="button" dusk="nextPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}" wire:click="setPage('{{$paginator->nextCursor()->encode()}}','{{ $paginator->getCursorName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-white leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-blue-600 active:text-white transition ease-in-out duration-150 dark:bg-blue-600 dark:border-white dark:text-white dark:focus:border-blue-700 dark:active:bg-blue-600 dark:active:text-white">
                                {!! __('pagination.next') !!}
                        </button>
                    @else
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-white leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-blue-300 focus:border-blue-300 active:bg-blue-600 active:text-white transition ease-in-out duration-150 dark:bg-blue-600 dark:border-white dark:text-white dark:focus:border-blue-700 dark:active:bg-blue-600 dark:active:text-white">
                                {!! __('pagination.next') !!}
                        </button>
                    @endif
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-400 border border-white cursor-default leading-5 rounded-md dark:text-white dark:bg-blue-400 dark:border-white"">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
