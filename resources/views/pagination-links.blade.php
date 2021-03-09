@if ($paginator->hasPages())
    <ul class="mx-1.5 p-1.5 inline-block pager list-none whitespace-nowrap overflow-auto">
       
        @if ($paginator->onFirstPage())
            <li class="bg-gray-300 text-gray-600 rounded-lg mx-1.5 p-1.5 inline-block disabled"><span>←</span></li>
        @else
            <li class="bg-gray-300 text-gray-600 rounded-lg mx-1.5 p-1.5 inline-block "><a href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li>
        @endif

        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="bg-gray-300 text-gray-800 hover:bg-gray-700 hover:text-gray-200 rounded-lg mx-1.5 p-1.5 inline-block disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="bg-gray-300 text-gray-800 hover:bg-gray-700 hover:text-gray-200 rounded-lg mx-1.5 p-1.5 inline-block active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li class="bg-gray-300 text-gray-800 hover:bg-gray-700 hover:text-gray-200 rounded-lg mx-1.5 p-1.5 inline-block "><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="bg-gray-300 text-gray-800 hover:bg-gray-700 hover:text-gray-200 rounded-lg mx-1.5 p-1.5 inline-block "><a href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li>
        @else
            <li class="bg-gray-300 text-gray-800 hover:bg-gray-700 hover:text-gray-200 rounded-lg mx-1.5 p-1.5 inline-block disabled"><span>→</span></li>
        @endif
    </ul>
@endif
