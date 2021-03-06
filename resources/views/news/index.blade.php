@extends('layouts.app')
@section('title', 'News & Tips')
@section('content')
<div class="container-fluid">
<a class="btn btn-success float-right" href="{{ route('news.create') }}">Create</a>
  <div class="col-md-10 offset-md-1">
  @include('news._news_exhibition_list',['news'=> $news])
          <div class="mt-5">
          {!! $news->appends(Request::except('page'))->render() !!}
        </div>
        
        
        <!-- only for administration sara -->
<!--     <div class="card "> -->
<!--       <div class="card-header"> -->
<!--         <h1> -->
<!--           News -->
<!--           <a class="btn btn-success float-xs-right" href="{{ route('news.create') }}">Create</a> -->
<!--         </h1> -->
<!--       </div> -->

<!-- 		<div class="card-body"> -->
        
<!--         @include('news._news_list', ['news' => $news]) -->
       
<!--         <div class="mt-5"> -->
<!--           {!! $news->appends(Request::except('page'))->render() !!} -->
<!--         </div> -->
<!--       </div> -->
<!--     </div> -->
  </div>
</div>

@endsection
