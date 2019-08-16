@extends('layouts.app')

@section('title', $news->title)

@section('content')

  <div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
      <div class="card ">
        <div class="card-body">
          <div class="text-center">
            Editor：{{ $news->user->name }}
          </div>
          <hr>
          <div class="media">
            <div align="center">
              <a href="{{ route('users.show', $news->user->id) }}">
                <img class="thumbnail img-fluid" src="{{ $news->user->avatar }}" width="300px" height="300px">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
      <div class="card ">
        <div class="news-body">
          <h1 class="text-center mt-3 mb-3">
            {{ $news->title }}
          </h1>

          <div class="article-meta text-center text-secondary">
            {{ $news->created_at->diffForHumans() }}
            ⋅
<!--             <i class="far fa-comment"></i> -->
<!--             {{ $news->reply_count }} -->
          </div>

          <div class="topic-body mt-4 mb-4">
            {!! $news->body !!}
          </div>

          <div class="operate">
            <hr>
            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
              <i class="far fa-edit"></i> Modify
            </a>
            <a href="#" class="btn btn-outline-secondary btn-sm" role="button">
              <i class="far fa-trash-alt"></i> Delete
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
@stop