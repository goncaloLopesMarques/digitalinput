<template>
    <div class="container">
      <div v-if="this.$store.getters.siteDinamicoFase3Show" class="row" style ="text-align: center;">
      <div class="col-sm-6">
        <button @click="toogleSeo" for="seo" v-bind:class="buttonClassSeo"><img src="images/browser.png" />SEO</button>
      </div>
      <div class="col-sm-6">
       <div>
         <button @click="toogleKeys" for="keys" v-bind:class="buttonClassKeys"><img src="images/keyword.png" />KeyWords</button>
       </div> 
      </div>
    </div> 
</div>
</template>
<script>
name: 'SiteDinamicoFase3'
    export default {
        data: function(){
            return{
                //variaveis para s classes css dos botoes quando sao carregados
                buttonClassSeo: 'buttonEmpty',
                buttonClassKeys: 'buttonEmpty',
            }
        },
        mounted() {   
            if(this.$store.getters.seoSelecionado){
              this.buttonClassSeo = 'buttonPressed';
            }else{
                this.buttonClassSeo = 'buttonEmpty'
            }
            if(this.$store.getters.keyWordsSelecionado){
                 this.buttonClassKeys = 'buttonPressed';
            }else{
                this.buttonClassKeys = 'buttonEmpty';
            }
        },
        methods: {
            toogleSeo(){
                if(!this.$store.getters.seoSelecionado){
                   this.buttonClassSeo = 'buttonPressed';
                   this.$store.dispatch('selecionaSeo');   
                }else{
                    this.buttonClassSeo = 'buttonEmpty';
                    this.$store.dispatch('desselecionaSeo');
                }
            },
            toogleKeys(){   
                if(!this.$store.getters.keyWordsSelecionado){  
                   this.buttonClassKeys = 'buttonPressed';
                   this.$store.dispatch('selecionaKeyWords');
                }else{
                    this.buttonClassKeys = 'buttonEmpty';
                    this.$store.dispatch('desselecionaKeyWords'); 
                }
            },
        }
    }
</script>

