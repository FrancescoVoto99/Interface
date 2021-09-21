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
    
    <div class="sposta">
  <div class="btn-group">
      <span
        :class="{ 'achieve-btn': status === '1'}"
        @click="chooseStatus('1')"
        class="status-btn"
      >KPI1</span>
      <span
        :class="{ 'current-btn': status === '2'}"
        @click="chooseStatus('2')"
        class="status-btn"
      >KPI2</span>
      <span
        :class="{ 'unlock-btn': status === '3'}"
        @click="chooseStatus('3')"
        class="status-btn"
      >KPI3</span>
    </div>
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
            'setstatus'
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
        chooseStatus(type) {
      if (type === this.status) {
        this.status = "";
       this.chartOptions.series.pop();
      } else {
        this.status = type;

        switch(type) {
  case "1":
    this.chartOptions.series.pop();
   this.chartOptions.series.push(this.points.KPI1);
    break;
  case "2":
    this.chartOptions.series.pop();
    this.chartOptions.series.push(this.points.KPI2);
    break;
    case "3":
    this.chartOptions.series.pop();
    this.chartOptions.series.push(this.points.KPI4);
    break;}
 
}
      
    },
    
  },
  mounted() {
          this.status = this.setstatus;
           this.chartOptions.series.push(this.points.KPI1);
        }
};
</script>


<style lang="scss" scoped>

.sposta {
  position: relative;
  margin-left: 50px;

}
.btn-group {
  width: 240px;
  border-radius: 8px;
  border: 1px solid #e2e2ea;
  height: 34px;
  font-size: 14px;
  display: flex;
justify-content: center;


  & > span:not(:last-child) {
    border-right: 1px solid rgba(226, 226, 234, 1);
  }
}

.status-btn {
  cursor: pointer;
  display: inline-block;
  color: rgba(105, 105, 116, 1);
  line-height: 34px;
  text-align: center;

  width: 80px;
  box-sizing: border-box;

  &:hover {
    color: rgba(255, 140, 8, 1);
  }
}

.achieve-btn {
  background: rgba(255, 246, 236, 1);
  border-radius: 8px 0px 0px 8px;
  position: relative;
  color: rgba(255, 140, 8, 1);

  &:after {
    content: "";
    display: block;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    border-radius: 8px 0px 0px 8px;
    border: 1px solid rgba(255, 140, 8, 1);
  }
}

.current-btn {
  background: rgba(255, 246, 236, 1);
  position: relative;
  color: rgba(255, 140, 8, 1);

  &:after {
    content: "";
    display: block;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    border: 1px solid rgba(255, 140, 8, 1);
  }
}

.unlock-btn {
  background: rgba(255, 246, 236, 1);
  border-radius: 0 8px 8px 0px;
  position: relative;
  color: rgba(255, 140, 8, 1);

  &:after {
    content: "";
    display: block;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    border-radius: 0 8px 8px 0px;
    border: 1px solid rgba(255, 140, 8, 1);
  }
}
</style>
