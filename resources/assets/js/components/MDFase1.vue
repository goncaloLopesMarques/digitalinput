<template>
   <div class="container">
    <div v-if="this.$store.getters.MarketingDigitalFase1" class="row" style ="text-align: center;min-height:200px;">
         <div class="col-md-5"></div>
          <div @click="toogleGestao" class="col-md-2 selecionavel">
            <button  for="redesSociais" v-bind:class="buttonGestao" style="background:url(images/social.png);">            
            </button> 
            <h5 class="card-title" style="color:black;">Gestão de Redes Sociais</h5> 
          </div>
         <div class="col-md-5"></div>
    </div> 
  
         <template v-if="this.$store.getters.gestao">
           <site-dinamico-fase4/>
         </template>



    </div>
</template>

<script>
   name: 'MarketingDigitalFase1'
       export default {
           data: function(){
               return{
                   //variaveis para s classes css dos botoes quando sao carregados
                   buttonGestao: 'buttonEmpty buttonShop',
               }
           },
           mounted() {
               if(this.$store.getters.gestao){
                 this.buttonGestao = 'buttonPressed buttonShop';
               }else{
                   this.buttonGestao = 'buttonEmpty buttonShop'
               }
           },
           methods: {
               toogleGestao(){
                   if(!this.$store.getters.gestao){
                    this.buttonGestao = 'buttonPressed buttonShop';   
                    this.$store.dispatch('selecionaGestao'); 
                   }else{
                    this.buttonGestao = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaGestao');
                    this.$store.dispatch('desselecionaFacebook');
                    this.$store.dispatch('desselecionaInstagram');  
                    this.$store.dispatch('desselecionaTwitter'); 
                    this.$store.dispatch('desselecionaLinkedin'); 
                    this.$store.dispatch('desselecionaPinterest');
                    this.$store.dispatch('desselecionaAdwords'); 
                  }
               },
           }
       }
</script>