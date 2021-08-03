<template>
  <div>
<el-table
    ref="multipleTable"
    :data="tableData"
    tooltip-effect="dark"
    style="width: 33%"
    @selection-change="handleSelectionChange">
    <el-table-column
      type="selection"
      width="55">
    </el-table-column>
    <el-table-column
      label="sistema"
      width="120">
      <template slot-scope="scope">{{ scope.row.date }}</template>
    </el-table-column>
    <el-table-column
      prop="name"
      label="info"
      width="120">
    </el-table-column>
    <el-table-column
      prop="address"
      label="prova"
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
    data() {
      return {
        
        tableData: [{
          date: '2016-05-03',
          name: 's1',
          address: 'lore1'
        }, {
          date: '2016-05-02',
          name: 's2',
          address: 'lore2'
        }, {
          date: '2016-05-04',
          name: 's3',
          address: 'lore3'
        }, {
          date: '2016-05-01',
          name: 's4',
          address: 'lore4'
        }, {
          date: '2016-05-08',
          name: 's5',
          address: 'lore5'
        }, {
          date: '2016-05-06',
          name: 's6',
          address: 'lore6'
        }],
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