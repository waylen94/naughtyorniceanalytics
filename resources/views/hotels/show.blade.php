@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Hotel / Show #{{ $hotel->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('hotels.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('hotels.edit', $hotel->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Name</label>
<p>
	{{ $hotel->name }}
</p> <label>Star</label>
<p>
	{{ $hotel->star }}
</p> <label>Room_number</label>
<p>
	{{ $hotel->room_number }}
</p> <label>Description</label>
<p>
	{{ $hotel->description }}
</p> <label>Location</label>
<p>
	{{ $hotel->location }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
