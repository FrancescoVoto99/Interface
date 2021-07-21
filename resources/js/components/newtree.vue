<template>
  <div class="hello">

    <OrgChart id="tree" ref="tree"></OrgChart>
  </div>
</template>

<script>
import OrgChart from "@balkangraph/orgchart.js/orgchart";
export default {
 
  data() {
    nodes: [
      { id: 1, name: "Name1", title: "Tytle1" },
      { id: 2, pid: 1, name: "Name2", title: "Tytle2" },
      { id: 3, pid: 1, name: "Name3", title: "Tytle3" }
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
