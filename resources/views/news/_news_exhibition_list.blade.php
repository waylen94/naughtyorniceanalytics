@if (count($news))
@php
$news_items = $news->items()
@endphp
<div class="row">
@if(count($news_items)>=1)
      <div class="col-md-6">
         <div class="card text-white bg-primary flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">{{$news_items[0]->title}}</strong>
<!--                <h6 class="mb-0"> -->
<!--                   <a class="text-white" href="#">40 Percent of People Can’t Afford Basics</a> -->
<!--                </h6> -->
<!--                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
               <a class="btn btn-outline-light btn-sm" role="button" href="{{ route('news.show', [$news_items[0]->id]) }}">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail" src=
            @if($news_items[0]->image)
			"{{$news_items[0]->image}}"
            @else
            "http://placeimg.com/480/360/any"
            @endif
            style="width: 200px; height: 250px;">
         </div>
      </div>
      @endif
      @if(count($news_items)>=2)
      <div class="col-md-6">
         <div class="card text-white bg-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">{{$news_items[1]->title}}</strong>
<!--                <h6 class="mb-0"> -->
<!--                   <a class="text-white" href="#">Food for Thought: Diet and Brain Health</a> -->
<!--                </h6> -->
<!--                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
               <a class="btn btn-outline-light btn-sm" href="{{ route('news.show', [$news_items[1]->id]) }}">Continue reading</a>
            </div>
            		            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail" src=
            @if($news_items[1]->image)
            "{{$news_items[1]->image}}"
            @else
            "http://placeimg.com/480/360/any"
            @endif
            style="width: 200px; height: 250px;">

               </div>
      </div>
      @endif
</div>


   <div class="row">
   @if(count($news_items)>=3)
      <div class="col-md-4">
         <div class="card mb-4">
            <img class="card-img-top flex-auto d-none d-lg-block" src=
            @if($news_items[2]->image)
            "{{$news_items[2]->image}}"
            @else
            "http://placeimg.com/480/360/any"
            @endif
            style="width: 250px; height: 200px;">
            <div class="card-body">
               <h5 class="card-title">{{$news_items[2]->title}}</h5>
<!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
               <a href="{{ route('news.show', [$news_items[2]->id]) }}" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      @endif
      @if(count($news_items)>=4)
      <div class="col-md-4">
         <div class="card mb-4">
            <img class="card-img-top flex-auto d-none d-lg-block" src=
            @if($news_items[3]->image)
            "{{$news_items[3]->image}}"
            @else
            "http://placeimg.com/480/360/any"
            @endif
            style="width: 250px; height: 200px;">
            <div class="card-body">
               <h5 class="card-title">{{$news_items[3]->title}}</h5>
<!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
               <a href="{{ route('news.show', [$news_items[3]->id]) }}" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      @endif
      @if(count($news_items)>=5)
      <div class="col-md-4">
         <div class="card mb-4">
            <img class="card-img-top flex-auto d-none d-lg-block" src=
            @if($news_items[4]->image)
            "{{$news_items[4]->image}}"
            @else
            "http://placeimg.com/480/360/any"
            @endif
            style="width: 250px; height: 200px;">
            <div class="card-body">
               <h5 class="card-title">{{$news_items[4]->title}}</h5>
<!--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
               <a href="{{ route('news.show', [$news_items[4]->id]) }}" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      @endif
   </div>



@else
  <div class="empty-block">No DATA ~_~ </div>
@endif
