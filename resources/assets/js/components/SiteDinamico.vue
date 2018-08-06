<template>
      <div v-if="this.$store.getters.siteDinamicoFase1Show" class="row" style ="text-align: center; min-height:200px;">
         <div v-if="!this.$store.getters.isEstatico" class="col-md-2">
            
               <button @click="toogleShop" for="dominio" v-bind:class="buttonClassShop" style="background:url(images/shop.png);">            
               </button>   
               <h5 class="card-title" style="color:black;">Loja Online</h5>       
         </div>
         <div class="col-md-2">
           
               <button @click="toogleDominio" for="dominio" v-bind:class="buttonClassDominio" style="background:url(images/www.png);">                
               </button>
                <h5 class="card-title" style="color:black;">Dominio</h5>  
         </div>
         <div class="col-md-2">
               <button @click="toogleAlojamento" for="alojamento" v-bind:class="buttonClassAlojamento" style="background:url(images/imac.png);">     
               </button>
               <h5 class="card-title" style="color:black;">Alojamento</h5>  
         </div>
         <div class="col-md-2">
               <button @click="tooglePages1" for="pages1" v-bind:class="buttonClassPages1" style="background:url(images/pages.png);">
               </button>
                <h5 class="card-title" style="color:black;">2-4 Paginas</h5>
         </div>
         <div class="col-md-2">
               <button @click="tooglePages2" for="pages2" v-bind:class="buttonClassPages2" style="background:url(images/pages.png);">
               </button>
                <h5 class="card-title" style="color:black;">4-8 Paginas</h5>
         </div>
         <div class="col-md-2">
               <button @click="tooglePages3" for="pages3" v-bind:class="buttonClassPages3" style="background:url(images/pages.png);">
               </button>
                <h5 class="card-title" style="color:black;">>8 Paginas</h5>
         </div>
      </div>
</template>
<script>
   const Swal = require('sweetalert2')
   name: 'Dinamico'
       export default {
           data: function(){
               return{
                   buttonClassDominio: 'buttonEmpty buttonShop',
                   buttonClassAlojamento:'buttonEmpty buttonShop',
                   buttonClassPages1: 'buttonEmpty buttonShop',
                   buttonClassPages2: 'buttonEmpty buttonShop',
                   buttonClassPages3: 'buttonEmpty buttonShop',
                   buttonClassShop:'buttonEmpty buttonShop',
               }
           },
           mounted() {
               if(this.$store.getters.dominioSelecionado){
                 this.buttonClassDominio = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassDominio = 'buttonEmpty buttonShop'
               }
               if(this.$store.getters.alojamentoSelecionado){
                    this.buttonClassAlojamento = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassAlojamento = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.pages1Selecionado){
                    this.buttonClassPages1 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassPages1 = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.pages2Selecionado){
                    this.buttonClassPages2 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassPages2 = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.pages3Selecionado){
                    this.buttonClassPages3 = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassPages3 = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.lojaSelecionada){
                    this.buttonClassShop = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassShop = 'buttonEmpty buttonShop';
               }
           },
           methods: {
               toogleShop(){
                   if(!this.$store.getters.lojaSelecionada){
                       this.buttonClassShop = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaLoja');
                       this.$store.dispatch('selecionaProdutos1');
                   }else{
                       this.buttonClassShop = 'buttonEmpty buttonShop';
                       this.$store.dispatch('desselecionaLoja'); 
                   }
               },
               toogleDominio(){
                   if(!this.$store.getters.dominioSelecionado){
                      this.buttonClassDominio = 'buttonPressed buttonShop';
                      this.$store.dispatch('selecionaDominio');   
                   }else{
                       this.buttonClassDominio = 'buttonEmpty buttonShop';
                       this.buttonClassDominio = 'buttonEmpty buttonShop';
                       this.$store.dispatch('desselecionaDominio'); 
                   }
               },
               toogleAlojamento(){
                   if(!this.$store.getters.alojamentoSelecionado){
                      this.buttonClassAlojamento = 'buttonPressed buttonShop';
                      this.$store.dispatch('selecionaAlojamento');   
                   }else{
                       this.buttonClassAlojamento = 'buttonEmpty buttonShop';
                       this.$store.dispatch('desselecionaAlojamento'); 
                   }
               },
               tooglePages1(){
                   if(this.buttonClassPages1 == 'buttonEmpty buttonShop'){
                       this.buttonClassPages1 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaPages1');
                       this.buttonClassPages2 = 'buttonEmpty buttonShop';
                       this.buttonClassPages3 = 'buttonEmpty buttonShop';
                   }         
               },
               tooglePages2(){
                   if(this.buttonClassPages2 == 'buttonEmpty buttonShop'){
                     this.buttonClassPages2 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaPages2');
                       this.buttonClassPages1 = 'buttonEmpty buttonShop';
                       this.buttonClassPages3 = 'buttonEmpty buttonShop';
                   }
               },
               tooglePages3(){
                    if(this.buttonClassPages3 == 'buttonEmpty buttonShop'){
                       this.buttonClassPages3 = 'buttonPressed buttonShop';
                       this.$store.dispatch('selecionaPages3');
                       this.buttonClassPages1 = 'buttonEmpty buttonShop';
                       this.buttonClassPages2 = 'buttonEmpty buttonShop';
                    }
               },
           },
       }
</script>