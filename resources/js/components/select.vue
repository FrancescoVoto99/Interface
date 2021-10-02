<template>
  <div class="wrap">
    <select
      @click="toggleSelect"
      name="fruits" 
      class="select select--minimal"
      :class="{ 'is-focus': isSelectOpen }"
    >
      <option class="select__option">Fruits</option>
    </select>
    <ul class="list" v-show="isSelectOpen">
      <li
        v-for="fruit in fruits"
        @click="selectItem(fruit)"
        :value="fruit.id"
        :key="fruit.id"
        class="list__item"
        :class="{ 'is-selected': isSelected(fruit.id) }"
      >{{ fruit.name }}</li>
    </ul>
  </div>
</template>

<script>
const fruits = [
  {
    name: "Apple",
    id: "1000000000"
  },
  {
    name: "Banana",
    id: "2000000000"
  },
  {
    name: "Clementine",
    id: "3000000000"
  },
  {
    name: "Dates",
    id: "4000000000"
  }
];

export default {
  name: "App",
  data() {
    return {
      fruits,
      selectedItem: null,
      isSelectOpen: false
    };
  },
  methods: {
    toggleSelect() {
      this.isSelectOpen = !this.isSelectOpen;
    },
    selectItem(fruit) {
      this.selectedItem = fruit;
    },
    isSelected(fruitId) {
      return this.selectedItem && fruitId === this.selectedItem.id;
    }
  }
};
</script>

<style lang="scss" scoped>
.wrap {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
  max-width: 200px;
  margin-left: auto;
  margin-right: auto;
}

.select {
  /* reset */
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;

  /* styling */
  background-color: white;
  border: thin solid gray;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;
  cursor: pointer;
  width: 100%;

  &:focus {
    outline: 0;
  }

  &--minimal {
    background-image: linear-gradient(45deg, transparent 50%, gray 50%),
      linear-gradient(135deg, gray 50%, transparent 50%),
        linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 20px) calc(1em + 2px),
      calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 1px 1.5em;
    background-repeat: no-repeat;
  }

  &--minimal.is-focus {
    background-image: linear-gradient(45deg, green 50%, transparent 50%),
      linear-gradient(135deg, transparent 50%, green 50%),
        linear-gradient(to right, #ccc, #ccc);
    background-position: calc(100% - 15px) 1em, calc(100% - 20px) 1em,
      calc(100% - 2.5em) 0.5em;
    background-size: 5px 5px, 5px 5px, 1px 1.5em;
    background-repeat: no-repeat;
    border-color: green;
  }
}

.select__option {
  display: none;
}

.list {
  border-radius: 4px;
  list-style: none;
  padding-left: 0;
  padding-top: 0.5em;
  padding-bottom: 0.5em;
  width: 100%;
}

.list__item {
  border: 1px solid green;
  cursor: pointer;
  padding: 0.5em 16px;
  background-color: lighten(lightgreen, 20%);
  position: relative;

  &:hover {
    background-color: lightgreen;
  }

  &:not(:first-of-type) {
    margin-top: -1px;
  }

  &:first-of-type {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
  }

  &:last-of-type {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
  }

  &.is-selected::after {
    content: "\002713";
    position: absolute;
    right: 12px;
    margin: auto 0;
    top: 7px;
  }
}
</style>
