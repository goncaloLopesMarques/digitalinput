<template>
   <div>
      <div class="bgimg w3-display-container w3-opacity-min" id="home">
         <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="center">Orçamento Digital</span>
         </div>
      </div>
      <section class="introducao">
         <div class="col-md-12">
            <h2> Faça já o seu</h2>
            <div class="col-md-6">
               Este simulador permite-lhe fazer um orçamento grátis.
               Para fazer o seu orçamento basta escolher o tipo de site que pretende e seguir as instruções detalhadas que lhe serão fornecidas durante a simulação
               Qualquer orçamento não é defenitivo podendo ser alterado consoante as suas necessidades.
            </div>
         </div>
      </section>
  
         <div class="container">
           <section class="shop">
            <div class="row">
               <navigationBar/>
            </div>
            <div v-if="this.$store.getters.fase1Show" class="row" style="padding-bottom: 50px!important;">
              <div class="col-md-4">
             <div class="cardBox">
               <div class="card">
                 <div class="front">
                   <img class="imgCard2" src="images/singlePage.png">
                 <h3>Site Simples</h3>
              </div>
          <div class="back">
          <a @click="toogleEstatico">Faça o seu orçamento</a>
         </div>
         </div>
      </div>
      </div>
<div class="col-md-4">
  <div class="cardBox">
    <div class="card">
      <div class="front">
         <img class="imgCard2" src="images/multiPage.png">
          <h3>Site Dinâmico</h3>
      </div>
      <div class="back">
        <a @click="toogleDinamico">Faça o seu orçamento</a>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="cardBox">
    <div class="card">
      <div class="front">
        <img class="imgCard2" src="images/app.png">
        <h3>Aplicação</h3>
      </div>
      <div class="back">
        <a @click="toogleApp">Peça o seu orçamento</a>
      </div>
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
   </section>
    <section class="buttons">

      <div v-if=" this.fase < 5" class="row">
      <div class="col-md-3"></div>
      <div class="col-md-3" v-if="this.fase >=2" style="margin-bottom: 50px;">
      <button @click="voltar" type="button" class="fill">{{ buttonBack }}</button>
      </div>
      <div class="col-md-3" v-if="this.fase >=2 && this.fase < 5 && !appShow" style="margin-bottom: 50px;">
      <button @click="seguinte" type="button" class="fill">Seguinte</button>
      </div>
      <div class="col-md-3"></div>
      </div>
      <div v-if=" this.fase >= 5" class="row">
     <div class="col-md-5"></div>
      <div class="col-md-2" v-if="this.fase >=2" style="margin-bottom: 50px;">
      <button @click="voltar" type="button" class="fill">{{ buttonBack }}</button>
      </div>

      <div class="col-md-5"></div>
      </div>

      </section>
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