// elements for obtaining vals
var val1El = document.getElementById('color1');
var val2El = document.getElementById('color2');
var stepsEl = document.getElementById('steps');

// constants for switch/case checking representation type
const HEX = 1;
const RGB = 2;
const RGBA = 3;

// get the string representation 
// type and set it on the element (HEX/RGB/RGBA)
function getType(val) {
  if (val.indexOf('#') > -1) return HEX;
  if (val.indexOf('rgb(') > -1) return RGB;
  if (val.indexOf('rgba(') > -1) return RGBA;
}

// process the value irrespective of representation type
function processValue(el) {
  switch (el.dataType) {
    case HEX:
      {
        return processHEX(el.value);
      }
    case RGB:{
      return processRGB(el.value);
    }
    case RGBA:{
      return processRGB(el.value);
    }
      
  }
}

//return a workable RGB int array [r,g,b] from rgb/rgba representation
function processRGB(val){
  var rgb = val.split('(')[1].split(')')[0].split(',');
  alert(rgb.toString());
  return [
      parseInt(rgb[0],10),
      parseInt(rgb[1],10),
      parseInt(rgb[2],10)
  ];
}

//return a workable RGB int array [r,g,b] from hex representation
function processHEX(val) {
  //does the hex contain extra char?
  var hex = (val.length >6)?val.substr(1, val.length - 1):val;
  // is it a six character hex?
  if (hex.length > 3) {

    //scrape out the numerics
    var r = hex.substr(0, 2);
    var g = hex.substr(2, 2);
    var b = hex.substr(4, 2);

    // if not six character hex,
    // then work as if its a three character hex
  } else {

    // just concat the pieces with themselves
    var r = hex.substr(0, 1) + hex.substr(0, 1);
    var g = hex.substr(1, 1) + hex.substr(1, 1);
    var b = hex.substr(2, 1) + hex.substr(2, 1);

  }
  // return our clean values
    return [
      parseInt(r, 16),
      parseInt(g, 16),
      parseInt(b, 16)
    ]
}



function color_list_generation(int, border) {
    //attach start value


    var val1RGB = processHEX('#62f31a');
    var val2RGB = processHEX('#dc0100');
    var colors = [
      // somewhere to dump gradient
    ];
    
    
    // the pre element where we spit array to user
    var spitter = document.getElementById('spitter');

    //the number of steps in the gradient
    var stepsInt = parseInt(int, 10);
    //the percentage representation of the step
    var stepsPerc = 100 / (stepsInt+1);

    // diffs between two values 
    var valClampRGB = [
      val2RGB[0] - val1RGB[0],
      val2RGB[1] - val1RGB[1],
      val2RGB[2] - val1RGB[2]
    ];
  
    // build the color array out with color steps
    for (var i = 0; i < stepsInt; i++) {
      var clampedR = (valClampRGB[0] > 0) 
      ? pad((Math.round(valClampRGB[0] / 100 * (stepsPerc * (i + 1)))).toString(16), 2) 
      : pad((Math.round((val1RGB[0] + (valClampRGB[0]) / 100 * (stepsPerc * (i + 1))))).toString(16), 2);
      
      var clampedG = (valClampRGB[1] > 0) 
      ? pad((Math.round(valClampRGB[1] / 100 * (stepsPerc * (i + 1)))).toString(16), 2) 
      : pad((Math.round((val1RGB[1] + (valClampRGB[1]) / 100 * (stepsPerc * (i + 1))))).toString(16), 2);
      
      var clampedB = (valClampRGB[2] > 0) 
      ? pad((Math.round(valClampRGB[2] / 100 * (stepsPerc * (i + 1)))).toString(16), 2) 
      : pad((Math.round((val1RGB[2] + (valClampRGB[2]) / 100 * (stepsPerc * (i + 1))))).toString(16), 2);
      
    if(!border){  
      colors[i] = [
        '#',
        clampedR,
        clampedG,
        clampedB
      ].join('');
    }else{
    	colors[i] = [
            '#',
            clampedR,
            clampedG,
            clampedB
          ].join('');
    }
    }
    
    //update the pre element
//    spitter.innerText = JSON.stringify(colors);
    return colors;
    
  }

/**
 * padding function:
 * cba to roll my own, thanks Pointy!
 * ==================================
 * source: http://stackoverflow.com/questions/10073699/pad-a-number-with-leading-zeros-in-javascript
 */
function pad(n, width, z) {
z = z || '0';
n = n + '';
return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}






// benchmark bar chart render
if(document.getElementById('benchmark-bar-canvas')){
	var ctx = document.getElementById('benchmark-bar-canvas').getContext('2d');
	var benchmark_bar_chart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	      labels: ["H1", "H2", "H3", "H4", "H5"],
	      datasets: [
	        {
	          label: "Population (millions)",
//	          backgroundColor: ["#62f31a", "#18f11e","#15ef6a","#13edb7","#11d2eb","#0f81e9","#0c30e7","#360ae6","#8308e4","#d006e2","#e004a2","#de0250","#dc0100"],
	          backgroundColor: [
	                'rgba(98, 243, 26, 0.5)',
	                'rgba(24, 241, 30, 0.5)',
	                'rgba(21, 239, 106, 0.5)',
	                'rgba(19, 237, 183, 0.5)',
	                'rgba(17, 210, 235, 0.5)',
	                'rgba(15, 129, 233, 0.5)',
	                'rgba(12, 48, 231, 0.5)',
	                'rgba(54, 10, 230, 0.5)',
	                'rgba(131, 8, 228, 0.5)',
	                'rgba(208, 6, 226, 0.5)',
	                'rgba(224, 4, 162, 0.5)',
	                'rgba(222, 2, 8, 0.5)',
	                'rgba(220, 1, 0, 0.5)'

	            ],
	            borderColor: [
	                'rgba(98, 243, 26, 1)',
	                'rgba(24, 241, 30, 1)',
	                'rgba(21, 239, 106, 1)',
	                'rgba(19, 237, 183, 1)',
	                'rgba(17, 210, 235, 1)',
	                'rgba(15, 129, 233, 1)',
	                'rgba(12, 48, 231, 1)',
	                'rgba(54, 10, 230, 1)',
	                'rgba(131, 8, 228, 1)',
	                'rgba(208, 6, 226, 1)',
	                'rgba(224, 4, 162, 1)',
	                'rgba(222, 2, 8, 1)',
	                'rgba(220, 1, 0, 1)'

	            ],
	            borderWidth: 1,
	          data: [2478,5267,734,784,433]
	        },{
	            label: 'Benchamrk Average Line',
	            backgroundColor:'rgba(226,98,6)',
	            data: [2000, 2050, 2050, 2050,2050],
	            // Changes this dataset to become a line
	            type: 'line',
	            fill: false
	        }
	      ]
	    },
	    options: {
	      legend: { display: false },
	      title: {
	        display: false,
	        text: 'Predicted world population (millions) in 2050'
	      }
	    }
	});
};

window.chartChange =function chartChange(benchmark_list){
	
	
	var hotel_list = [];
	var average = 0;
	var average_list = [];
	
	//capture the redundant first my hotel item
	var my_hotel_performance = benchmark_list[0];
	benchmark_list.splice(0, 1);
	
	benchmark_list.forEach(list_plus);
	average = (average/benchmark_list.length).toFixed(2);
	
	
	var index = benchmark_list.indexOf(my_hotel_performance);
	var rgb_record = benchmark_bar_chart.data.datasets[0].borderColor[index];
	
	
	
	if(benchmark_list != null){
		for (i = 0; i < benchmark_list.length; i++) {
				hotel_list.push("H"+i);
				average_list.push(average);
			}	
		benchmark_bar_chart.data.labels = hotel_list;
		benchmark_bar_chart.data.datasets[0].data = benchmark_list;
		benchmark_bar_chart.data.datasets[1].data = average_list;
//		benchmark_bar_chart.data.datasets[0].backgroundColor = color_list_generation(benchmark_list.length,false);
//		benchmark_bar_chart.data.datasets[0].borderColor = color_list_generation(benchmark_list.length,true);
		benchmark_bar_chart.data.labels[index] = "Your Hotel";
		var record_origin_color = benchmark_bar_chart.data.datasets[0].backgroundColor[index]
		benchmark_bar_chart.data.datasets[0].backgroundColor[index] = rgb_record;
		
		benchmark_bar_chart.update();
		benchmark_bar_chart.data.datasets[0].backgroundColor[index] = record_origin_color;
		}
	
	function list_plus(list){
		average = average + list;
	}
	
}


if(document.getElementById('benchmark-benchmark-canvas')){
	
	var ctx = document.getElementById('benchmark-benchmark-canvas').getContext('2d');
	var chart_benchmark = new Chart(ctx, {
	    type: 'bubble',
	    data: {
	      labels: "Africa",
	      datasets: [
	        {
	          label: ["Min Waste"],
	          backgroundColor: "rgba(255,221,50,0.2)",
	          borderColor: "rgba(255,221,50,1)",
	          data: [{
	            x: 400,
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
	          label: ["Max Waste"],
	          backgroundColor: "rgba(0,0,0,0.2)",
	          borderColor: "#000",
	          data: [{
	            x: 850,
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
	
	
	
	
	
	
//	window.chartChange =function chartChange(list){
//		var min, avg, max, performance;
//		min = list[0];
//		avg = list[1];
//		max = list[2];
//		performance = list[3];
//		var performance_scale = (1-(Math.abs(performance-avg))/avg)*10;
//		performance_scale = performance_scale.toFixed(2);
//		
//		chart_benchmark.data.datasets[0].data=[{x:min,y:0,r:10}];
//		chart_benchmark.data.datasets[1].data=[{x:avg,y:10,r:10}];
//		chart_benchmark.data.datasets[2].data=[{x:max,y:0,r:10}];
//		chart_benchmark.data.datasets[3].data=[{x:performance,y:performance_scale,r:20}];
//		chart_benchmark.update();
//		
//		benchmark_polarity_chart.data.datasets[0].data = [max,avg,min,performance];
//		benchmark_polarity_chart.update();
//		
//	}
	
	
	
	
//	Chart.plugins.register({
//		afterDraw: function(chart_benchmark) {
////			console.log('After draw: ', chart);
////			console.log('Title: ', chart.options.title.text);
////			console.log(chart.data.datasets[0].data.length,  chart.canvas.id, chart.data.datasets[0].data);
//			
//			if (chart_benchmark.data.datasets[0].data[0].x === 0) {
//				// No data is present
//				var ctx = chart_benchmark.chart.ctx;
//				var width = chart_benchmark.chart.width;
//				var height = chart_benchmark.chart.height;
//				chart_benchmark.clear();
//
//				ctx.save();
//				ctx.textAlign = 'center';
//				ctx.textBaseline = 'middle';
//				ctx.fillStyle = 'rgba(0, 153, 255,0.7)';
//				ctx.font = "40px sans-serif";
//				// chart.options.title.text <=== gets title from chart 
//				// width / 2 <=== centers title on canvas 
//				// 18 <=== aligns text 18 pixels from top, just like Chart.js 
//				ctx.fillText('Corresponded Data is being Gathering.', width / 2, 30); // <====   ADDS TITLE
//				ctx.fillText('Thank you for your Patient!', width / 2, height / 2);
//				ctx.restore();
//			}
//		}
//	});
		