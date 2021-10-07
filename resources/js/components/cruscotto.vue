<template>
  <div id="app">
    <h2 style="text-align: left;">KPI</h2>
    <h3>Select KPI
      
    <select @change="chooseChart($event.target.value)">
    <option :value="index" :key="val.name" v-for="(val, index) in this.kpis">
      {{ val.name }}
    </option>
  </select>
  </h3>
  
<hr style="border: 1px grey solid;">


   <h2>{{this.nome}}</h2>
<div>
    <fusioncharts style="float:left;"
      :type="typeWidget"
      :width="200"
      :height="250"
      :dataFormat="dataFormat"
      :dataSource="dataSourceWidget"
      :events="events"
      ref="fc"
    ></fusioncharts>

    <fusioncharts 
      :type="typeWidget"
      :width="200"
      :height="250"
      :dataFormat="dataFormat"
      :dataSource="dataSourceWidget2"
      :events="events"
      ref="fc"
    ></fusioncharts>

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

  data: function() {
    return {
      kpis:[],

      nome:"KPI1- Confort",
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
     gaugeOuterRadius: "90",
      gaugeInnerRadius: "40",
      pivotRadius: "10",
       majorTMNumber: "9",
      minorTMNumber: "4",
      valueBelowPivot: "1",
           showValue: "1",

       //   caption: "KPI3 -Confort",
          subcaption: "Valore Atteso",
          lowerLimit: "0",
          upperLimit: "100",
          theme: "zune",
        },
        colorRange: {
          color:[
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

    chooseChart(type) {
       this.nome= this.kpis[type].name.concat("- Confort");
    this.dataSourceWidget.dials.dial[0].value=this.kpis[type].vAttuale;
    this.dataSourceWidget2.dials.dial[0].value=this.kpis[type].vAtteso;
    }

    
  },
 mounted() {
            axios.get('./kpi').then((response) => {
                // handle success
                console.log(response.data);
                
          let idModified = response.data.map(
               obj => {
                  return {
                "name" : obj.name,
                "vAtteso":obj.especValue,
                "vAttuale":obj.currValue,
                }
                }
                );

                this.kpis=idModified;
                this.dataSourceWidget.dials.dial[0].value=this.kpis[0].vAttuale;
                this.dataSourceWidget2.dials.dial[0].value=this.kpis[0].vAtteso;
              })
    
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
    margin-right: auto;
    margin-left: auto;
    border: 2px solid black;;
    outline: black;
    background: transparent;
    border-radius: 10px;
    display: block;
    padding: 5px 5px 5px 5px;
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
      margin:0px auto;
      
  }

</style>
