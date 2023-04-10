
  <div class="header-top">
    <div class="container">
      <span>DC POWER VISA®</span>
      <span>ADDITIONAL DC SITES</span>
    </div>
   
  </div>
<div class="container">  
  <div class="header-bottom">
    <div class="logo">
      <a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" aria-current="page" href="{{route('comics')}}"><img src="{{asset('images/dc-logo.png')}}" alt=""></a>
    </div>
    <nav>
      <ul class="header-nav mb-0">   
        <li><a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" aria-current="page" href="{{route('comics')}}">CHARACTERS</a></li>
        <li><a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" aria-current="page" href="{{route('comics')}}">COMICS</a></li>
        <li><a class="nav-link @if(Request::route()->getName() == 'comics') active @endif" aria-current="page" href="{{route('comics')}}">MOVIES</a></li>
        <li><a href="#" class="nav-link">TV</a></li>
        <li><a href="#" class="nav-link">GAMES</a></li>
        <li><a href="#" class="nav-link">COLLECTIBLES</a></li>
        <li><a href="#" class="nav-link">VIDEOS</a></li>
        <li><a href="#" class="nav-link">FANS</a></li>
        <li><a href="#" class="nav-link">NEWS</a></li>
        <li><a href="#" class="nav-link">SHOP</a></li>
      </ul>
    </nav>  

    <div class="search">
      <small>Search</small>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
    </div>
      
  
  </div>
 
</div>