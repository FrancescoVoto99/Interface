<template>
  <div>
    <div  id="orgchart"/>
  </div>
</template>

<script>
import OrgChart from "@balkangraph/orgchart.js/orgchart";

import $ from 'jquery';
import HelloWorld from "./albero.vue";

export default {

  components: {
    //HelloWorld
  },
   data() {
      return {
        nodi:[],
        nodo:'1',
      }
    },
    

  mounted() {

           console.log("response");

        axios.get('./albero').then((response) => {
                // handle success
                console.log(response.data);
                
          let idModified = response.data.map(
               obj => {
                  return {
                "id" : obj.nodeId,
                "pid":obj.	parentId,
                "messaggio":obj.description,
                "nome":obj.name,
                "stato":obj.status
                }
                }
        );

                this.nodi = idModified;
                 console.log( $("svg"));
                console.log("ok") 
                
                this.getChart();
               
               
              })
             
      
    
      //document.querySelectorA("[ data - n - id ]").style.background = 'red';
  },
  updated: function () {
  this.$nextTick(function () {
     console.log(document.getElementById("orgchart").querySelectorAll("[node-id='3']"))
     
  })
},
  computed: {
    getChart() {
       console.log( $("svg"));
       console.log(document.querySelectorAll("[data-n-id='1'] rect"));
       var rect = document.getElementById("orgchart");
      
       var  bbox =rect.getElementsByTagName("svg");
       var prova=bbox;
        console.log(bbox);
        
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
  
 [ node-id = '1'] rect{ 
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
                            height:250px;
                            overflow: hidden;
 }
rect:focus{
    fill: #F67D01 ;
}

</style>
