<template>
<div>
  <h1>Controller</h1>
  <hr>
      <h2>On/Off
        <div class="move"> 
  <div class="wrapper" :class="{'active-wrapper': status}" @click="changeState">
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
      status: 1,
      options:["Opzione1","Opzione2","Opzione3","Opzione4"],
    };
  },
      methods:{
selection(type) {

},
changeState(){
  this.status=!this.status;
  console.log(this.status);

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
  }
  .move{
      float:right;
      margin-left: 40px;
  }

</style>