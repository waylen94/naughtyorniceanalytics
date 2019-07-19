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
	        labels: ['08-May', '09-May', '10-May','11-May', '12-May','13-May', '14-May', '15-May', '16-May', '18-May'],
	        datasets: [{
	        	data: [json_data[0].B,json_data[1].B, json_data[2].B, json_data[3].B, json_data[4].B, json_data[5].B, json_data[6].B,json_data[7].B,json_data[8].B,json_data[9].B],
	            label: 'Plate Waste/Gram',
	            backgroundColor: 'rgb(255, 99, 132)',
	            borderColor: 'rgb(255, 99, 132)'          
	        		}]
    		}
});
};

var json_data_testing_table = [];//store the json data array
$.ajax({
    url: '../uploads/Json/fake_testing_date_benchmark.json',
    async: false,
    success: function (data) {
    	json_data_testing_table = data;
    }
});

//event driven
if(document.getElementById("testing_button")){
document.getElementById("testing_button").onclick = loadDoc;
}
function loadDoc(){
	for (i = 1; i < 13; i++) { 
		chart_line_testing.data.labels[i-1] = document.getElementById("horizen_"+i).value;
		chart_line_testing.data.datasets[0].data[i-1] = Number(document.getElementById("point_"+i).value);
		  }
	chart_line_testing.update();
};