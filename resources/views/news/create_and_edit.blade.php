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
            <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
          @else
            <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          @endif

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('common.error')

              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{ old('title', $news->title ) }}" placeholder="Please filling title" required />
              </div>

              <div class="form-group">
                <textarea name="body" class="form-control" id="editor" rows="6" placeholder="Please typing at least 3 words" required>{{ old('body', $news->body ) }}</textarea>
              </div>
              
          <div class="form-group mb-4">
            <label for="" class="avatar-label">Gallery Image</label>
            <input type="file" name="image" class="form-control-file">

            @if($news->image)
              <br>
              <img class="thumbnail img-responsive" src="{{ $news->image }}" width="200" />
            @endif
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

@section('styles_editor')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts_editor')
  <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>

  <script>
    $(document).ready(function() {
      var editor = new Simditor({
        textarea: $('#editor'),
        upload: {
          url: '{{ route('topics.upload_image') }}',
          params: {
            _token: '{{ csrf_token() }}'
          },
          fileKey: 'upload_file',
          connectionCount: 3,
          leaveConfirm: 'File is updating, close program could terminate it'
        },
        pasteImage: true,
      });
    });
  </script>
@stop