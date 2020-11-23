@if ($paginator->hasPages())

<!-- 
    <nav aria-label="Edit Pagination">
        <ul class="pagination"> 

            <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
            <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
            <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
            <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>

            <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
        </ul>
    </nav>
 -->

    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage()) 
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous"><span aria-hidden="true"><</span></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next"><span aria-hidden="true">></span><span class="sr-only">Next</span></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
