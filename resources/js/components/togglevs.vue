<template>
<div>
  <h1>Controller</h1>
  <hr>
      <h2>On/Off
        <div class="move"> 
  <div class="wrapper" :class="{'active-wrapper': status}" @click="status = !status">
    <div  class="toggle" :class="{'active-toggle': status}"/>
  </div>
  </div>
  </h2>

<hr>
           <h2>Step
        <div class="move"> 

      <select :value="'Opzione1'" @change="selection($event.target.value)">
    <option :value="option" :key="option" v-for="option in this.options">
      {{ option }}
    </option>
  </select>
  </div>
  </h2>
   
  </div>
  
</template>

<script>
export default {
  data() {
    return {
      status: "1",
      options:["Opzione1","Opzione2","Opzione3","Opzione4"],
    };
  },
     created() {
        //this.status = this.setstatus;
        },
      methods:{
selection(type) {

}
    }
};
</script>

<style lang="scss" scoped>
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

.custom-select{
  position: relative;
  display: block;
  max-width: 300px;
  min-width: 120px;
  margin: 0 auto;
  border: 1px solid #3C1C78;
  background-color: #16013E;
  z-index: 10;
}
  select{
    border: 2px solid black;;
    outline: black;
    background: transparent;
    border-radius: 10px;
    margin: 0;
    display: block;
    padding: 5px 5px 5px 5px;
    font-size: 17px;
    color: black;
  
  &:after{
    position: absolute;
    right: 0;
    top: 0;
    width: 50px;
    height: 100%;
    line-height: 38px;
    content: '\2228';
    text-align: center;
    color: #714BB9;
    font-size: 24px;
    border-left: 1px solid #3C1C78;
    z-index: -1;
  }
  }
  .move{
      float:right;
      margin-left: 40px;
  }

</style>