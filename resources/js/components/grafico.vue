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
       style="width: 33%"
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
            'points',
           
        ],
  data() {
    return {
      status: "",
      updateArgs: [true, true, { duration: 500 }],   
      data: [
          
        {
          name: "Series 2",
          data: [21, 22, 23, 24, 25, 26, 27, 28, 29, 30],
        },

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
        
           this.chartOptions.series.push(this.points.KPI1);
           this.chartOptions.title.text=this.points.KPI1.name;
        }
};
</script>


<style lang="scss" scoped>

.sposta {
  position: relative;
  float: right;
 

}
.custom-select{
  position: relative;
  display: block;
  max-width: 300px;
  min-width: 120px;
  margin: 0 auto;
  border: 1px solid #3C1C78;
  background-color: #16013E;
  z-index: 10;
}
  select{
    margin: auto;
    border: 2px solid black;;
    outline: black;
    background: transparent;
    border-radius: 10px;
    display: block;
    padding: 10px 10px 10px 10px;
    font-size: 17px;
    color: black;
  
  &:after{
    position: absolute;
    right: 0;
    top: 0;
    width: 50px;
    height: 100%;
    line-height: 38px;
    content: '\2228';
    text-align: center;
    color: #714BB9;
    font-size: 24px;
    border-left: 1px solid #3C1C78;
    z-index: -1;
  }
  }
  .move{
      float:right;
      margin-left: 40px;
  }

</style>
