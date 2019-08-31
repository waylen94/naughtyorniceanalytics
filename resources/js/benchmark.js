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
	
	
	var benchmark_polarity_chart = new Chart(document.getElementById("benchmark-polarity-canvas"), {
	    type: 'polarArea',
	    data: {
	    	labels: ["Max", "Avg", "Min", "Your"],
	      datasets: [
	        {
	          label: "Plate Waste",
	          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
	          data: [2478,5267,734,784]
	        }
	      ]
	    },
	    options: {
	      title: {
	        display: true,
	        text: 'performance exhibited in polar chart'
	      }
	    }
	});
	
//chart_benchmark
	//benchamrk_polarity_chart
	
	
	window.chartChange =function chartChange(list){
		var min, avg, max, performance;
		min = list[0];
		avg = list[1];
		max = list[2];
		performance = list[3];
		var performance_scale = (1-(Math.abs(performance-avg))/avg)*10;
		performance_scale = performance_scale.toFixed(2);
		
		chart_benchmark.data.datasets[0].data=[{x:min,y:0,r:10}];
		chart_benchmark.data.datasets[1].data=[{x:avg,y:10,r:10}];
		chart_benchmark.data.datasets[2].data=[{x:max,y:0,r:10}];
		chart_benchmark.data.datasets[3].data=[{x:performance,y:performance_scale,r:20}];
		chart_benchmark.update();
		
		benchmark_polarity_chart.data.datasets[0].data = [max,avg,min,performance];
		benchmark_polarity_chart.update();
		
	}
	
	
	
	
	Chart.plugins.register({
		afterDraw: function(chart_benchmark) {
//			console.log('After draw: ', chart);
//			console.log('Title: ', chart.options.title.text);
//			console.log(chart.data.datasets[0].data.length,  chart.canvas.id, chart.data.datasets[0].data);
			
			if (chart_benchmark.data.datasets[0].data[0].x === 0) {
				// No data is present
				var ctx = chart_benchmark.chart.ctx;
				var width = chart_benchmark.chart.width;
				var height = chart_benchmark.chart.height;
				chart_benchmark.clear();

				ctx.save();
				ctx.textAlign = 'center';
				ctx.textBaseline = 'middle';
				ctx.fillStyle = 'rgba(0, 153, 255,0.7)';
				ctx.font = "40px sans-serif";
				// chart.options.title.text <=== gets title from chart 
				// width / 2 <=== centers title on canvas 
				// 18 <=== aligns text 18 pixels from top, just like Chart.js 
				ctx.fillText('Corresponded Data is being Gathering.', width / 2, 30); // <====   ADDS TITLE
				ctx.fillText('Thank you for your Patient!', width / 2, height / 2);
				ctx.restore();
			}
		}
	});
	
	
	
	
	
	