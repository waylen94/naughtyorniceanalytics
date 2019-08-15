@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          News
          <a class="btn btn-success float-xs-right" href="{{ route('news.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($news->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Title</th> <th>Body</th> <th>User_id</th> <th>View_count</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($news as $new)
              <tr>
                <td class="text-xs-center"><strong>{{$new->id}}</strong></td>

                <td>{{$new->title}}</td> <td>{{$new->body}}</td> <td>{{$new->user_id}}</td> <td>{{$new->view_count}}</td> <td>{{$new->order}}</td> <td>{{$new->excerpt}}</td> <td>{{$new->slug}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('news.show', $new->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('news.edit', $new->id) }}">
                    E
                  </a>

                  <form action="{{ route('news.destroy', $new->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $news->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
