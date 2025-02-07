@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <span class="p-newer-posts"><i class="fa fa-angle-double-left"></i> сюда </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="p-newer-posts"><i class="fa fa-angle-double-left"></i> сюда </a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="p-older-posts">туда <i class="fa fa-angle-double-right"></i></a>
    @else
        <span class="p-older-posts">туда <i class="fa fa-angle-double-right"></i></span>
    @endif
@endif
