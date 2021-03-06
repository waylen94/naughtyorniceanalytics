@extends('layouts.app')
@section('title', 'Analytics')
@section('header', 'Analytics')

@section('content')
<div class ="container">


	<div class="row">
		<div class ="container">

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 benchmark-content">
        	<h2>This line chart shows the performance of this period of time, the X-axies represent the date, and the Y-axis exbihited the 
        	grams of plate waste</h2>
    	</div>
    	</div>
	</div>
	
	
	
	<div class = "row">
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 benchmark-content">
    	<div class ="container">
  
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">10-Day Trending</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="dashboard-trending-canvas"></canvas>
                  </div>
                </div>
              </div>
</div>
              
              </div>
              
      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
      <div class="card">
              	<div class="row text-center">
                <div class="col">
                    <h1>Having problems in inplementing improvements</h1>
                    <p> Feel free to leave us a message and get help. We will be providing you professional environmental solutions:)</p>
                    <p>Our feedback will be directly sent to your Email Address</p>
                </div>
            </div>
      
              </div>
              </div>
              </div>
</div>
@stop

@section("diagram_js_script")
	<script>
		var json_data_benchmark_date = ['08-May', '09-May', '10-May','11-May', '12-May','13-May', '14-May', '15-May', '16-May', '18-May'];
		console.log(json_data_benchmark_date);
		var json_data_benchmark_data =  {{ $platewaste->pluck('weight_kg')->toJson(JSON_PRETTY_PRINT) }} ;
 	</script>
@stop
