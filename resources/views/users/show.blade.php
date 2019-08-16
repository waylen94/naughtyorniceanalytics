@extends('layouts.app')

@section('title', $user->name . ' User Account')

@section('content')
<div class="container-fluid">
<div class="row">

  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card ">
    <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
      
      <div class="card-body">
            <h5><strong>Introduction</strong></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <h5><strong>Register in </strong></h5>
            <p>January 01 1901</p>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
      </div>
    </div>
    <hr>

    {{-- news and tips--}}
    <div class="card ">
      <div class="card-body">
        there is no more statistics ~_~
      </div>
    </div>
    
    <div>
    <a class="btn btn-block" href="{{ route('users.edit', Auth::id()) }}">Modification</a>
    </div>

  </div>
</div>
</div>
@stop