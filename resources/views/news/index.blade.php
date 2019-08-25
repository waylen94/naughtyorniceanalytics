@extends('layouts.app')
@section('title', 'News & Tips')
@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
  @include('news._news_exhibition_list',['news'=> $news])
          <div class="mt-5">
          {!! $news->appends(Request::except('page'))->render() !!}
        </div>
        
        
        <!-- only for administration sara -->
  </div>
</div>

@endsection
