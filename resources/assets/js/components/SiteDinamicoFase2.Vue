<template>
   <div class="container">
    <div v-if="this.$store.getters.siteDinamicoFase2Show && !this.$store.getters.lojaSelecionada && this.$store.getters.isEstatico" class="row" style ="text-align: center;min-height:200px;">
          <div class="col-md-5"></div>
        <div @click="tooglePublicity" class="col-md-2 selecionavel">
         <button  for="publicity" v-bind:class="buttonClassPublicity" style="background:url(images/publicity.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Publicidade On-Line</h5>    
      </div> 
            <div class="col-md-5"></div> 
      </div> 

         <div v-bind:class="bool">
             <div class="col-md-1"></div>
            <div  @click="toogleGoogleBusiness" class="col-md-2 selecionavel">
          <button  for="GoogleBusiness" v-bind:class="buttonGoogleBusiness" style="background:url(images/business.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Google Business</h5> 
        </div> 
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
    </div>  
     


     <div v-if="!this.$store.getters.isEstatico && !this.$store.getters.lojaSelecionada" class="row" style ="text-align: center;min-height:200px;">
  <div class="col-md-4"></div>
   <div @click="tooglePublicity" class="col-md-2 selecionavel">
         <button  for="publicity" v-bind:class="buttonClassPublicity" style="background:url(images/publicity.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Publicidade On-Line</h5>    
      </div> 

    <div @click="toogleBlog" class="col-md-2 selecionavel">
            <button for="blog" v-bind:class="buttonClassBlog" style="background:url(images/blog.png);">            
            </button> 
            <h5 class="card-title imgCard">Blog/noticias</h5>
         </div>
         <div class="col-md-4"></div>
          </div>
          <div  v-bind:class="bool2" style ="text-align: center;min-height:200px;">
            <div  @click="toogleGoogleBusiness" class="col-md-2 selecionavel">
          <button  for="GoogleBusiness" v-bind:class="buttonGoogleBusiness" style="background:url(images/business.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Google Business</h5> 
        </div> 
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
    </div>  



        <div v-if="!this.$store.getters.isEstatico && this.$store.getters.lojaSelecionada" class="row" style ="text-align: center;min-height:200px;">
          <div class="col-md-1"></div>
   <div @click="tooglePublicity" class="col-md-2 selecionavel">
         <button  for="Publicity" v-bind:class="buttonClassPublicity" style="background:url(images/publicity.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Publicidade On-Line</h5>    
      </div> 

    <div @click="toogleBlog" class="col-md-2 selecionavel">
            <button for="Publicity" v-bind:class="buttonClassBlog" style="background:url(images/blog.png);">            
            </button> 
            <h5 class="card-title imgCard">Blog/noticias</h5>
         </div>
         <div @click="toogleProdutos1" class="col-md-2 selecionavel">
                <button for="blog" v-bind:class="buttonClassProdutos1" style="background:url(images/store.png);">
                </button> 
                <h5 class="card-title imgCard">0-50 Produtos</h5>
         </div>
         <div  @click="toogleProdutos2" class="col-md-2 selecionavel">
                  <button for="blog" v-bind:class="buttonClassProdutos2" style="background:url(images/store.png);">
                  </button>
                 <h5 class="card-title imgCard">50-100 Produtos</h5> 
         </div>
         <div @click="toogleProdutos3" class="col-md-2 selecionavel">
            <button for="blog" v-bind:class="buttonClassProdutos3" style="background:url(images/store.png);">
                </button> 
                <h5 class="card-title imgCard">>100 Produtos</h5>

         </div>
         <div class="col-md-1"></div>
          </div>  
          <div  v-bind:class="bool3" style ="text-align: center;min-height:200px;">
            <div  @click="toogleGoogleBusiness" class="col-md-2 selecionavel">
          <button  for="GoogleBusiness" v-bind:class="buttonGoogleBusiness" style="background:url(images/business.png);">            
         </button> 
         <h5 class="card-title" style="color:black;">Google Business</h5> 
        </div> 
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
    </div> 
   </div>

</template>
<script>
   name: 'SiteDinamicoFase2'
       export default {
           data: function(){
               return{
                   //variaveis para s classes css dos botoes quando sao carregados
                   buttonClassPublicity: 'buttonEmpty buttonShop',
                   buttonClassBlog: 'buttonEmpty buttonShop',
                   buttonGoogleBusiness:'buttonEmpty buttonShop',
                   buttonGoogleAds:'buttonEmpty buttonShop',
                   buttonFacebookAds:'buttonEmpty buttonShop',
                   buttonClassProdutos1:'buttonEmpty buttonShop' ,
                   buttonClassProdutos2:'buttonEmpty buttonShop',
                   buttonClassProdutos3:'buttonEmpty buttonShop',
                   bool: 'row notShow',
                   bool2: 'row notShow',
                   bool3: 'row notShow',
               }
           },
           mounted() {
               if(this.$store.getters.bool == 'row show'){
                   this.bool = 'row show';
               }else{
                  this.bool = 'row notShow';
               }
               if(this.$store.getters.bool2 == 'row show'){
                 this.bool2 = 'row show';
               }else{
                    this.bool2 = 'row notShow';
               }
               if(this.$store.getters.bool3 == 'row show'){
                  this.bool3 = 'row show';
               }else{
                   this.bool3 = 'row notShow'; 
               }

               if(this.$store.getters.googleAds){
                 this.buttonGoogleAds = 'buttonPressed buttonShop';
               }else{
                   this.buttonGoogleAds = 'buttonEmpty buttonShop'
               }
               if(this.$store.getters.facebookAds){
                 this.buttonFacebookAds = 'buttonPressed buttonShop';
               }else{
                   this.buttonFacebookAds = 'buttonEmpty buttonShop'
               }
               if(this.$store.getters.googleMyBusiness){
                 this.buttonGoogleBusiness = 'buttonPressed buttonShop';
               }else{
                   this.buttonGoogleBusiness = 'buttonEmpty buttonShop'
               }
               if(this.$store.getters.publicidade){
                 this.buttonClassPublicity = 'buttonPressed buttonShop';
               }else{
                   this.buttonClassPublicity = 'buttonEmpty buttonShop'
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
               tooglePublicity(){
                  if(!this.$store.getters.publicidade){
                    this.buttonClassPublicity = 'buttonPressed buttonShop';
                    this.$store.dispatch('selecionaPublicidade'); 
                     if(this.$store.getters.isEstatico){
                       this.bool = 'row show';
                      }else if(!this.$store.getters.isEstatico && !this.$store.getters.lojaSelecionada){
                        this.bool2 = 'row show'; 
                      }else if(!this.$store.getters.isEstatico && this.$store.getters.lojaSelecionada){
                       this.bool3 = 'row show';
                    }
                }else{
                    this.buttonClassPublicity = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaPublicidade');
                    if(this.$store.getters.isEstatico){
                       this.bool = 'row notShow';
                      }else if(!this.$store.getters.isEstatico && !this.$store.getters.lojaSelecionada){
                        this.bool2 = 'row notShow';  
                      }else if(!this.$store.getters.isEstatico && this.$store.getters.lojaSelecionada){
                        this.bool3 = 'row notShow';
                    }
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
                   if(!this.$store.getters.googleAds){
                   this.buttonGoogleAds = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaGoogleAds');   
                }else{
                    this.buttonGoogleAds = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaGoogleAds');
                }
               },
               toogleFacebookAds(){
                   if(!this.$store.getters.facebookAds){
                   this.buttonFacebookAds = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaFacebookAds');   
                }else{
                    this.buttonFacebookAds = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaFacebookAds');
                }
               },
           }
       }
</script>