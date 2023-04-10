@extends('layouts.app')

@section('pagename', 'Comics')

{{-- jumbotron --}}
@section('jumbotron')
<div class="jumbotron-img">
  <img src="{{asset('images/jumbotron.jpg')}}"/>
</div>
@endsection

{{-- section of cards --}}
@section('comic-cards')
<div class="container">
  <div class="label-card"> 
    <span>CURRENT SERIES</span>
  </div>
  
  <div class="row row-cols-6">
    @forelse($comics as $comic_key=> $comic)
      <div class="col">
        @include('partials._comic_cards')
      </div>
      @empty
    
      <div class="col-12">
        <h4 class="text-white">No Comics Found</h4>
      </div>
    @endforelse  
      
    <div class="card-button col-12"> 
      <button type="button">LOAD MORE</button>
    </div>
  </div>
</div>
@endsection

{{-- section of main nav --}}
@section('main_bottom')
<div class="main-nav">
    <div class="container">
      <div class="row row-cols-5 align-items-center">
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
              src="{{asset('images/buy-comics-digital-comics.png')}}"
              alt="Digital comics"
            />
            <span>DIGITAL COMICS</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-merchandise.png')}}"
              alt="Digital comics"
            />
            <span>DC MERCHANDISE</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-subscriptions.png')}}"
            alt="Digital comics"
            />
            <span>SUBSCRIPTION</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-comics-shop-locator.png')}}"
            alt="Digital comics"
            />
            <span>COMIC SHOP LOCATOR</span>
          </div>
        </div>
        <div class="col">
          <div class="icon-main-nav d-flex align-items-center">
            <img
            src="{{asset('images/buy-dc-power-visa.svg')}}"
            alt="Digital comics"
            />
            <span>DC POWER VISA</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

