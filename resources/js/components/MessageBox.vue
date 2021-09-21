<template>

  <div>
    <h2>Messaggi</h2>
<el-table
    ref="multipleTable"
    :data="this.listmsg"
    tooltip-effect="dark"
    style="width: 33%"
    @selection-change="handleSelectionChange">
    <el-table-column
      type="selection"
      width="55">
    </el-table-column>
    <el-table-column
      prop="id"
      label="sistema"
      width="120">
    </el-table-column>
    <el-table-column
      prop="msg"
      label="messaggio"
      show-overflow-tooltip>
    </el-table-column>
  </el-table>
  <div style="margin-top: 20px ">
    <el-button @click="toggleSelection([tableData[1], tableData[2]])">applica</el-button>
    <el-button @click="toggleSelection()">applica</el-button>
  </div>

  </div>
</template>

<script>
  export default {
     props: [
            'listmsg',
            
        ],
    data() {
      return {
        multipleSelection: []
      }
    },

    methods: {
      toggleSelection(rows) {
        if (rows) {
          rows.forEach(row => {
            this.$refs.multipleTable.toggleRowSelection(row);
          });
        } else {
          this.$refs.multipleTable.clearSelection();
        }
      },
      handleSelectionChange(val) {
        this.multipleSelection = val;
      }
    }
  }
</script>