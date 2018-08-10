<template>
    <div class="container">
        <h4 style = "padding-bottom: 80px;text-align: left;">Se quiser orçamentar a sua aplicação á medida por favor indique todas as funcionalidades
            o mais detalhado possivel, serão analisadas pela nossa equipa e será feito um orçamento
            que vá de encontro as suas necessidades!
        </h4>
    <form>
      <div class="form-group" style="text-align: left;">
        <label for="empresa">Funcionalidades</label>
        <textarea rows="4" cols="50" class="form-control" id="inputEspecificacoes"  placeholder="Escreva aqui todas as Funcionalidades pretendidas" v-model ="dataToOrcamento.funcionalidades"> </textarea>
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
                    funcionalidades:'',
                    business:'',
                    empresa:'',
                    nome:'',
                    email:'',
                }
            }
        },
        mounted() {
          
        },
        methods: {

            sendMail(){
                axios.post('orcamento/app',this.dataToOrcamento)
                .then(response=>{
                     Swal({
                        title: 'Parabens',
                        text: 'O seu email foi enviado com sucesso',
                        imageUrl: 'images/mail.png',
                        imageWidth: 400,
                        imageHeight: 200,
                        imageAlt: 'email sent',
                        animation: false
                    });
                    this.$store.dispatch('restartApp')
                })
            }

        }
    }
</script>