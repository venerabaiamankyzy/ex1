@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron-img">
  <img src="{{asset('images/jumbotron.jpg')}}"/>
</div>
@endsection

@section('comic-cards')
@section('comic-cards')
<div class="container">
  <div class="label-card"> 
    <span class="text-white">CURRENT SERIES</span>
  </div>
  <div class="card-content">
    <div class="row row-cols-6">
      <div class="col">

        {{-- include the card section --}}
        @include('partials._comic_cards')
      </div>     
    </div>  
    <div class="card-button"> 
      <button type="button"> LOAD MORE</button>
    </div>  
  </div>     
</div>      
@endsection
@endsection    
    

  


