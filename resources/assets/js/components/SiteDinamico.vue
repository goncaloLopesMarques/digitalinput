<template>
    <div class="container">
     <div v-if="this.$store.getters.siteDinamicoFase1Show" class="row" style ="text-align: center;">
         <div v-if="!this.$store.getters.isEstatico" class="col-sm">
        <button @click="toogleShop" for="dominio" v-bind:class="buttonClassShop"><img src="images/online-shopping.png" />Loja Online</button>
      </div>
      <div class="col-sm">
        <button @click="toogleDominio" for="dominio" v-bind:class="buttonClassDominio"><img src="images/domain.png" />Dominio</button>
      </div>
       <div class="col-sm">
         <button @click="toogleAlojamento" for="alojamento" v-bind:class="buttonClassAlojamento"><img src="images/server.png" />Alojamento</button>
       </div> 
          <div class="col-sm">
         <button @click="tooglePages1" for="pages1" v-bind:class="buttonClassPages1"><img src="images/levels.png" />2-4 Paginas</button>
       </div> 
       <div class="col-sm">
         <button @click="tooglePages2" for="pages2" v-bind:class="buttonClassPages2"><img src="images/levels.png" />4-8 Paginas</button>
       </div> 
       <div class="col-sm">
         <button @click="tooglePages3" for="pages3" v-bind:class="buttonClassPages3"><img src="images/levels.png" /> >8 Paginas</button>
       </div> 
    </div> 
    </div> 
</template>
<script>
const Swal = require('sweetalert2')
name: 'Dinamico'
    export default {
        data: function(){
            return{
                buttonClassDominio: 'buttonEmpty',
                buttonClassAlojamento:'buttonEmpty',
                buttonClassPages1: 'buttonEmpty',
                buttonClassPages2: 'buttonEmpty',
                buttonClassPages3: 'buttonEmpty',
                buttonClassShop:'buttonEmpty',
            }
        },
        mounted() {
            if(this.$store.getters.dominioSelecionado){
              this.buttonClassDominio = 'buttonPressed';
            }else{
                this.buttonClassDominio = 'buttonEmpty'
            }
            if(this.$store.getters.alojamentoSelecionado){
                 this.buttonClassAlojamento = 'buttonPressed';
            }else{
                this.buttonClassAlojamento = 'buttonEmpty';
            }
            if(this.$store.getters.pages1Selecionado){
                 this.buttonClassPages1 = 'buttonPressed';
            }else{
                this.buttonClassPages1 = 'buttonEmpty';
            }
            if(this.$store.getters.pages2Selecionado){
                 this.buttonClassPages2 = 'buttonPressed';
            }else{
                this.buttonClassPages2 = 'buttonEmpty';
            }
            if(this.$store.getters.pages3Selecionado){
                 this.buttonClassPages3 = 'buttonPressed';
            }else{
                this.buttonClassPages3 = 'buttonEmpty';
            }
            if(this.$store.getters.lojaSelecionada){
                 this.buttonClassShop = 'buttonPressed';
            }else{
                this.buttonClassShop = 'buttonEmpty';
            }

        },
        methods: {
            toogleShop(){
                if(!this.$store.getters.lojaSelecionada){
                    this.buttonClassShop = 'buttonPressed';
                    this.$store.dispatch('selecionaLoja');
                    this.$store.dispatch('selecionaProdutos1');
                }else{
                    this.buttonClassShop = 'buttonEmpty';
                    this.$store.dispatch('desselecionaLoja'); 
                }
            },
            toogleDominio(){
                if(!this.$store.getters.dominioSelecionado){
                   this.buttonClassDominio = 'buttonPressed';
                   this.$store.dispatch('selecionaDominio');   
                }else{
                    this.buttonClassDominio = 'buttonEmpty';
                    this.$store.dispatch('desselecionaDominio'); 
                }
            },
            toogleAlojamento(){
                if(!this.$store.getters.alojamentoSelecionado){
                   this.buttonClassAlojamento = 'buttonPressed';
                   this.$store.dispatch('selecionaAlojamento');   
                }else{
                    this.buttonClassAlojamento = 'buttonEmpty';
                    this.$store.dispatch('desselecionaAlojamento'); 
                }
            },
            tooglePages1(){
                if(this.buttonClassPages1 == 'buttonEmpty'){
                    this.buttonClassPages1 = 'buttonPressed';
                    this.$store.dispatch('selecionaPages1');
                    this.buttonClassPages2 = 'buttonEmpty';
                    this.buttonClassPages3 = 'buttonEmpty';
                }         
            },
            tooglePages2(){
                if(this.buttonClassPages2 == 'buttonEmpty'){
                  this.buttonClassPages2 = 'buttonPressed';
                    this.$store.dispatch('selecionaPages2');
                    this.buttonClassPages1 = 'buttonEmpty';
                    this.buttonClassPages3 = 'buttonEmpty';
                }
            },
            tooglePages3(){
                 if(this.buttonClassPages3 == 'buttonEmpty'){
                    this.buttonClassPages3 = 'buttonPressed';
                    this.$store.dispatch('selecionaPages3');
                    this.buttonClassPages1 = 'buttonEmpty';
                    this.buttonClassPages2 = 'buttonEmpty';
                 }
            },
        },
    }
</script>

