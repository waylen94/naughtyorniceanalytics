@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Hotel
          <a class="btn btn-success float-xs-right" href="{{ route('hotels.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($hotels->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Name</th> <th>Star</th> <th>Room_number</th> <th>Description</th> <th>Location</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($hotels as $hotel)
              <tr>
                <td class="text-xs-center"><strong>{{$hotel->id}}</strong></td>

                <td>{{$hotel->name}}</td> <td>{{$hotel->star}}</td> <td>{{$hotel->room_number}}</td> <td>{{$hotel->description}}</td> <td>{{$hotel->location}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('hotels.show', $hotel->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('hotels.edit', $hotel->id) }}">
                    E
                  </a>

                  <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $hotels->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
