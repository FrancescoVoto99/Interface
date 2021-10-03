<template>

<div>
  <div id='bott'>
      <h2>Subsystems</h2>

      <h3>Status
        <div class="move"> 
    <div class="btn-group">
      <span
        :class="{ 'achieve-btn': status === true }"
        @click="chooseStatus(true)"
        class="status-btn"
        >Set</span
      >
     
      <span
        :class="{ 'unlock-btn': status === false }"
        @click="chooseStatus(false)"
        class="status-btn"
        >Show</span
      >
    </div>
    </div>
    </h3>



<hr style="border: 1px grey solid;">
        <h3>{{this.subsystems[0].name}}
        <div class="move"> 

      <select :value="options[this.subsystems[0].status]" :disabled="!this.status" @change="selectionFCU0($event.target.selectedIndex)">
    <option :value="option" :key="option" v-for="option in options">
      {{ option }}
    </option>
  </select>
  </div>
  </h3>
  <hr>

        <h3>{{this.subsystems[1].name}}
        <div class="move"> 
      <select :value="options[this.subsystems[1].status]" :disabled="!this.status" @change="selectionWIN0($event.target.selectedIndex)">
    <option :value="option" :key="option" v-for="option in options">
      {{ option}}
    </option>
        </select>
        </div>
    </h3>
  </div>

  <hr>




<h3>{{this.subsystems[2].name}}
    <div class="move">
  <div class="wrapper" :class="{'active-wrapper': statussho0}" @click="changeSHA0">
    <div  class="toggle" :class="{'active-toggle': statussho0}"/>
  </div>
  </div> 
</h3>
<hr>
<h3>{{this.subsystems[3].name}}
    <div class="move">
<div class="wrapper" :class="{'active-wrapper': statusboiler}" @click="changeBoiler">
    <div  class="toggle" :class="{'active-toggle': statusboiler}"/>
  </div>
  </div> 
  </h3>
<hr>
  <h3>{{this.subsystems[4].name}}
<div class="move"> 
  <div class="wrapper" :class="{'active-wrapper': statuschiller}" @click="changeChillen">
    <div  class="toggle" :class="{'active-toggle': statuschiller}"/>
  </div>
</div>
</h3>
<hr>
  <h3>{{this.subsystems[5].name}}
    
            <div class="move" >     
                 <div class="wrapper" :class="{'active-wrapper': statussummer}" @click="changeSummer">
            <div  class="toggle" :class="{'active-toggle': statussummer}"/>
            </div>    
    </div>
 
</h3>

</div>
  
</template>

<script>
export default {

  data() {
    return {
        subsystems:[],
      statussho0:"",
      statusboiler: "",
      statuschiller:"",
      statussummer:"",
       status: false,
       options:["Opzione1","Opzione2","Opzione3","Opzione4"],
    };
  },
     created() {

        },
    mounted(){
                    axios.get('./subsystem').then((response) => {
                // handle success
                console.log(response.data);
                this.subsystems=response.data;
                this.statussho0 = response.data[2].status;
                this.statusboiler = response.data[3].status;
                this.statuschiller = response.data[4].status;
                this.statussummer = response.data[5].status;
              })

        },
      methods:{
        chooseStatus(type) {
        this.status = type;
    },
 
      changeSHA0(){
        if(this.status==true){
            this.statussho0=!this.statussho0;
        }
           
      },
      changeBoiler(){
         if(this.status==true){
           this.statusboiler=!this.statusboiler;
         }
      },
      changeChillen(){
         if(this.status==true){
           this.statuschiller=!this.statuschiller;
         }
      },
      changeSummer(){
         if(this.status==true){
           this.statussummer=!this.statussummer;
         }
      },
      selectionFCU0(type) {
          console.log(type);
        },
        selectionWIN0(type){
             console.log(type);
        },


      }

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
