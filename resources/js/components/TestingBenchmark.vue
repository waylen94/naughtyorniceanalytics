<template>
  <div class="small">
    <line-chart :chart-data="datacollection"></line-chart>
    <button @click="fillData()">Randomize</button>
  </div>
</template>

<script>
  import LineChart from './LineChart.js'

  export default {
    components: {
      LineChart
    },
    data () {
      return {
        datacollection: null
      }
    },
    mounted () {
      this.fillData()
    },
    methods: {
      fillData () {
        this.datacollection = {
          labels:['08-May', '09-May', '10-May','11-May', '12-May','13-May', '14-May'],
          datasets: [{
		        	data: [651,542,333,452,423,399,356],
		            label: 'Plate Waste/Gram',
		            backgroundColor: 'rgb(255, 99, 132)',
		            borderColor: 'rgb(255, 99, 132)'          
		        		}]
	    		}
        }
      },
    }
</script>

<style>
  .small {
    max-width: 600px;
    margin:  150px auto;
    background-image: url("normaldistribution.png");
    background-position: center;
	background-repeat: no-repeat; 
  }
</style>