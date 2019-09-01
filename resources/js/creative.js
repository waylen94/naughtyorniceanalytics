//var json_data = [];//store the json data array
//$.ajax({
//    url: '../uploads/Json/fake_testingdata_trending.json',
//    async: false,
//    success: function (data) {
//    	json_data = data;
//    }
//});

if(document.getElementById('dashboard-trending-canvas')){
var ctx = document.getElementById('dashboard-trending-canvas').getContext('2d');
var chart_line_testing = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
	        labels: json_data_benchmark_date,
	        datasets: [{
	        	data: json_data_benchmark_data,
	            label: 'Plate Waste/Gram',
	            backgroundColor: 'rgb(255, 99, 132)',
	            borderColor: 'rgb(255, 99, 132)'          
	        		}]
    		}
});
};


jQuery(document).ready(function($){
    
	$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#selected_rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating").val(selected_value);
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
	}));	
});
	

//var json_data_testing_table = [];//store the json data array
//$.ajax({
//    url: '../uploads/Json/fake_testing_date_benchmark.json',
//    async: false,
//    success: function (data) {
//    	json_data_testing_table = data;
//    }
//});

//event driven
//if(document.getElementById("testing_button")){
//document.getElementById("testing_button").onclick = loadDoc;
//}
//function loadDoc(){
//	for (i = 1; i < 13; i++) { 
//		chart_line_testing.data.labels[i-1] = document.getElementById("horizen_"+i).value;
//		chart_line_testing.data.datasets[0].data[i-1] = Number(document.getElementById("point_"+i).value);
//		  }
//	chart_line_testing.update();
//};