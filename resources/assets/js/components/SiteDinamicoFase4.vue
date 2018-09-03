<template>
    <div class="container">

        <p> Selecione o numero de redes socias ás quais pretende apoio!
    <div class="row" style ="text-align: center; min-height:200px;">
        <div class="col-md-2"></div>
        <div @click="toogleFace" class="col-md-2 selecionavel">
        <button for="face" v-bind:class="buttonClassFace" style="background:url(images/facebook.png);"></button>
         <h5 class="card-title imgCard">FaceBook</h5>
        </div>
         <div @click="toogleInstagram" class="col-md-2 selecionavel">
        <button for="insta" v-bind:class="buttonClassInstagram" style="background:url(images/instagram.png);"></button>
  <h5 class="card-title imgCard">Instagram</h5>
        </div>
         <div @click="toogleLinkedin" class="col-md-2 selecionavel">
        <button for="linked" v-bind:class="buttonClassLinkedin" style="background:url(images/linkedin.png);"></button>
          <h5 class="card-title imgCard">LinkedIn</h5>
        </div>
         <div @click="tooglePinterest" class="col-md-2 selecionavel">
        <button for="pint" v-bind:class="buttonClassPinterest" style="background:url(images/pinterest.png);"></button>
          <h5 class="card-title imgCard">Pinterest</h5>
        </div>
        <div class="col-md-2"></div>
        <!--
         <div @click="toogleAdwords" class="col-md-2 selecionavel">
        <button for="adwords" v-bind:class="buttonClassAdwords" style="background:url(images/words.png);"></button>
          <h5 class="card-title imgCard">AdWords</h5>
        </div>
        -->
     </div>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><button @click="end" v-if="!this.$store.getters.gestao" type="button" class="fill">Terminar</button></div>
          <div class="col-md-5"></div>
     </div>
</div>
</template>
<script>
const Swal = require('sweetalert2')
name: 'SiteDinamicoFase2'
    export default {
        data: function(){
            return{
                //variaveis para s classes css dos botoes quando sao carregados
                buttonClassYes: 'buttonEmpty buttonShop',
                buttonClassNo: 'buttonEmpty buttonShop',
                buttonClassFace: 'buttonEmpty buttonShop',
                buttonClassInstagram: 'buttonEmpty buttonShop',
                buttonClassTwitter: 'buttonEmpty buttonShop',
                buttonClassLinkedin: 'buttonEmpty buttonShop',
                buttonClassPinterest: 'buttonEmpty buttonShop',
                buttonClassAdwords: 'buttonEmpty buttonShop',
                siteDinamicoFase4: true,
                buttonEnd : false,
                showButtons: true,
                showSocialMedia: false,
            }
        },
        mounted() {
            if(this.$store.getters.facebookSelecionado){
              this.buttonClassFace = 'buttonPressed buttonShop';
            }else{
                this.buttonClassFace = 'buttonEmpty buttonShop'
            }
            if(this.$store.getters.twitterSelecionado){
                 this.buttonClassInstagram = 'buttonPressed buttonShop';
            }else{
                this.buttonClassInstagram = 'buttonEmpty buttonShop';
            }
            if(this.$store.getters.instagramSelecionado){
                 this.buttonClassTwitter = 'buttonPressed buttonShop';
            }else{
                this.buttonClassTwitter = 'buttonEmpty buttonShop';
            }
            if(this.$store.getters.linkedinSelecionado){
                 this.buttonClassLinkedin= 'buttonPressed buttonShop';
            }else{
                this.buttonClassLinkedin= 'buttonEmpty buttonShop';
            }
            if(this.$store.getters.pinterestSelecionado){
                 this.buttonClassPinterest = 'buttonPressed buttonShop';
            }else{
                this.buttonClassPinterest = 'buttonEmpty buttonShop';
            }
            if(this.$store.getters.adwordsSelecionado){
                 this.buttonClassAdwords = 'buttonPressed buttonShop';
            }else{
                this.buttonClassAdwords = 'buttonEmpty buttonShop';
            }
        },
        methods: {
            yes(){
                this.showButtons = false;
                this.showSocialMedia = true;
                this.buttonEnd = true;
            },
            no(){
               this.$store.dispatch('desselecionaFacebook');
               this.$store.dispatch('desselecionaInstagram');  
               this.$store.dispatch('desselecionaTwitter'); 
               this.$store.dispatch('desselecionaLinkedin'); 
               this.$store.dispatch('desselecionaPinterest');
               this.$store.dispatch('desselecionaAdwords'); 
               this.$store.dispatch('selectFase5');
            },
            end(){
                // esta é uma função auxiliar para ver se algum elemento no array é igual a 1
                // se nenhum elemento for igua a 1 devolve FALSE
                // se pelo menos um elemento for igual a 1 devolve TRUE
                /*
                var even = function(element) {
                  if(element == 1)
                 return element;
                }; 
                if(!this.$store.getters.fase4Selection.some(even)){
                    Swal('Oops...', 'Tem de selecionar pelo menos uma opcção!', 'error')
                }else{
                    this.$store.dispatch('selectFase5');
                    }
                    */
                this.$store.dispatch('selectFase5'); 
            },
            toogleFace(){
                if(!this.$store.getters.facebookSelecionado){
                   this.buttonClassFace = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaFacebook');
                }else{
                    this.buttonClassFace = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaFacebook'); 
                }
            },
            toogleInstagram(){
                if(!this.$store.getters.instagramSelecionado){
                   this.buttonClassInstagram = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaInstagram');  
                }else{
                    this.buttonClassInstagram = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaInstagram'); 
                }
            },
             toogleTwitter(){
                if(!this.$store.getters.twitterSelecionado){
                   this.buttonClassTwitter = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaTwitter');  
                }else{
                    this.buttonClassTwitter = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaTwitter'); 
                }
            },
             toogleLinkedin(){
                if(!this.$store.getters.linkedinSelecionado){
                   this.buttonClassLinkedin = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaLinkedin');   
                }else{
                    this.buttonClassLinkedin = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaLinkedin'); 
                }
            },
             tooglePinterest(){
                if(!this.$store.getters.pinterestSelecionado){
                   this.buttonClassPinterest = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaPinterest'); 
                }else{
                    this.buttonClassPinterest = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaPinterest');
                }
            },
             toogleAdwords(){
                if(!this.$store.getters.adwordsSelecionado){
                   this.buttonClassAdwords = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaAdwords');  
                }else{
                    this.buttonClassAdwords = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaAdwords'); 
                }
            },
        }
    }
</script>

