<template>
  <div>
    <div  id="orgchart"/>
  </div>
</template>

<script>

export default {
   data() {
      return {
        nodi:[],
      }
    },
  mounted() {
    
    axios.get('./albero').then((response) => {
      var img="";
        let idModified = response.data.map(
          obj => {
            img="";
              if(obj.status==1){
                img="https://png2.cleanpng.com/sh/65c940fd340b17185e07f25712a7e392/L0KzQYm3VsA0N5lxR91yc4Pzfri0gBhma5wyhdN7az32ib7pjBwua51uiJ9qcoSwcr3ogBsua5lqe902bXH1e368gsE0aWY8SdcCYke1QXA8VsE3QWk8UaMAMkizQYW4WcM6PGo2RuJ3Zx==/kisspng-check-mark-symbol-clip-art-black-check-mark-5b13a571e7b721.5616987915280141939491.png";
                 }
              return {
                "id" : obj.nodeId,
                "pid":obj.	parentId,
                "img": img,
                "messaggio":obj.description,
                "nome":obj.name,
                }
                }
        );
          this.nodi = idModified;
          this.getChart();
              })
  },
  computed: {
    getChart() {
      return {
          
        chart: new OrgChart(document.getElementById("orgchart"), {
            enableSearch: false,
            mouseScrool: OrgChart.action.none, 
            enableKeyNavigation: false,
            min : true,
            scaleInitial : 0.5,
            orientation: OrgChart.orientation.bottom,
            nodeBinding: {
            field_0: "nome",
            img_0:"img"
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
#orgchart {
                            
  width: 500px;
  height:250px;
  overflow: hidden;
 }


</style>
