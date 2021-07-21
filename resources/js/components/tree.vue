<template>
  <div id="app">
    <el-dialog title="Tips" :visible.sync="dialogVisible" width="30%">
      <span>This is a message</span>
      <span slot="footer">
        <el-button @click="dialogVisible = false">Cancel</el-button>
        <el-button type="primary" @click="dialogVisible = false">Confirm</el-button>
      </span>
    </el-dialog>

    <organization-chart id="organization-chart" :datasource="ds"></organization-chart>
  </div>
</template>

<script>
import OrganizationChart from "vue-organization-chart";
import $ from "jquery";

import "element-ui/lib/theme-chalk/index.css";
import "vue-organization-chart/dist/orgchart.css";

export default {
  name: "App",
  components: {
    OrganizationChart
  },
  data() {
    return {
      dialogVisible: false,
      activeId: 0,
      ds: {
        id: "1",
        name: "Ana",
        title: "General",
        children: [
          { id: "2", name: "Abraham", title: "Lieutenant General" },
          {
            id: "3",
            name: "Nate",
            title: "Lieutenant General",
            children: [
              { id: "4", name: "Mike", title: "Major General" },
              {
                id: "5",
                name: "Blake",
                title: "Major General",
                children: [
                  { id: "6", name: "Bob", title: "Colonel" },
                  { id: "7", name: "Dave", title: "Colonel" }
                ]
              }
            ]
          }
        ]
      }
    };
  },
  mounted() {
    $(this.$el)
      .find("#organization-chart .node")
      .on("click", e => {
        // this.activeId = $(e.target)
        //   .closest(".node")
        //   .attr("id");
        // this.dialogVisible = true;
      });
  }
};
</script>

<style>
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