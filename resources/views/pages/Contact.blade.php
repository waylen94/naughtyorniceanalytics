@extends('layouts.app')
@section('title', 'Contact')

@section('header', 'Contact')
@section('content')
<div class="container-fluid">
  <div class="row">
	<!-- contact page content area -->
    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs contact-info">
    	<div class="container">
    <div class="row text-center">
        <div class="col">
            <h1>Having problems in inplementing improvements</h1>
            <p> Feel free to leave us a message and get help. We will be providing you professional environmental solutions:)</p>
            <p>Our feedback will be directly sent to your Email Address</p>
        </div>
    </div>
</div>
    </div>
    <!-- contact page send email area-->
    
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-content">
     
     <div class="row">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="stars-tab" data-toggle="pill" href="#stars" role="tab" aria-controls="stars" aria-selected="true">Technical Issue</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="room-tab" data-toggle="pill" href="#room" role="tab" aria-controls="room" aria-selected="false">General Assistance</a>
                      </li>
                    </ul>
			</div>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="stars" role="tabpanel" aria-labelledby="stars-tab">
				     	<div class="card ">
        <div class="card-body">
          <h2 class="">
            <i class="far fa-edit"></i>
            	Seeking Technical Assistance
          </h2>

          <hr>



            <form action="#" method="POST" accept-charset="UTF-8">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('common.error')

              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{$user->name}}" placeholder="Please filling title" required />
              </div>
              
              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{$user->email}}" placeholder="Please filling title" required />
              </div>

              <div class="form-group">
                <textarea name="body" class="form-control" id="editor" rows="6" placeholder="How can we help you" required>{{ old('body' ) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> Send</button>
              </div>
            </form>
        </div>
      </div>
			</div>
			<div class="tab-pane fade" id="room" role="tabpanel" aria-labelledby="room-tab">
				     	<div class="card ">
        <div class="card-body">
          <h2 class="">
            <i class="far fa-edit"></i>
            	Seeking Performance improvement
          </h2>

          <hr>



            <form action="#" method="POST" accept-charset="UTF-8">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('common.error')

              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{$user->name}}" placeholder="Please filling title" required />
              </div>
              
              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{$user->email}}" placeholder="Please filling title" required />
              </div>

              <div class="form-group">
                <textarea name="body" class="form-control" id="editor" rows="6" placeholder="How can we help you" required>{{ old('body' ) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> Send</button>
              </div>
            </form>
        </div>
      </div>
			</div>


     </div>
  </div>
</div>
  
@stop