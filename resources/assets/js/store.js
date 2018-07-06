export default {
    state: {
        siteEstatico:{
            preco: 500,
            selecionado: false,
        },
        siteDinamico:{
            preco: 950,
            selecionado: false,
        },
        precoFinal: 0,
    },
    getters: {
        precoEstatico(state){
            return state.siteEstatico.preco;
        },
        precoDinamico(state){
            return state.siteDinamico.preco;
        }
    },
    mutations: {
        selecionaEstatico(state) {
            state.siteEstatico.selecionado = true;
            state.precoFinal= state.precoFinal + state.siteEstatico.preco;
        },
        selecionaDinamico(state) {
            state.siteDinamico.selecionado = true;
            state.precoFinal= state.precoFinal + state.siteDinamico.preco;
        },
 
    },
    actions: {
        selecionaEstatico(context){
            context.commit('selecionaEstatico');
        },
        selecionaDinamico(context){
            context.commit('selecionaDinamico');
        }
 
    }
};