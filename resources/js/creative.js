var json_data = [];//store the json data array
$.ajax({
    url: '../uploads/Json/fake_testingdata_trending.json',
    async: false,
    success: function (data) {
    	json_data = data;
    }
});

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

if(document.getElementById('benchmark-benchmark-canvas')){
	
	var ctx = document.getElementById('benchmark-benchmark-canvas').getContext('2d');
	var chart_line_testing = new Chart(ctx, {
	    type: 'bubble',
	    data: {
	      labels: "Africa",
	      datasets: [
	        {
	          label: ["Max Waste"],
	          backgroundColor: "rgba(255,221,50,0.2)",
	          borderColor: "rgba(255,221,50,1)",
	          data: [{
	            x: 850,
	            y: 0,
	            r: 10
	          }]
	        }, {
	          label: ["Average Waste"],
	          backgroundColor: "rgba(60,186,159,0.2)",
	          borderColor: "rgba(60,186,159,1)",
	          data: [{
	            x: 650,
	            y: 10,
	            r: 10
	          }]
	        }, {
	          label: ["Min Waste"],
	          backgroundColor: "rgba(0,0,0,0.2)",
	          borderColor: "#000",
	          data: [{
	            x: 400,
	            y: 0,
	            r: 10
	          }]
	        }, {
	          label: ["Your Waste"],
	          backgroundColor: "rgba(193,46,12,0.85)",
	          borderColor: "rgba(193,46,12,1)",
	          data: [{
	            x: 490,
	            y: 6,
	            r: 30
	          }]
	        }
	      ]
	    },
	    options: {
	      title: {
	        display: true,
	        text: 'Past 7 Days Performance Trending BenchMark'
	      }, scales: {
	        yAxes: [{ 
	          scaleLabel: {
	            display: true,
	            labelString: "Performance Scales"
	          }
	        }],
	        xAxes: [{ 
	          scaleLabel: {
	            display: true,
	            labelString: "Average Waste (Kilogram)"
	          }
	        }]
	      }
	    }
	
	});
	};

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