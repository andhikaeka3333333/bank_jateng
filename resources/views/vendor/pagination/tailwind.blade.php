@if ($paginator->hasPages())
    <div class="flex items-center justify-between">
        {{-- Showing text --}}
        <div>
            <p class="text-sm text-slate-800">
                Showing
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                of <span class="font-medium">{{ $paginator->total() }}</span>
            </p>
        </div>

        {{-- Pagination --}}
        <nav class="inline-flex items-center border border-slate-400 rounded-md overflow-hidden">
            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 text-slate-800 border-r border-slate-400 select-none">‹</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 text-slate-800 border-r border-slate-400 hover:bg-slate-100">‹</a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-3 py-1 text-slate-800 border-r border-slate-400 select-none">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-1 text-slate-800 bg-slate-200 border-r border-slate-400 select-none">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 text-slate-800 border-r border-slate-400 hover:bg-slate-100">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 text-slate-800 hover:bg-slate-100">›</a>
            @else
                <span class="px-3 py-1 text-slate-800 select-none">›</span>
            @endif
        </nav>
    </div>
@endif
