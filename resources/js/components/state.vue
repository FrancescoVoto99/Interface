<template>
  <div id='bott'>

    <div class="btn-group">
      <span
        :class="{ 'achieve-btn': status === 'achieve' }"
        @click="chooseStatus('achieve')"
        class="status-btn"
        >S1</span
      >
     
      <span
        :class="{ 'unlock-btn': status === 'unlock' }"
        @click="chooseStatus('unlock')"
        class="status-btn"
        >S3</span
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "ButtonRadio",
  data() {
    return {
      status: "",
    };
  },
  methods: {
    chooseStatus(type) {
      if (type === this.status) {
        this.status = "";
      } else {
        this.status = type;
      }
    },
  },
};
</script>



<style lang="scss" scoped>
.btn-group {
  width: 150px;
  border-radius: 8px;
  border: 1px solid #e2e2ea;
  height: 34px;
  font-size: 14px;

  & > span:not(:last-child) {
    border-right: 1px solid rgba(226, 226, 234, 1);
  }
}

.status-btn {
  cursor: pointer;
  display: inline-block;
  color: rgba(105, 105, 116, 1);
  line-height: 30px;
  text-align: center;

  width: 70px;
  box-sizing: border-box;

  &:hover {
    color: rgba(255, 140, 8, 1);
  }
}

.achieve-btn {
  background: rgba(255, 246, 236, 1);
  border-radius: 8px 0px 0px 8px;
  position: relative;
  color: rgba(255, 140, 8, 1);

  &:after {
    content: "";
    display: block;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    border-radius: 8px 0px 0px 8px;
    border: 1px solid rgba(255, 140, 8, 1);
  }
}



.unlock-btn {
  background: rgba(255, 246, 236, 1);
  border-radius: 0 8px 8px 0px;
  position: relative;
  color: rgba(255, 140, 8, 1);

  &:after {
    content: "";
    display: block;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    border-radius: 0 8px 8px 0px;
    border: 1px solid rgba(255, 140, 8, 1);
  }
}
</style>
