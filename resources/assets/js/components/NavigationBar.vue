<template>
 <ol class="progress progress--medium">
  <li v-bind:class="button1" data-step="1">
    Inicio
  </li>
  <li  v-bind:class="button2" data-step="2">
   Fase 1
  </li>
   <li  v-bind:class="button3" data-step="3">
    Fase 2
  </li>
   <li  v-bind:class="button4" data-step="4">
   Fase 3
  </li>
  <li   v-bind:class="button5" data-step="5">
   Fim
  </li>
</ol>
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