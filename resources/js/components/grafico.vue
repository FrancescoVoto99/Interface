<template>
  <div class="chartElem">
    <div>
      <highcharts
        class="chart"
        :options="chartOptions"
        :updateArgs="updateArgs"
        ref="chart"
      ></highcharts>
    </div>
    <div>
      <button @click="addSeries">Add new series</button>
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
          {
            name: "Series 1",
            data: [
          [1, 1],
          [2, 1],
          [3, 1],
          [4, 2],
          [5, 12],
          [6, 7],
          [7, 6],
          [8, 9],
          [9, 4],
          [10, 3]
        ],
            

          },
        ],
      },
    };
  },
  methods: {
    addSeries() {
      this.chartOptions.series.push(this.data[0]);
    },
  },
};
</script>
