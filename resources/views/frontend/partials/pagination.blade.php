@if ($paginator->lastPage() > 1)
  <ul class="pagination justify-content-end mt-50">
    @foreach($paginator->getUrlRange(1,$paginator->lastPage()) as $page => $url)
      @if($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link" href="{{ $url }}">0{{ $page }}.</a></li>
      @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">0{{ $page }}.</a></li>
      @endif
    @endforeach
  </ul>
@endif