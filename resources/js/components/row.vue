<template>
  <tr :active="selected">
    <td><v-checkbox primary hide-details v-model="selected"></v-checkbox></td>
    <td>{{ data.name }}</td>
    <td class="text-xs-right">{{ data.calories }}</td>
    <td class="text-xs-right">{{ data.fat }}</td>
    <td class="text-xs-right">{{ data.carbs }}</td>
    <td class="text-xs-right">{{ data.protein }}</td>
    <td class="text-xs-right">{{ data.sodium }}</td>
    <td class="text-xs-right">{{ data.calcium }}</td>
    <td class="text-xs-right">{{ data.iron }}</td>
  </tr>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      selected: false
    };
  },
  updated(e) {
    // console.log("updated");
  },
  watch: {
    selected() {
      this.$emit("rowSelected", { item: this.data, selected: this.selected });
    }
  }
};
</script>