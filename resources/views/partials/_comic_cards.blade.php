@if(isset($comic))
<div class="img-card mb-5">
    
    @if(isset($comic_key))
    <a href="{{ route('detail', ['index' => $comic_key]) }}">
        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="comics image">
    </a>
    @endif
    <div class="card-body pt-2">
        <span class="card-text">
            {{ strtoupper($comic['series']) }}
        </span>
    </div>
</div>
  
@else
<div class="img-card mb-5">
    <h5>No Comics Found</h5>
</div>
    
@endif