<template>
<div class="conatiner">
    <div class="row" style ="text-align: center;min-height:200px;">
         <div class="col-md-4"></div>
        <div @click="tooglePublicidade" class="col-md-2 selecionavel">
         <button  for="Publicidade" v-bind:class="buttonPublicidade" style="background:url(images/publicity.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Publicidade On-Line</h5>    
      </div> 
      <div  @click="toogleGoogleBusiness" class="col-md-2 selecionavel">
          <button  for="GoogleBusiness" v-bind:class="buttonGoogleBusiness" style="background:url(images/business.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Google Business</h5> 
        </div> 
    <div class="col-md-4"></div>
    </div>
     <div v-if="this.bool" class="row" style ="text-align: center;min-height:200px;">
         <div class="col-md-2"></div>
        <div @click="toogleGoogleAds" class="col-md-2 selecionavel">
         <button  for="GoogleAds" v-bind:class="buttonGoogleAds" style="background:url(images/googleads.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Google Ads</h5>    
      </div> 
      <div  @click="toogleFacebookAds" class="col-md-2 selecionavel">
          <button  for="FacebookAds" v-bind:class="buttonFacebookAds" style="background:url(images/faceAds.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Facebook Ads</h5> 
        </div> 
    <div class="col-md-6"></div>
    </div>
</div>
</template>
<script>
   name: 'MarketingDigitalFase2'
       export default {
           data: function(){
               return{
                   //variaveis para s classes css dos botoes quando sao carregados
                   buttonPublicidade: 'buttonEmpty buttonShop',
                   buttonGoogleBusiness:'buttonEmpty buttonShop' ,
                   buttonFacebookAds:'buttonEmpty buttonShop' ,
                   buttonGoogleAds:'buttonEmpty buttonShop' ,
                   bool: false
               }
           },
           mounted() {
               if(this.$store.getters.publicidade){
                    this.buttonPublicidade = 'buttonPressed buttonShop';
               }else{
                   this.buttonPublicidade = 'buttonEmpty buttonShop';
               }
               if(this.$store.getters.googleMyBusiness){
                    this.buttonGoogleBusiness = 'buttonPressed buttonShop';
               }else{
                   this.buttonGoogleBusiness = 'buttonEmpty buttonShop';
               }
           },
           methods: {
               tooglePublicidade(){
                if(!this.$store.getters.publicidade){
                    this.bool = true;
                   this.buttonPublicidade = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaPublicidade');   
                }else{
                      this.bool = false;
                    this.buttonPublicidade = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaPublicidade');
                }
               },
               toogleGoogleBusiness(){
                if(!this.$store.getters.googleMyBusiness){
                   this.buttonGoogleBusiness = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaGoogleBusiness');   
                }else{
                    this.buttonGoogleBusiness = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaGoogleBusiness');
                }
               },
               toogleGoogleAds(){

               },
               toogleFacebookAds(){

               },
           }
       }
</script>