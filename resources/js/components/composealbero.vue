<template>
  <div>
    <div  id="orgchart"/>
  </div>
</template>

<script>
import OrgChart from "@balkangraph/orgchart.js/orgchart";


import HelloWorld from "./albero.vue";

export default {

  components: {
    //HelloWorld
  },
  props: [
    'nodi'
  ],
    

  mounted() {
    this.getChart();
      this.chart.getNode(1);
      document.querySelectorAll("[data-n-id='1'] rect").style.background = 'red';
  },
  computed: {
    getChart() {
      return {
          
        chart: new OrgChart(document.getElementById("orgchart"), {
            enableSearch: false,
            mouseScrool: OrgChart.action.none, 
            enableKeyNavigation: true,
            
min : true,
            
            scaleInitial : 0.6,
            orientation: OrgChart.orientation.bottom,
          nodeBinding: {
            field_0: "nome"
          },
          nodes: this.nodi,
        })
      };
    }
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
  margin-top: 0px;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
#orgchart {
                            
                            width: 600px;
                            height:400px;
                            overflow: hidden;
 }
rect:focus{
    fill: #F67D01 ;
}

</style>
