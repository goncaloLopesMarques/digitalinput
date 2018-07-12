<template>
    <div class="container">
      <div v-if="this.$store.getters.siteDinamicoFase2Show" class="row" style ="text-align: center;">
      <div class="col-md-2">
        <button @click="toogleRedesSociais" for="redesSociais" v-bind:class="buttonClassRedes"><img src="images/facebook.png" />Redes Sociais</button>
      </div>
       <div v-if="!this.$store.getters.isEstatico" class="col-md-2">
         <button @click="toogleBlog" for="blog" v-bind:class="buttonClassBlog"><img src="images/levels.png" />Blog/noticias</button>
       </div>
           <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
         <button @click="toogleProdutos1" for="blog" v-bind:class="buttonClassProdutos1"><img src="images/delivery-cart.png" />0-50 Produtos</button>
           </div>
             <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
             <button @click="toogleProdutos2" for="blog" v-bind:class="buttonClassProdutos2"><img src="images/delivery-cart.png" />50-100 Produtos</button>  
           </div>
            <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
            <button @click="toogleProdutos3" for="blog" v-bind:class="buttonClassProdutos3"><img src="images/delivery-cart.png" />>100 Produtos</button> 
           </div>
 
      </div>
</div>
</template>
<script>
name: 'SiteDinamicoFase2'
    export default {
        data: function(){
            return{
                //variaveis para s classes css dos botoes quando sao carregados
                buttonClassRedes: '',
                buttonClassBlog: '',
                buttonClassProdutos1:'' ,
                buttonClassProdutos2:'',
                buttonClassProdutos3:'',
            }
        },
        mounted() {
            if(this.$store.getters.redesSelecionado){
              this.buttonClassRedes = 'buttonPressed';
            }else{
                this.buttonClassRedes = 'buttonEmpty'
            }
            if(this.$store.getters.blogSelecionado){
                 this.buttonClassBlog = 'buttonPressed';
            }else{
                this.buttonClassBlog = 'buttonEmpty';
            }
            if(this.$store.getters.produtos1){
                 this.buttonClassProdutos1 = 'buttonPressed';
            }else{
                this.buttonClassProdutos1 = 'buttonEmpty';
            }
            if(this.$store.getters.produtos2){
                 this.buttonClassProdutos2 = 'buttonPressed';
            }else{
                this.buttonClassProdutos2 = 'buttonEmpty';
            }
             if(this.$store.getters.produtos3){
                 this.buttonClassProdutos3 = 'buttonPressed';
            }else{
                this.buttonClassProdutos3 = 'buttonEmpty';
            }

        },
        methods: {
            toogleRedesSociais(){
                if(!this.$store.getters.redesSelecionado){
                   this.buttonClassRedes = 'buttonPressed';
                   this.$store.dispatch('selecionaRedes');   
                }else{
                    this.buttonClassRedes = 'buttonEmpty';
                    this.$store.dispatch('desselecionaRedes'); 
                }
            },
            toogleBlog(){
                if(!this.$store.getters.blogSelecionado){
                   this.buttonClassBlog = 'buttonPressed';
                   this.$store.dispatch('selecionaBlog');   
                }else{
                    this.buttonClassBlog = 'buttonEmpty';
                    this.$store.dispatch('desselecionaBlog'); 
                }
            },
            toogleProdutos1(){
               if(this.buttonClassProdutos1 == 'buttonEmpty'){
                    this.buttonClassProdutos1 = 'buttonPressed';
                    this.$store.dispatch('selecionaProdutos1');
                    this.buttonClassProdutos2 = 'buttonEmpty';
                    this.buttonClassProdutos3 = 'buttonEmpty';
                } 
            },
            toogleProdutos2(){
                if( this.buttonClassProdutos2 == 'buttonEmpty'){
                    this.buttonClassProdutos2 = 'buttonPressed';
                    this.$store.dispatch('selecionaProdutos2');
                    this.buttonClassProdutos1 = 'buttonEmpty';
                    this.buttonClassProdutos3 = 'buttonEmpty';
                } 
            },
            toogleProdutos3(){
                if(this.buttonClassProdutos3 == 'buttonEmpty'){
                    this.buttonClassProdutos3 = 'buttonPressed';
                    this.$store.dispatch('selecionaProdutos3');
                    this.buttonClassProdutos2 = 'buttonEmpty';
                    this.buttonClassProdutos1 = 'buttonEmpty';
                } 
            },
        }
    }
</script>

