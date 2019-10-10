@extends('layouts.app')
@section('title', 'Benchmark')

@section('header', 'Benchmark By')

@section('content')
<div class="container-fluid">

    <!-- Filtering with Benchmark -->
	<div class="row">
		<div class ="container">

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 benchmark-content">
        
        	<div class="row">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                       <li class="nav-item">
                        <a class="nav-link active" id="all-tab" data-toggle="pill" href="#all" role="tab" aria-controls="all" aria-selected="true" onclick="chartChange({{$all_benchmark['all']}})">All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="stars-tab" data-toggle="pill" href="#stars" role="tab" aria-controls="stars" aria-selected="true">Stars</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="room-tab" data-toggle="pill" href="#room" role="tab" aria-controls="room" aria-selected="false">Room Number</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="country-tab" data-toggle="pill" href="#country" role="tab" aria-controls="country" aria-selected="false">Country</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="type-tab" data-toggle="pill" href="#type" role="tab" aria-controls="type" aria-selected="false">Hotel Style</a>
                      </li>
                    </ul>
			</div>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
				<div class="benchmark-filter-item">
				<div class="form-group" id="rating-ability-wrapper">
				</div>
				</div>
			</div>
			<div class="tab-pane fade" id="stars" role="tabpanel" aria-labelledby="stars-tab">
				<div class="benchmark-filter-item">
				@include('benchmark.Stars')
				</div>
			</div>
			<div class="tab-pane fade" id="room" role="tabpanel" aria-labelledby="room-tab">
				<div class="benchmark-filter-item">
				@include('benchmark.RoomNumber')
				</div>
			</div>
			<div class="tab-pane fade" id="country" role="tabpanel" aria-labelledby="country-tab">
			<div class="benchmark-filter-item">
				@include('benchmark.Country')
				</div>
			</div>
			<div class="tab-pane fade" id="type" role="tabpanel" aria-labelledby="type-tab">
				<div class="benchmark-filter-item">
				@include('benchmark.HotelType')
				</div>
			</div>
			</div>
			
			
    	</div>
    	</div>
	</div>
	
	
	
	<div class = "row">
		<!-- Benchmark Diagram -->
    	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 benchmark-content">
        	<div class ="container">
         		<div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <p class="m-0 font-weight-bold text-primary">BenchMark Comparison</p>
                    </div>
                    <!-- Actual analysis diagram -->
                    <div class="card-body">
                      <div class="chart-area">
                        <canvas id="benchmark-bar-canvas"></canvas>
                      </div>
                    </div>
                  </div>
                  </div>
                  
           </div>
           
                 <!-- precise plate -->
                 @include('benchmark.precise_performance')
   </div>
        
              
   	<!-- Additional -->           
   	<div class = "row">              
    </div>
</div>
@stop

@section("diagram_js_script")
	<script>
		var json_data_benchmark_date = ['08-May', '09-May', '10-May','11-May', '12-May','13-May', '14-May'];
// 		console.log(json_data_benchmark_date);
		chartChange({{$all_benchmark['all']}});
 	</script>
@stop






