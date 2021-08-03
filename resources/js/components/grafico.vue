<template>
  <div class="chartElem">
    <div>
      <highcharts
       style="width: 33%"
        class="chart"
        :options="chartOptions"
        :updateArgs="updateArgs"
        ref="chart"
      ></highcharts>
    </div>
    <div>
      <button @click="addSeries">Add new series</button>
      <h2>la {{points}}</h2>
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
            'points'
        ],
  data() {
    return {
      
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
    addSeries() {
    
      this.chartOptions.series.push(this.points);
    }

    
  },
  mounted() {
           this.chartOptions.series.push(this.points);;
        }
};
</script>
