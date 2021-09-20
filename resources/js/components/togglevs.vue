<template>
  <div class="wrapper" :class="{'active-wrapper': status}" @click="status = !status">
    <div  class="toggle" :class="{'active-toggle': status}"/>
  </div>
</template>

<script>
export default {
  props: [
            'setstatus'
        ],
  data() {
    return {
      status: ""
    };
  },
     created() {

        this.status = this.setstatus;
        },
};
</script>

<style>
.wrapper,
.toggle {
  box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 300ms ease;
}
.wrapper {
  width: 80px;
  height: 40px;
  display: flex;
  align-items: center;
  background: #faf9fa;
  border: 2px #e3e2e4 solid;
  border-radius: 50px;
}

.active-wrapper {
  background: #7ad48a;
}

.toggle {
  position: relative;
  width: 40px;
  height: 34px;
  background: #faf9fa;
  border: 2px #e3e2e4 solid;
  border-radius: 50px;
  margin: 3px;
}

.active-toggle {
  transform: translateX(85%);
}
</style>
