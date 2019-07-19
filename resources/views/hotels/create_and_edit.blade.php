@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Hotel /
          @if($hotel->id)
            Edit #{{ $hotel->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($hotel->id)
          <form action="{{ route('hotels.update', $hotel->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('hotels.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $hotel->name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="star-field">Star</label>
                    <input class="form-control" type="text" name="star" id="star-field" value="{{ old('star', $hotel->star ) }}" />
                </div> 
                <div class="form-group">
                    <label for="room_number-field">Room_number</label>
                    <input class="form-control" type="text" name="room_number" id="room_number-field" value="{{ old('room_number', $hotel->room_number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<input class="form-control" type="text" name="description" id="description-field" value="{{ old('description', $hotel->description ) }}" />
                </div> 
                <div class="form-group">
                	<label for="location-field">Location</label>
                	<input class="form-control" type="text" name="location" id="location-field" value="{{ old('location', $hotel->location ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('hotels.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
