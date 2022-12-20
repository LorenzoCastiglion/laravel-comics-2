
<?php  

$blu = config('comics.bluband');

?>



@extends('layouts.app')


@section('jumbo')

<div class="jumbotron">
   <img src={{Vite::asset('resources/img/jumbotron.jpg') }} alt="">
</div>

@endsection


@section('section-1')
   <div class=" container m-auto position-relative">

      <div class="current">
         <span>current series</span>
     </div>
      <div class="row d-flex flex-wrap   ">
          @foreach($comics as $comic)
          <div class="carta">
             <div class="img-wrap">
                <img src="{{$comic['thumb']}}" alt="">
             </div>
                   <p class="didascalia">{{$comic['title']}}</p>
          </div>
          @endforeach
      </div>
      <div class="load-container">
         <a class="load" href="#">load more</a>
     </div>
   </div>
@endsection

@section('bluband')
<div class="icons">
   @foreach ($blu as $item)
   <div class="container icon">
         <img class="img-icon" src="{{Vite::asset('resources/img/'.$item['icon']) }}" alt="">
         <p>{{$item['text']}}</p>
   </div>
       
   @endforeach

</div>

    
@endsection



