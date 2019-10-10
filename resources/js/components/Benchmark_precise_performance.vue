<template>
 		<div class="card">
              	<div class="row text-center">
                <div class="col">
                    <h1>Brief Report</h1>
                    
                    
                    <h3> Your Waste</h3>
                    <p><b>33 </b> kg </p>
                    
                    <h3> Maximum Waste</h3>
                    <p><b>60 </b> kg </p>
                    
                    <h3> Minimum Waste</h3>
                    <p><b>22 </b> kg </p>
                </div>
            </div>
      
         </div>
</template>

<script>

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
          labels: [this.getRandomInt(), this.getRandomInt()],
          datasets: [
            {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }, {
              label: 'Data One',
              backgroundColor: '#f87979',
              data: [this.getRandomInt(), this.getRandomInt()]
            }
          ]
        }
      },
      getRandomInt () {
        return Math.floor(Math.random() * (50 - 5 + 1)) + 5
      }
    }
  }
</script>

<style>
  .small {
    max-width:600px;
    max-height: 400px;
  }
</style>