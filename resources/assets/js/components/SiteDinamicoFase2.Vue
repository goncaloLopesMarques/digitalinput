<template>
   <div class="container">
    <div v-if="this.$store.getters.siteDinamicoFase2Show" class="row" style ="text-align: center;min-height:200px;">
     <div class="col-md-1"></div>
     <div class="col-md-2">
         <button @click="toogleRedesSociais" for="redesSociais" v-bind:class="buttonClassRedes" style="background:url(images/social.png);">            
            </button> 
            <h5 class="card-title" style="color:black;">Redes Sociais</h5>    
         </div>
      <div v-if="!this.$store.getters.isEstatico" class="col-md-2">
            <button @click="toogleBlog" for="redesSociais" v-bind:class="buttonClassBlog" style="background:url(images/blog.png);">            
            </button> 
            <h5 class="card-title imgCard">Blog/noticias</h5>
         </div>
         <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
                <button @click="toogleProdutos1" for="blog" v-bind:class="buttonClassProdutos1" style="background:url(images/store.png);">
                </button> 
                <h5 class="card-title imgCard">0-50 Produtos</h5>
         </div>
         <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
                  <button @click="toogleProdutos2" for="blog" v-bind:class="buttonClassProdutos2" style="background:url(images/store.png);">
                  </button>
                 <h5 class="card-title imgCard">50-100 Produtos</h5> 
         </div>
         <div v-if="this.$store.getters.lojaSelecionada" class="col-md-2">
            <button @click="toogleProdutos3" for="blog" v-bind:class="buttonClassProdutos3" style="background:url(images/store.png);">
                </button> 
                <h5 class="card-title imgCard">>100 Produtos</h5>

         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
</template>
<script>
   name: 'SiteDinamicoFase2'
       export default {
           data: function(){
               return{
                   //variaveis para s classes css dos botoes quando sao carregados
                   buttonClassRedes: 'buttonEmpty buttonShop',
                   buttonClassBlog: 'buttonEmpty buttonShop',
                   buttonClassProdutos1:'buttonEmpty buttonShop' ,
                   buttonClassProdutos2:'buttonEmpty buttonShop',
                   buttonClassProdutos3:'buttonEmpty buttonShop',
               }
           },
           mounted() {
               if(this.$store.getters.redesSelecionado){
                 this.buttonClassRedes = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassRedes = 'buttonEmpty buttonShop'
               }
               if(this.$store.getters.blogSelecionado){
                    this.buttonClassBlog = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassBlog = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.produtos1){
                    this.buttonClassProdutos1 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassProdutos1 = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.produtos2){
                    this.buttonClassProdutos2 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassProdutos2 = 'buttonEmpty buttonShop';
               }
                if(this.$store.getters.produtos3){
                    this.buttonClassProdutos3 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassProdutos3 = 'buttonEmpty buttonShop';
               }
   
           },
           methods: {
               toogleRedesSociais(){
                   if(!this.$store.getters.redesSelecionado){
                      this.buttonClassRedes = 'buttonPressed buttonShop';
                      this.$store.dispatch('selecionaRedes');   
                   }else{
                       this.buttonClassRedes = 'buttonEmpty buttonShop';
                       this.$store.dispatch('desselecionaRedes'); 
                   }
               },
               toogleBlog(){
                   if(!this.$store.getters.blogSelecionado){
                      this.buttonClassBlog = 'buttonPressed buttonShop';
                      this.$store.dispatch('selecionaBlog');   
                   }else{
                       this.buttonClassBlog = 'buttonEmpty buttonShop';
                       this.$store.dispatch('desselecionaBlog'); 
                   }
               },
               toogleProdutos1(){
                  if(this.buttonClassProdutos1 == 'buttonEmpty buttonShop'){
                       this.buttonClassProdutos1 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaProdutos1');
                       this.buttonClassProdutos2 = 'buttonEmpty buttonShop';
                       this.buttonClassProdutos3 = 'buttonEmpty buttonShop';
                   } 
               },
               toogleProdutos2(){
                   if( this.buttonClassProdutos2 == 'buttonEmpty buttonShop'){
                       this.buttonClassProdutos2 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaProdutos2');
                       this.buttonClassProdutos1 = 'buttonEmpty buttonShop';
                       this.buttonClassProdutos3 = 'buttonEmpty buttonShop';
                   } 
               },
               toogleProdutos3(){
                   if(this.buttonClassProdutos3 == 'buttonEmpty buttonShop'){
                       this.buttonClassProdutos3 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaProdutos3');
                       this.buttonClassProdutos2 = 'buttonEmpty buttonShop';
                       this.buttonClassProdutos1 = 'buttonEmpty buttonShop';
                   } 
               },
           }
       }
</script>