<template>
<div class="container">
   <navigationBar/>
    <div v-if="this.$store.getters.fase1Show" class="row" style="padding-bottom: 50px!important;">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Site Simples</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <button @click="toogleEstatico" class="btn btn-primary">Faça o seu orçamento</button>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Site Dinamico</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <button @click="toogleDinamico" class="btn btn-primary">Faça o seu orçamento</button>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aplicação Web</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <button @click="toogleApp" class="btn btn-primary">Peça o seu orçamento</button>
      </div>
    </div>
  </div>
</div>
<template v-if="this.$store.getters.siteDinamicoFase1Show">
     <site-dinamico/>
</template>
<template v-if="this.$store.getters.siteDinamicoFase2Show">
     <site-dinamico-fase2/>
</template>
<template v-if="this.$store.getters.siteDinamicoFase3Show">
     <site-dinamico-fase3/>
</template>
<template v-if="this.$store.getters.siteDinamicoFase4Show">
     <site-dinamico-fase4/>
</template>
<template v-if="appShow">
     <orcamento-app/>
</template>
<template v-if=" this.$store.getters.fase5">
<terminate/>
</template>
  <div v-if="this.fase >=2" style="margin-bottom: 50px;">
    <button @click="voltar" type="button" class="btn btn-outline-dark">{{ buttonBack }}</button>
  </div>
  <div v-if="this.fase >=2 && this.fase < 5 && !appShow" style="margin-bottom: 50px;">
    <button @click="seguinte" type="button" class="btn btn-outline-dark">Seguinte</button>
  </div>



</div>
</template>

<script>
name: 'Orcamento'
    export default {
        data: function(){
            return{ 

                appShow: false,
            }
        },
        computed: {
          fase() { 
            return this.$store.getters.fase
          },
          buttonBack() { 
            return this.$store.getters.buttonBack
          },

         
        },
        methods: {
            seguinte(){
                if(this.fase ==2){
                  this.$store.dispatch('selectFase2');
                }else if(this.fase == 3){

                  this.$store.dispatch('selectFase3');
                }else if(this.fase == 4){
                  this.$store.dispatch('selectFase4');
                }
            },
            voltar(){
                if(this.fase==2){
                   if(this.appShow){
                    this.appShow = false;
                  }
                  this.$store.dispatch('restartApp');
                }else if(this.fase ==3){
                  this.$store.dispatch('deselectFase2');
                }else if(this.fase == 4){
                  this.$store.dispatch('deselectFase3');
                }else if(this.fase == 5){
                  this.$store.dispatch('deselectFase4');
                }else if(this.fase == 6){
                  this.$store.dispatch('deselectFase5');
                }
                
            },

            toogleEstatico(){
              if(this.$store.getters.fase1Show){
              this.$store.dispatch('selecionaEstatico'); 
              }      
            },
            toogleDinamico(){
                if(this.$store.getters.fase1Show){
                this.$store.dispatch('selecionaDinamico');
                }
            },
            toogleApp(){
              this.appShow = true;
              this.$store.dispatch('selecionaApp');
            },
        }
    }
</script>
