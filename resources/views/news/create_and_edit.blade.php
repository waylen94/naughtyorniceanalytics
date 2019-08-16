@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="card ">

        <div class="card-body">
          <h2 class="">
            <i class="far fa-edit"></i>
            @if($news->id)
            Modify the News
            @else
            Create the News
            @endif
          </h2>

          <hr>

          @if($news->id)
            <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8">
              <input type="hidden" name="_method" value="PUT">
          @else
            <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8">
          @endif

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('common.error')

              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{ old('title', $news->title ) }}" placeholder="Please filling title" required />
              </div>

              <div class="form-group">
                <textarea name="body" class="form-control" id="editor" rows="6" placeholder="Please typing at least 3 words" required>{{ old('body', $news->body ) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> Save</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection