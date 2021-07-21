<template>
  <div id="app">
    <fusioncharts
      :type="typeWidget"
      :width="width"
      :height="200"
      :dataFormat="dataFormat"
      :dataSource="dataSourceWidget"
      :events="events"
      ref="fc"
    ></fusioncharts>
    <button v-on:click="update">Update</button>
    <fusioncharts
      :type="type"
      :width="width"
      :height="height"
      :dataFormat="dataFormat"
      :dataSource="dataSource"
      :dataEmptyMessage="message"
      :events="events"
      ref="fc"
    ></fusioncharts>
  </div>
</template>

<script>
import Vue from "vue";
import VueFusionCharts from "vue-fusioncharts";
// import FusionCharts modules and resolve dependency
import FusionCharts from "fusioncharts";
import Charts from "fusioncharts/fusioncharts.charts";
import Widgets from "fusioncharts/fusioncharts.widgets";
import FusionTheme from "fusioncharts/themes/fusioncharts.theme.fusion";

Vue.use(VueFusionCharts, FusionCharts, Charts, Widgets, FusionTheme);

console.log(FusionCharts);

export default {
  name: "App",

  data: function() {
    return {
      typeWidget: "angulargauge",
      type: "column2d",
      width: "600",
      height: "300",
      message: "",
      dataFormat: "json",
      dataSourceWidget: {
        chart: {
          caption: "KPI3 -Confort",
          subcaption: "Valore Atteso",
          lowerLimit: "0",
          upperLimit: "100",
          theme: "fusion"
        },
        colorRange: {
          color: [
            {
              minValue: "0",
              maxValue: "25",
              code: "#e44a00"
            },
            {
              minValue: "25",
              maxValue: "50",
              code: "#ffa500"
            },
            {
              minValue: "50",
              maxValue: "75",
              code: "#ffff00"
            },
            {
              minValue: "75",
              maxValue: "100",
              code: "#6baa01"
            }
          ]
        },
        dials: {
          dial: [
            {
              value: "80"
            }
          ]
        }
      },
      dataSource: {
        chart: {
          caption: "Monthly revenue for last year",
          subCaption: "Harry's SuperMart",
          xAxisName: "Month",
          yAxisName: "Revenues (In USD)",
          numberPrefix: "$",
          theme: "fusion"
        }
        // data: [
        //   {
        //     label: "Jan",
        //     value: "420000"
        //   },
        //   {
        //     label: "Feb",
        //     value: "810000"
        //   },
        //   {
        //     label: "Mar",
        //     value: "720000"
        //   },
        //   {
        //     label: "Apr",
        //     value: "550000"
        //   },
        //   {
        //     label: "May",
        //     value: "910000"
        //   },
        //   {
        //     label: "Jun",
        //     value: "510000"
        //   },
        //   {
        //     label: "Jul",
        //     value: "680000"
        //   },
        //   {
        //     label: "Aug",
        //     value: "620000"
        //   },
        //   {
        //     label: "Sep",
        //     value: "610000"
        //   },
        //   {
        //     label: "Oct",
        //     value: "490000"
        //   },
        //   {
        //     label: "Nov",
        //     value: "900000"
        //   },
        //   {
        //     label: "Dec",
        //     value: "730000"
        //   }
        // ],
        // trendlines: [
        //   {
        //     line: [
        //       {
        //         startvalue: "700000",
        //         valueOnRight: "1",
        //         displayvalue: "Monthly Target"
        //       }
        //     ]
        //   }
        // ]
      },
      events: {
        dataPlotRollOver: function(e) {
          console.log(e.eventType);
        }
      }
    };
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
