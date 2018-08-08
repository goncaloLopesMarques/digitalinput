<template>
    <div class="container">
      <div v-if="this.$store.getters.siteDinamicoFase3Show" class="row" style ="text-align: center;min-height:200px;">
      <div class="col-md-4">  </div>
      <div @click="toogleSeo" class="col-md-2 selecionavel">
                 <button for="seo" v-bind:class="buttonClassSeo" style="background:url(images/seo.png);">
                 </button>
                  <h5 class="card-title imgCard">SEOs</h5>
      </div>
      <div @click="toogleKeys" class="col-md-2 selecionavel">
         <button for="keys" v-bind:class="buttonClassKeys" style="background:url(images/keys.png);">
             </button>
              <h5 class="card-title imgCard">KeyWords</h5>
       </div>
      </div>
       <div class="col-md-4">  </div>
    </div> 

</template>
<script>
name: 'SiteDinamicoFase3'
    export default {
        data: function(){
            return{
                //variaveis para s classes css dos botoes quando sao carregados
                buttonClassSeo: 'buttonEmpty buttonShop',
                buttonClassKeys: 'buttonEmpty buttonShop',
            }
        },
        mounted() {   
            if(this.$store.getters.seoSelecionado){
              this.buttonClassSeo = 'buttonPressed buttonShop';
            }else{
                this.buttonClassSeo = 'buttonEmpty buttonShop'
            }
            if(this.$store.getters.keyWordsSelecionado){
                 this.buttonClassKeys = 'buttonPressed buttonShop';
            }else{
                this.buttonClassKeys = 'buttonEmpty buttonShop';
            }
        },
        methods: {
            toogleSeo(){
                if(!this.$store.getters.seoSelecionado){
                   this.buttonClassSeo = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaSeo');   
                }else{
                    this.buttonClassSeo = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaSeo');
                }
            },
            toogleKeys(){   
                if(!this.$store.getters.keyWordsSelecionado){  
                   this.buttonClassKeys = 'buttonPressed buttonShop';
                   this.$store.dispatch('selecionaKeyWords');
                }else{
                    this.buttonClassKeys = 'buttonEmpty buttonShop';
                    this.$store.dispatch('desselecionaKeyWords'); 
                }
            },
        }
    }
</script>

