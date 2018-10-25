<template>
    <div class="container">
        <div style="text-align: left;">
            <h2> Voce escolheu os seguintes items: </h2>
                    <ul id="example-2">
         <li v-for="item2 in dataToOrcamento.itemsMarketing">
           {{ item2 }}
         </li>
        </ul>
        <ul id="example-1">
         <li v-for="item in dataToOrcamento.items">
           {{ item }}
         </li>
        </ul>
        <h3> Se confirma a sua escolha e quer receber o seu orçamento preencha o formulario</h3>
        </div>
    <form>
      <div class="form-group" style="text-align: left;">
        <label for="empresa">Descreva aqui tudo o que ache pertinente</label>
        <textarea rows="4" cols="50" class="form-control" id="inputEspecificacoes"  placeholder="Mais info..." v-model ="dataToOrcamento.especificacoes"> </textarea>
        <label for="empresa">Area de Negócio</label>
        <input type="text" class="form-control" id="inputNegocio"  placeholder="Qual o tipo do seu negocio" v-model ="dataToOrcamento.business">
        <label for="empresa">Empresa</label>
        <input type="text" class="form-control" id="inputEmpresa"  placeholder="A sua empresa" v-model ="dataToOrcamento.empresa">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="inputNome" placeholder="O seu nome" v-model ="dataToOrcamento.nome">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="O seu email" v-model ="dataToOrcamento.email" required>
      </div>
      <button @click.prevent="checkForm" class="fill" id="buttonSubmit">Enviar</button>
    </form>
     <button @click="restart" type="button" class="fill">Repetir Orçamento</button>
</div>
</template>
<script>
import axios from 'axios';
const Swal = require('sweetalert2');
name: 'Terminate'
    export default {
        data: function(){
            return{
                
                dataToOrcamento:{
                    empresa:'',
                    especificacoes:'',
                    business:'',
                    nome:'',
                    email:'',
                    errors: [],
                    items: this.$store.getters.produtosSelecionados,
                    preco: this.$store.getters.precoFinal,
                    itemsMarketing: this.$store.getters.produtosSelecionadosMarketing,
                }
            }
        },
        mounted() {
          
        },
        methods: {     
            restart(){
               this.$store.dispatch('restartApp');
               axios.get('orcamento');
            },

            spinIt(target){

              $('#'+target).html("<i class='fa fa-spinner fa-spin'></i>");

            },

            checkForm(){

                if (this.dataToOrcamento.email && this.dataToOrcamento.nome){
                  this.spinIt("buttonSubmit");
                  this.sendMail();
                }else{
                  if (!this.dataToOrcamento.nome){
                    alert("Por favor preencha o seu nome");
                  }
                  if(!this.dataToOrcamento.email){
                    alert("Por favor preencha o seu email");  
                  }
                  
                }

            },

            sendMail(){
                axios.post('orcamento/site',this.dataToOrcamento)
                .then(response=>{
                    // quando chega aqui o email JÁ foi enviado
                    this.$store.dispatch('restartApp')
                    Swal({
                        title: 'Parabens',
                        text: 'O seu email foi enviado com sucesso',
                        imageUrl: 'images/mail.png',
                        imageWidth: 400,
                        imageHeight: 200,
                        imageAlt: 'email sent',
                        animation: false
                    });
                })
                .catch(function (error) {
                  // handle error
                 console.log(error);
                })

                axios.post('orcamento/info',this.dataToOrcamento)
                .then(response=>{
                    console.log(response)
                })
                 .catch(function (error) {
                  // handle error
                 console.log(error);
                })
            }
            }
            
        }
</script>

