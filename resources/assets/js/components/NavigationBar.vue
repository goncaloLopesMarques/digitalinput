<template>
 <div class="md-stepper-horizontal orange">
    <div v-bind:class="button1">
      <div class="md-step-circle"><span>1</span></div>
      <div class="md-step-title">Tipo de Site</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
    <div v-bind:class="button2">
      <div class="md-step-circle"><span>2</span></div>
      <div class="md-step-title">Opções 1</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
    <div v-bind:class="button3">
      <div class="md-step-circle"><span>3</span></div>
      <div class="md-step-title">Opções 2</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
    <div v-bind:class="button4">
      <div class="md-step-circle"><span>4</span></div>
      <div class="md-step-title">Palavras chave</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
    <div v-bind:class="button5">
      <div class="md-step-circle"><span>5</span></div>
      <div class="md-step-title">Redes Sociais</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
  </div>
</template>

<script>
name: 'Orcamento'
    export default {
        computed: {
          button1() { 
            return this.$store.getters.button1
          },
          button2() { 
            return this.$store.getters.button2
          },
          button3() { 
            return this.$store.getters.button3
          },
          button4() { 
            return this.$store.getters.button4
          },
          button5() { 
            return this.$store.getters.button5
          },
        },
        methods: {
            
               
        },
    }
</script>