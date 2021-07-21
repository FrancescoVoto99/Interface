<template>
  <ul class="toggle-list" :class="toggleClass">
    <li class="toggle-item">
      <input
        type="radio"
        :id="`${name}-left`"
        :name="name"
        :value="options[0].val"
        v-model="selected"
        onlyread
      />
      <label :for="`${name}-left`">
        {{ options[0].label }}
      </label>
    </li>
    <li class="toggle-item">
      <input
        type="radio"
        :id="`${name}-right`"
        :name="name"
        :value="options[1].val"
        v-model="selected"
      />
      <label :for="`${name}-right`">
        {{ options[1].label }}
      </label>
    </li>
  </ul>
</template>

<script>
export default {
  props: ['options', 'name', 'value'],
  data() {
    return {
      selected: null
    }
  },
  computed: {
    toggleClass() {
      return {
        'left-checked': this.selected === this.options[0].val,
        'right-checked': this.selected === this.options[1].val
      }
    }
  },
  created() {
    this.selected = this.value
  },
  watch: {
    selected(newVal) {
      this.$emit('input', newVal)
    }
  }
}
</script>

<style>
.toggle-list {
  border: 1px solid #eee;
  border-radius: 1.5rem;
  display: inline-flex;
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
}

.toggle-list::before {
  content: "";
  background-color: #c8e6f5;
  border-radius: 1.5rem;
  display: block;
  position: absolute;
  top: 2px;
  height: calc(2.5rem - 4px);
  width: calc(6rem - 4px);
  transition: left 300ms ease-in-out;
}

.toggle-list.left-checked::before {
  left: 2px;
}

.toggle-list.right-checked::before {
  left: calc(6rem + 2px);
}

.toggle-item {
  width: 6rem;
  z-index: 2;
}

.toggle-item label {
  align-items: center;
  display: flex;
  justify-content: center;
  height: 2.5rem;
  width: 100%;
}

.toggle-item [type="radio"] {
  display: none;
}

.toggle-item [type="radio"]:not(:checked) + label {
  cursor: pointer;
}
</style>
