<template>
    <div class="container">
        <div style="text-align: left;">
            <h2> Voce escolheu os seguintes items: </h2>
        <ul id="example-1">
         <li v-for="item in dataToOrcamento.items">
           {{ item }}
         </li>
        </ul>
        <h3> Se confirma a sua escolha e quer receber o seu orçamento preencha o formulario</h3>
        </div>
    <form>
      <div class="form-group" style="text-align: left;">
        <label for="empresa">Area de Negócio</label>
        <input type="text" class="form-control" id="inputNegocio"  placeholder="Qual o tipo do seu negocio" v-model ="dataToOrcamento.business">
        <label for="empresa">Empresa</label>
        <input type="text" class="form-control" id="inputEmpresa"  placeholder="A sua empresa" v-model ="dataToOrcamento.empresa">
        <label for="nome">Nome</label>
        <input type="email" class="form-control" id="inputNome" placeholder="O seu nome" v-model ="dataToOrcamento.nome">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="O seu email" v-model ="dataToOrcamento.email">
      </div>
      <button @click.prevent="sendMail" class="fill">Enviar</button>
    </form>
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
                    business:'',
                    nome:'',
                    email:'',
                    items: this.$store.getters.produtosSelecionados,
                    preco: this.$store.getters.precoFinal,
                }
            }
        },
        mounted() {
          
        },
        methods: {      
                

              sendMail(){
                axios.post('orcamento/site',this.dataToOrcamento)
                .then(response=>{
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

