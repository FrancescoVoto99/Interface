<template>

  <div>
    <h2>Messaggi</h2>
 
    
  <div class="box">
<ul :key="message.messageId" :value="message.content" v-for="message in listmsg">
<li  >
      <input type="radio" v-model="msgselected" name="msgselected"  :value="message.messageId"> {{message.content}}
   </li> 
    </ul>  
   
  </div>
  <hr>
  <div id="add">
  <el-button @click="Selection()">applica</el-button>
 </div>

  </div>
  
</template>

<script>
  export default {
    data() {
      return {
        multipleSelection: [],
        images:[{imgId:1},{imgId:2},{imgId:3}],
        msgselected:1,
        listmsg:[]
      }
    },

    methods: {
      Selection() {
        document.getElementById("add").innerHTML = "You have selected: " + this.msgselected;
      
      },
      handleSelectionChange(val) {
        this.multipleSelection = val;
      }
    },
      mounted()  {
        console.log("response");
        axios.get('./message').then((response) => {
                // handle success
                console.log(response.data);
                //now this refers to your vue instance and this can access you data property
                this.listmsg = response.data;
              })
      
        

    }

  }
</script>

<style lang="scss" scoped>

.box {
  margin-left: 0;
  border:1px solid #EEE;
  overflow-y: auto;

  height: 100px;

}
ul{
   text-align: left;
padding-inline-start:0px
}
#add{
 margin-right:-100px;
}
</style>