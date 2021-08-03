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
  props: {
    msg: String
  },
  data() {
    nodes: [
      { id: 1, name: "KPI6", title: "Tytle1" },
      { id: 2, pid: 1, name: "KPI4", title: "Tytle2" },
      { id: 3, pid: 1, name: "KPI5", title: "Tytle3" },
      { id: 4, pid: 2, name: "KPI1", title: "Tytle4" },
    { id: 5, pid: 3, name: "KPI2", title: "Tytle4" },
    { id: 6, pid: 3, name: "KPI3", title: "Tytle4" }

    ];


  },
  mounted() {
    this.chart = new OrgChart(this.refs.tree, {
      nodes: this.nodes,

      nodeBinding: {
        field_0: "name",
        field_1: "title"
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
