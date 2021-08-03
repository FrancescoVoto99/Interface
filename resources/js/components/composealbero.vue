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

  mounted() {
    this.getChart();
  },
  computed: {
    getChart() {
      return {
          
        chart: new OrgChart(document.getElementById("orgchart"), {
            enableSearch: false,
            mouseScrool: OrgChart.action.none,
            enableKeyNavigation:true,
            
min : true,
            
            scaleInitial : 0.5,
            orientation: OrgChart.orientation.bottom,
           

          
          nodeBinding: {
            field_0: "name"
          },
          nodes: [
      { id: 1, name: "KPI6", title: "Tytle1" },
      { id: 2, pid: 1, name: "KPI4", title: "Tytle2" },
      { id: 3, pid: 1, name: "KPI5", title: "Tytle3" },
      { id: 4, pid: 2, name: "KPI1", title: "Tytle4" },
    { id: 5, pid: 3, name: "KPI2", title: "Tytle4" },
    { id: 6, pid: 3, name: "KPI3", title: "Tytle4" }

    ]
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
