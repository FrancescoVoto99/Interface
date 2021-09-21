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
      //document.querySelectorA("[ data - n - id ]").style.background = 'red';
  },
  computed: {
    getChart() {
      return {
          
        chart: new OrgChart(document.getElementById("orgchart"), {
            enableSearch: false,
            mouseScrool: OrgChart.action.none, 
            enableKeyNavigation: true,
            
min : true,
            
            scaleInitial : 0.5,
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
 [ node-id ] { 
        fill : #750000; } 
h3 {
  margin:  0 0;
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
                            
                            width: 500px;
                            height:300px;
                            overflow: hidden;
 }
rect:focus{
    fill: #F67D01 ;
}

</style>
