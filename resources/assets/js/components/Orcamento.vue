<template>

    <div class="container">
    <div v-if="show" class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Site Simples</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <button @click="toogleEstatico" class="btn btn-primary">Faça o seu orçamento</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Site Dinamico</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <button @click="toogleDinamico" class="btn btn-primary">Faça o seu orçamento</button>
      </div>
    </div>
  </div>
</div>
<template v-if="estatico">
     <site-estatico/>
</template>
<template v-if="dinamico">
     <site-dinamico/>
</template>
   
</div>
</template>

<script>
name: 'Orcamento'
    export default {
        data: function(){
            return{
                show: true,
                estatico: false,
                dinamico: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            toogleEstatico(){
                if(this.show){
                    this.show = false
                    this.estatico = true
                    this.$store.dispatch('selecionaEstatico');
                }else{
                    this.show = true
                }
                
            },
            toogleDinamico(){
                if(this.show){
                    this.show = false
                    this.dinamico = true
                    this.$store.dispatch('selecionaDinamico');
                }else{
                    this.show = true
                }
                
            }

        }
    }
</script>
