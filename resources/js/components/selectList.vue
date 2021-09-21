<template>
  <ul class="select-list">
    <li
      v-for="item in list"
      :key="item"
      
      
    >
      {{ item.value }}
    </li>
  </ul>
</template>

<script>
export default {
  name: "SelectList",
  props: {
    valueField: {
      type: String,
      default: "value",
    },
    labelField: {
      type: String,
      default: "label",
    },
    value: {
      type: [Object, String],
      default: () => {},
    },
    list: {
      type: [JSON],
      required: true,
      default: () => [],
    },
  },
};
</script>

<style lang="less">
@border: "#ddd";
ul.select-list {
  list-style: none;
  margin: 0;
  padding-left: 0;
  border: 1px solid #ddd;
  li {
    padding: 6px 12px;
    border-bottom: 1px solid #ddd;
    box-sizing: border-box;
    font-size: 14px;
    cursor: pointer;

    &:last-child {
      border-bottom: none;
    }

    &:hover {
      background-color: #f5f7fa;
    }

    &.selected {
      padding-left: 10px;
      background-color: #f0f7ff;
      box-shadow: none;
      border-left: 2px solid #00bbff;
    }
  }
}
</style>