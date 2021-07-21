<template>
  <div >
    <vo-edit :data="chartData" :direction="'b2t'" :toggleCollapse=false v-on:click="handleClick"></vo-edit>
  </div>
</template>
 
<script>
import { VoBasic } from "vue-orgchart";
import "vue-orgchart/dist/style.min.css"
export default {
  components: { VoBasic },
  created() {
  
    this.chartData = {
      
      name: "KPI6",
        
      children:[
        { name: "KPI4" ,
          children: 
          [{ name: "KPI1" 
            
          }]
        },
        {
          name: "KPI5",
          children: [
    
                    { name: "KPI2" },
                    { name: "KPI3" }
                
                ] 
            
        
        }
      ]
    };
  },
  methods: {
    handleClick: e => {
      alert(e);
    }
  },
  
};
</script>

<style>
.obliquo {
-webkit-transform: rotate(180deg);
-moz-transform: rotate(180deg);
-o-transform: rotate(180deg);
-ms-transform: rotate(180deg);
transform: rotate(180deg);
}
#app .orgchart .node .title {
  background-color: #06C4DE;
}
#app .orgchart .node .content {
  border: 1px solid #06C4DE;
}
#app .orgchart .lines .leftLine {
  border-left: 1px solid #06C4DE;
}
#app .orgchart .lines .rightLine {
  border-right: 1px solid #06C4DE;
}
#app .orgchart .lines .topLine {
  border-top: 1px solid #06C4DE;
}
#app .orgchart .lines .bottomLine {
  border-bottom: 1px solid #06C4DE;
}
#app .orgchart .lines .downLine {
  background-color: #06C4DE;
}
</style>