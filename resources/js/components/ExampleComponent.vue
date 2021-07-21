<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component  ciaooo {{text}}.
                    </div>

                    <button name="prova" v-on:click="ringraziagiorgia">
                            clicca qui
                    </button>
                    <div>
                       <h2>{{click}}</h2>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'prova',
        data(){
        return{
        text:'prova',
        click:'',
}
},
        methods:{
           ringraziagiorgia(){
           this.click="hai cliccato"
}},

        
        mounted() {
            console.log('Component mounted.')
        }
       }
</script>
