<template>
  <div class="hello">
    <h1>{{ msg }}</h1>

    <OrgChart id="tree" ref="tree"></OrgChart>
  </div>
</template>

<script>
import OrgChart from "@balkangraph/orgchart.js/orgchart";
export default {
  name: "HelloWorld",
  props: [
    'nodi'
  ]
    
  ,
  data() {
    nodes: [
      { id: 1, nome: "KPI6", messaggio: "Tytle1" },
      { id: 2, pid: 1, nome: "KPI4", messaggio: "Tytle2" },
      { id: 3, pid: 1, nome: "KPI5", messaggio: "Tytle3" },
      { id: 4, pid: 2, nome: "KPI1", messaggio: "Tytle4" },
    { id: 5, pid: 3, nome: "KPI2", messaggio: "Tytle4" },
    { id: 6, pid: 3, nome: "KPI3", messaggio: "Tytle4" }

    ];


  },
  mounted() {
    
    this.chart = new OrgChart(this.refs.tree, {
      nodes: this.nodi,

      nodeBinding: {
        field_0: "nome",
        field_1: "messaggio"
      }
    });
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
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
</style>
