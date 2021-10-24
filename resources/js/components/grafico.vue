<template>
  <div class="chartElem">

    <h2 style="text-align: left-center;">History</h2>
    <h2>Select KPI
      <select :value="'KPI1'" @change="chooseChart($event.target.value)">
    <option :value="chart.name" :key="chart.name" v-for="chart in this.points">
      {{ chart.name }}
    </option>
  </select>
  <hr style="border: 1px grey solid;">
  </h2>
  <hr>
    <div>
      <highcharts
        class="chart"
        :options="chartOptions"
        :updateArgs="updateArgs"
        ref="chart"
      ></highcharts>
    </div>
    
  
  </div>
  
</template>

<script>
import Vue from "vue";

import HighchartsVue from "highcharts-vue";
import Highcharts from "highcharts";
import dataModule from "highcharts/modules/data";
dataModule(Highcharts);

Vue.use(HighchartsVue);
export default {
      props: [
           
           
        ],
  data() {
    return {
      points:[],
      
      status: "",
      updateArgs: [true, true, { duration: 500 }],   
      data: [

      ],
      chartOptions: {
        
        chart: {
          type: "line",
        },
        title: {
          text: ""
                    },
        plotOptions: {
          series: {
            animation: {
              duration: 2000,
            },
          },
        },
        series: [
          
        ],
      },
    };
  },
  methods: {
          chooseChart(type) {
     
    this.chartOptions.series.pop();
    console.log(type);
   this.chartOptions.series.push(this.points[type]);
  this.chartOptions.title.text=this.points[type].name;
   

}
    
  },
  mounted() {
               axios.get('./kpihistory').then((response) => {
                // handle success
                console.log(response.data);

               this.points=response.data;
                this.chartOptions.series.push(this.points.KPI1);
              this.chartOptions.title.text=this.points.KPI1.name;
              })
    
  
          
        }
};
</script>


<style lang="scss" scoped>

.sposta {
  position: relative;
  float: right;
}
  select{
    margin: auto;
    border: 2px solid black;;
    outline: black;
    background: transparent;
    border-radius: 10px;
    display: block;
    padding: 5px 5px 5px 5px;
    font-size: 17px;
    color: black;
  }
  .move{
      float:right;
      margin-left: 40px;
  }

</style>
