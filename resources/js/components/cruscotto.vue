<template>
  <div id="app">
   <h2>{{this.name}}</h2>
<div>
    <fusioncharts style="float:left;"
      :type="typeWidget"
      :width="250"
      :height="250"
      :dataFormat="dataFormat"
      :dataSource="dataSourceWidget"
      :events="events"
      ref="fc"
    ></fusioncharts>

    <fusioncharts 
      :type="typeWidget"
      :width="250"
      :height="250"
      :dataFormat="dataFormat"
      :dataSource="dataSourceWidget2"
      :events="events"
      ref="fc"
    ></fusioncharts>

</div>

<hr>
<hr size="20">
    
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

</template>

<script>
import Vue from "vue";
import VueFusionCharts from "vue-fusioncharts";
// import FusionCharts modules and resolve dependency
import FusionCharts from "fusioncharts";
import Charts from "fusioncharts/fusioncharts.charts";
import Widgets from "fusioncharts/fusioncharts.widgets";
import FusionTheme from "fusioncharts/themes/fusioncharts.theme.zune";


Vue.use(VueFusionCharts, FusionCharts, Charts, Widgets, FusionTheme);

console.log(FusionCharts);

export default {
  name: "App",

  props: [
            'value',
            "setstatus",
        ],

  data: function() {
    return {
      status: "",
      name:"KPI1- Confort",

      typeWidget: "angulargauge",
      type: "column2d",
      dataFormat: "json",
      dataSourceWidget: {
        chart: {
         
      gaugeOuterRadius: "90",
      gaugeInnerRadius: "40",
      pivotRadius: "10",
       majorTMNumber: "9",
      minorTMNumber: "4",
      valueBelowPivot: "1",
           showValue: "1",
   
         // caption: "KPI3 -Confort",
          subcaption: "Valore Attuale",
          lowerLimit: "0",
          upperLimit: "100",
          theme: "zune"
        },
        colorRange: {
          color: [
            {
              minValue: "0",
              maxValue: "20",
              code: "#e44a00"
            },
            {
              minValue: "20",
              maxValue: "40",
              code: "#ffa500"
            },
            {
              minValue: "40",
              maxValue: "60",
              code: "#ffff00"
            },
            {
              minValue: "60",
              maxValue: "80",
              code: "#82f72f"
            },
            {
              minValue: "80",
              maxValue: "100",
              code: "#6baa01"
            }
          ]
        },
        dials: {
          dial: [
            {
              value: ""
            }
          ]
        }
      },
       dataSourceWidget2: {
        chart: {
       //   caption: "KPI3 -Confort",
          subcaption: "Valore Atteso",
          lowerLimit: "0",
          upperLimit: "100",
          theme: "zune",
            valueBelowPivot: "1",
           showValue: "1",
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
              value: ""
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
          theme: "zune"
        }
        
       
      },
      events: {
        dataPlotRollOver: function(e) {
          console.log(e.eventType);
        }
      },
      
    };
  },
  methods: {
        chooseStatus(type) {
      if (type === this.status) {
        //this.status = "";
        //this.name="";
        //this.dataSourceWidget.dials.dial[0].value="";
        //this.dataSourceWidget2.dials.dial[0].value="";
      
      } else {
        this.status = type;

        switch(type) {
    case "1":
      this.name="KPI1- Confort";
    this.dataSourceWidget.dials.dial[0].value=this.value.KPI1.vAttuale;
    this.dataSourceWidget2.dials.dial[0].value=this.value.KPI1.vAtteso;
    break;
    case "2":
      this.name="KPI2- Confort";
    this.dataSourceWidget.dials.dial[0].value=this.value.KPI2.vAttuale;
    this.dataSourceWidget2.dials.dial[0].value=this.value.KPI2.vAtteso;
    break;
    case "3":
      this.name="KPI3- Confort";
    this.dataSourceWidget.dials.dial[0].value=this.value.KPI3.vAttuale;
    this.dataSourceWidget2.dials.dial[0].value=this.value.KPI3.vAtteso;
    break;}
 
}
      
    },
    
  },
 mounted() {
   this.status = this.setstatus;
    this.dataSourceWidget.dials.dial[0].value=this.value.KPI1.vAttuale;
    this.dataSourceWidget2.dials.dial[0].value=this.value.KPI1.vAtteso;
  }
  
  }
;
</script>

<style lang="scss" scoped>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.sposta {
  position: relative;
  left: 10%;

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
