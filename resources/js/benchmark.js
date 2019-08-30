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
	
	var chart = chart_benchmark;
	
	
	window.chartChange =function chartChange(list){
		var min, avg, max, performance;
		min = list[0];
		avg = list[1];
		max = list[2];
		performance = list[3];
		var performance_scale = (1-(Math.abs(performance-avg))/avg)*10;
		chart.data.datasets[0].data=[{x:min,y:0,r:10}];
		chart.data.datasets[1].data=[{x:avg,y:10,r:10}];
		chart.data.datasets[2].data=[{x:max,y:0,r:10}];
		chart.data.datasets[3].data=[{x:performance,y:performance_scale,r:20}];
		chart.update();
	}
	
	
	
	
	Chart.plugins.register({
		afterDraw: function(chart) {
//			console.log('After draw: ', chart);
//			console.log('Title: ', chart.options.title.text);
//			console.log(chart.data.datasets[0].data.length,  chart.canvas.id, chart.data.datasets[0].data);
			
			if (chart.data.datasets[0].data[0].x === 0) {
				// No data is present
				var ctx = chart.chart.ctx;
				var width = chart.chart.width;
				var height = chart.chart.height;
				chart.clear();

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
	
	