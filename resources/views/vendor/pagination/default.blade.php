@if ($paginator->hasPages())
    <nav class="navigation">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="page-numbers prev">
              <svg class="btn-prev">
                <use xlink:href="#arrow-left"></use>
              </svg>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="page-numbers current bg-border-color"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers current bg-border-color"><span>{{ $page }}</span></a>
                    @else
                        <a href="{{ $url }}" class="page-numbers bg-border-color"><span>{{ $page }}</span></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page-numbers next">
              <svg class="btn-next">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </a>
        @endif
    </nav>
@endif
