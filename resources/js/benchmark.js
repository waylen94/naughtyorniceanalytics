if(document.getElementById('benchmark-benchmark-canvas')){
	
	var ctx = document.getElementById('benchmark-benchmark-canvas').getContext('2d');
	var chart_benchmark = new Chart(ctx, {
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
	
	var chart = chart_benchmark;
	
	// 1 star event driven
	if(document.getElementById("rating-star-1")){
	document.getElementById("rating-star-1").onclick = onestarhotel;
		function onestarhotel(){
				
				chart.data.datasets[0].data=[{x:666,y:222,r:20}];
				chart.update();
		
			};	
	};
	
	//2  star event driven
	if(document.getElementById("rating-star-2")){
	document.getElementById("rating-star-2").onclick = twostarhotel;
		function twostarhotel(){
		
		chart.data.datasets[0].data=[{x:666,y:222,r:20}];
		chart.update();
		};
	};
	
	// 3 star event driven
	if(document.getElementById("rating-star-3")){
	document.getElementById("rating-star-3").onclick = threestarhotel;
		function threestarhotel(){
				
				chart.data.datasets[0].data=[{x:666,y:222,r:20}];
				chart.update();
			};
	};
	
	//4 star event driven
	if(document.getElementById("rating-star-4")){
	document.getElementById("rating-star-4").onclick = fourstarhotel;
		function fourstarhotel(){
				chart.data.datasets[0].data=[{x:666,y:222,r:20}];
				chart.update();
			};
	};
	
	//5 star event driven
	if(document.getElementById("rating-star-5")){
	document.getElementById("rating-star-5").onclick = fivestarhotel;
		function fivestarhotel(){
				
				chart.data.datasets[0].data=[{x:666,y:222,r:20}];
				chart.update();
		
			};
	};