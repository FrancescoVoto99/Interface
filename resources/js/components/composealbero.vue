<template>
  <div>
    <div  id="orgchart"/>
  </div>
</template>

<script>


import $ from 'jquery';


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
                 var img="";
          let idModified = response.data.map(
           
               obj => {
                 img="";
                 if(obj.status==1){
                  img="https://thumbs.dreamstime.com/z/segno-di-spunta-verde-111802378.jpg";
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


      
    
      //document.querySelectorA("[ data - n - id ]").style.background = 'red';
  },
  updated: function () {
  this.$nextTick(function () {
  
             


     
  })
},
  computed: {
    getChart() {

    
      //console.log( firstG);
 
      
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
