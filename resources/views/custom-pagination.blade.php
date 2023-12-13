@if ($paginator->hasPages())
    <div class="px-5 py-3 flex flex-col gap-3 bg-white/50 rounded-lg">
        <p class="text-center text-sm italic">
            Showing <span class="border border-gray-500 rounded-sm px-1 py-0.5 not-italic">{{ $paginator->firstItem() }}</span> to <span class="border border-gray-500 rounded-sm px-1 py-0.5 not-italic">{{ $paginator->lastItem() }}</span> of {{ $paginator->total() }} results
        </p>

        <ul class="flex">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="px-2">{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="bg-gray-300/80 px-2 rounded-md mx-0.5">{{ $page }}</li>
                        @else
                            <li class="bg-gray-300/80 px-2 rounded-md mx-0.5"><a
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
@endif
