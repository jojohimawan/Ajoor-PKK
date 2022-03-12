{{-- @if ($paginator->hasPages())

    @if ($paginator->onFirstPage())
        <span class="previous-link-disable">
            @lang('pagination.previous')
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="previous-link">
            @lang('pagination.previous')
        </a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="next-link">
            @lang('pagination.next')
        </a>
    @else
        <span class="next-link-disable">
            @lang('pagination.next')
        </span>
    @endif

@endif  --}}

@if ($paginator->hasPages())
    <ul class="pager">
        
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif

        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif