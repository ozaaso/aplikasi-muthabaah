@if ($paginator->hasPages())
    <nav class="pagination-container">
        {{-- Mobile View: Simple Pagination --}}
        <div class="mobile-pagination">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        {{-- Desktop View: Full Pagination --}}
        <div class="desktop-pagination">
            <div class="pagination-info">
                <p>
                    {!! __('Showing') !!}
                    <span>{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span>{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span>{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif

<style>
    .pagination-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .mobile-pagination {
        display: block;
    }

    .desktop-pagination {
        display: none;
        justify-content: space-between;
        align-items: center;
    }

    .pagination-info p {
        font-size: 14px;
        color: #666;
    }

    .pagination {
        list-style: none;
        display: flex;
        padding: 0;
        gap: 5px;
    }

    .page-item {
        margin: 0;
    }

    .page-link {
        display: inline-block;
        padding: 8px 12px;
        text-decoration: none;
        color: #007bff;
        border: 1px solid #ddd;
        border-radius: 4px;
        cursor: pointer;
    }

    .page-item.disabled .page-link,
    .page-item.active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
        cursor: default;
    }

    .page-item.disabled .page-link {
        color: #ccc;
        pointer-events: none;
    }

    @media (min-width: 576px) {
        .mobile-pagination {
            display: none;
        }

        .desktop-pagination {
            display: flex;
        }
    }
</style>
