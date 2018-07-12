<template>
    <div class="container">
            <template v-if="siteDinamicoFase4">
        <p> Deseja Apoio ao Marketing Digital?
      <div class="row" style ="text-align: center;">
      <div v-if="showButtons" class="col-sm">
        <button @click="yes" for="yes"><img src="images/checked.png" /></button>
      </div>
      <div v-if="showButtons" class="col-sm">
        <button @click="no" for="no"><img src="images/close.png" /></button>
      </div>
    <div class="row" style ="text-align: center; padding-bottom: 50px;">
   
        <div v-if="showSocialMedia" class="col-md-2">
        <button @click="toogleFace" for="face" v-bind:class="buttonClassFace"><img src="images/facebook.png" /></button>
        </div>
         <div v-if="showSocialMedia" class="col-md-2">
        <button @click="toogleInstagram" for="insta" v-bind:class="buttonClassInstagram"><img src="images/instagram.png" /></button>
        </div>
         <div v-if="showSocialMedia" class="col-md-2">
        <button @click="toogleTwitter" for="twitter" v-bind:class="buttonClassTwitter"><img src="images/twitter.png" /></button>
        </div>
         <div v-if="showSocialMedia" class="col-md-2">
        <button @click="toogleLinkedin" for="linked" v-bind:class="buttonClassLinkedin"><img src="images/linkedin.png" /></button>
        </div>
         <div v-if="showSocialMedia" class="col-md-2">
        <button @click="tooglePinterest" for="pint" v-bind:class="buttonClassPinterest"><img src="images/pinterest.png" /></button>
        </div>
         <div v-if="showSocialMedia" class="col-md-2">
        <button @click="toogleAdwords" for="adwords" v-bind:class="buttonClassAdwords"><img src="images/words.png" /></button>
        </div>
     </div>
    </div> 
         <div class ="row" style = "all: inherit;"> 
    <div v-if="buttonEnd">
     <button @click="end" type="button" class="btn btn-outline-dark">Terminar</button>
     </div>

     </div>
     </template>

</div>
</template>
<script>
const Swal = require('sweetalert2')
name: 'SiteDinamicoFase2'
    export default {
        data: function(){
            return{
                //variaveis para s classes css dos botoes quando sao carregados
                buttonClassFace: 'buttonEmpty',
                buttonClassInstagram: 'buttonEmpty',
                buttonClassTwitter: 'buttonEmpty',
                buttonClassLinkedin: 'buttonEmpty',
                buttonClassPinterest: 'buttonEmpty',
                buttonClassAdwords: 'buttonEmpty',
                siteDinamicoFase4: true,
                buttonEnd : false,
                showButtons: true,
                showSocialMedia: false,
            }
        },
        mounted() {
            if(this.$store.getters.facebookSelecionado){
              this.buttonClassFace = 'buttonPressed';
            }else{
                this.buttonClassFace = 'buttonEmpty'
            }
            if(this.$store.getters.twitterSelecionado){
                 this.buttonClassInstagram = 'buttonPressed';
            }else{
                this.buttonClassInstagram = 'buttonEmpty';
            }
            if(this.$store.getters.instagramSelecionado){
                 this.buttonClassTwitter = 'buttonPressed';
            }else{
                this.buttonClassTwitter = 'buttonEmpty';
            }
            if(this.$store.getters.linkedinSelecionado){
                 this.buttonClassLinkedin= 'buttonPressed';
            }else{
                this.buttonClassLinkedin= 'buttonEmpty';
            }
            if(this.$store.getters.pinterestSelecionado){
                 this.buttonClassPinterest = 'buttonPressed';
            }else{
                this.buttonClassPinterest = 'buttonEmpty';
            }
            if(this.$store.getters.adwordsSelecionado){
                 this.buttonClassAdwords = 'buttonPressed';
            }else{
                this.buttonClassAdwords = 'buttonEmpty';
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
                var even = function(element) {
                  if(element == 1)
                 return element;
                }; 
                if(!this.$store.getters.fase4Selection.some(even)){
                    Swal('Oops...', 'Tem de selecionar pelo menos uma opcção!', 'error')
                }else{
                    this.$store.dispatch('selectFase5');
                }
            },
            toogleFace(){
                if(!this.$store.getters.facebookSelecionado){
                   this.buttonClassFace = 'buttonPressed';
                   this.$store.dispatch('selecionaFacebook');
                }else{
                    this.buttonClassFace = 'buttonEmpty';
                    this.$store.dispatch('desselecionaFacebook'); 
                }
            },
            toogleInstagram(){
                if(!this.$store.getters.instagramSelecionado){
                   this.buttonClassInstagram = 'buttonPressed';
                   this.$store.dispatch('selecionaInstagram');  
                }else{
                    this.buttonClassInstagram = 'buttonEmpty';
                    this.$store.dispatch('desselecionaInstagram'); 
                }
            },
             toogleTwitter(){
                if(!this.$store.getters.twitterSelecionado){
                   this.buttonClassTwitter = 'buttonPressed';
                   this.$store.dispatch('selecionaTwitter');  
                }else{
                    this.buttonClassTwitter = 'buttonEmpty';
                    this.$store.dispatch('desselecionaTwitter'); 
                }
            },
             toogleLinkedin(){
                if(!this.$store.getters.linkedinSelecionado){
                   this.buttonClassLinkedin = 'buttonPressed';
                   this.$store.dispatch('selecionaLinkedin');   
                }else{
                    this.buttonClassLinkedin = 'buttonEmpty';
                    this.$store.dispatch('desselecionaLinkedin'); 
                }
            },
             tooglePinterest(){
                if(!this.$store.getters.pinterestSelecionado){
                   this.buttonClassPinterest = 'buttonPressed';
                   this.$store.dispatch('selecionaPinterest'); 
                }else{
                    this.buttonClassPinterest = 'buttonEmpty';
                    this.$store.dispatch('desselecionaPinterest');
                }
            },
             toogleAdwords(){
                if(!this.$store.getters.adwordsSelecionado){
                   this.buttonClassAdwords = 'buttonPressed';
                   this.$store.dispatch('selecionaAdwords');  
                }else{
                    this.buttonClassAdwords = 'buttonEmpty';
                    this.$store.dispatch('desselecionaAdwords'); 
                }
            },
        }
    }
</script>

