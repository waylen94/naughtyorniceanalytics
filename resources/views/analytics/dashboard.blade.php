 <!-- Begin Page Content -->
<div class="container-fluid">
	<div class="row">
		<!-- card -->
		<div class="col-xl-4 col-lg-5">
		@include('analytics.card_no',['i' => '1'])
		@include('analytics.card_no',['i' => '2'])
		@include('analytics.card_no',['i' => '3'])
		@include('analytics.card_no',['i' => '4'])
		@include('analytics.card_performance')

		</div>
		 <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
                <!-- Card Header - Dropdown -->
   
              
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown? -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">10-Day Trending</h6>
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
	<!-- ending for the row -->
</div>

@section("diagram_js_script")
	<script>
		var json_data_benchmark_date = ['08-May', '09-May', '10-May','11-May', '12-May','13-May', '14-May', '15-May', '16-May', '18-May'];
		console.log(json_data_benchmark_date);
		var json_data_benchmark_data =  {{ $platewaste->pluck('weight_kg')->toJson(JSON_PRETTY_PRINT) }} ;
 	</script>
@stop



