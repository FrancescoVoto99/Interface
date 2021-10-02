<template>
         <h3>Step
        <div class="move"> 

      <select :value="'opzione2'" @change="selection($event.target.value)">
    <option :value="option.label" :key="option.label" v-for="option in this.options">
      {{ option.label }}
    </option>
  </select>
  </div>
  </h3>
</template>

<script>
export default {
  props: [
            'options'
        ],

methods:{
selection(type) {

}
        
    }
};
</script>

<style  lang="scss" scoped>
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
    padding: 10px 10px 10px 10px;
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