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
