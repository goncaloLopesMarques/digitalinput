export default {
    state: {
        fase1:{
            siteEstatico:{
                descricao: 'Site Estatico',
                preco: 500,
                selecionado: false,
            },
            siteDinamico:{
                descricao: 'Site Dinamico',
                preco: 950,
                selecionado: false,
            },
            marketingDigital:{
                descricao: 'Apoio ao Marketing Digital',
                preco: 0,
                selecionado: false,
            },
            show: true,
        },
        MarketingDigital:{
            Fase1:{
                Gestao:{
                    descricao: 'Gestão de redes sociais',
                    preco: 0,
                    selecionado: false,
                },
                show: false,
            },
            Fase2:{
                Publicidade:{
                    descricao: 'Gestão de publicidade on-line',
                    preco: 0,
                    selecionado: false,
                },
                GoogleBusiness:{
                    descricao: 'Gestão de Google my Business',
                    preco: 0,
                    selecionado: false,
                },
                GoogleAds:{
                    descricao: 'Configuração de Google Ads',
                    preco: 0,
                    selecionado: false,  
                },
                FacebookAds:{
                    descricao: 'Configuração de Facebook Ads',
                    preco: 0,
                    selecionado: false,  
                },
                show: false,
            },
         produtosSelecionados: [],
        },
        SiteDinamico:{
            Fase1:{
                Alojamento:{
                  descricao: 'O Alojamento inclui o primeiro ano, os seguintes tem de ser efectuada uma renovação',
                  preco: 44,
                  selecionado: false,
                },
                lojaOnline:{
                    descricao: 'Loja online',
                    selecionado: false,
                  },
                Dominio:{
                  descricao: 'O Dominio inclui o primeiro ano, os seguintes tem de ser efectuada uma renovação',
                  preco: 14,
                  selecionado: false,
                },
                Pages1:{
                  descricao: 'De 2 a 4 páginas',
                  preco: 0,
                  selecionado: true,
                },
                Pages2:{
                  descricao: 'De 5 a 8 páginas',
                  preco: 150,
                  selecionado: false,
                },
                Pages3:{
                  descricao: 'Com mais de 8 paginas',
                  preco: 250,
                  selecionado: false,
                },
                //este vetor serve para fazer a validação se o utilizador selecionou 1 unica ocção de paginas
            selection: [1,0,0],    
            show: false,
            },
            Fase2:{
                 Blog:{
                    descricao: "Criação de um blog para poder inserir os seus posts",
                    preco: 85,
                    selecionado: false,
                 },
                 RedesSociais:{
                     descricao: "Configuração e inserção das redes Sociais",
                     preco: 50,
                     selecionado: false,
                 },
                 produtos1:{
                    descricao:'de 0-50 productos',
                    preco: 450,
                    selecionado: true,
                 },
                 produtos2:{
                    descricao:'de 50-100 produtos',
                    preco: 900,
                    selecionado:false,
                 },
                 produtos3:{
                    descricao:'>100 produtos, esta quantidade de produtos terá de ser orçamentada á parte',
                    preco: 0 ,
                    selecionado: false,
                 },
                show: false,
                //este vetor serve para fazer a validação se o utilizador selecionou 1 unica ocção de produtos
            selection: [0,0,0],
            },
            Fase3:{
                Seo:{
                    descricao: "Instalação e configuração  da optimização para motores de busca",
                    preco:50,
                    selecionado: false,
                },
                KeyWords:{
                    descricao:"Analise e defenição das KeyWords para o seu website",
                    preco:50,
                    selecionado: false,
                },
                show: false,
            },
            Fase4:{
                MarketingDigital:{
                   FaceBook:{
                    descricao:"Apoio ao Marketing Digital na rede Social Facebook, duração minima de 6 meses",
                    preco:300,
                    selecionado: false,
                   },
                   Instagram:{
                    descricao:"Apoio ao Marketing Digital na rede Social Instagram, duração minima de 6 meses",
                    preco:300,
                    selecionado: false,
                   },
                   Twitter:{
                    descricao:"Apoio ao Marketing Digital na rede Social Twitter, duração minima de 6 meses",
                    preco:300,
                    selecionado: false,
                   },
                   LinkedIn:{
                    descricao:"Apoio ao Marketing Digital na rede Social LinkedIn, duração minima de 6 meses",
                    preco:300,
                    selecionado: false,
                   },
                   Pinterest:{
                    descricao:"Apoio ao Marketing Digital na rede Social Pinterest, duração minima de 6 meses",
                    preco:300,
                    selecionado: false,
                   },
                   AdWords:{
                    descricao:"Configuração e Gestão do seu AdWords, duração minima de 6 meses, o primeiro mes 250 euros e 100 os restantes",
                    preco:750,
                    selecionado: false,
                   },
                 selecionado: false,
                },
                selection: [0,0,0,0,0,0],
                show: false,
            },
            Fase5:{
                show: false,
            },
            produtosSelecionados: [],
        },
        NavigationBar:{
            button1:{
                cssClass:'md-step active'
            },
            button2:{
                cssClass:'md-step'
            },
            button3:{
                cssClass:'md-step'
            },
            button4:{
                cssClass:'md-step'
            },
            button5:{
                cssClass:'md-step'
            },
        },
        //variaveis de controlo e navegação da aplicação
        fase: 1,
        precoFinal: 0,
        isEstatico: false,
        isLoja: false,
        buttonBack: 'Inicio',
        redesSociais:false,
    },
    getters: {
        redesSociais(state){    
            return state.redesSociais;
        },
        //getters do marketing digital
        gestao(state){
            return state.MarketingDigital.Fase1.Gestao.selecionado;
        },
        publicidade(state){
            return state.MarketingDigital.Fase2.Publicidade.selecionado;
        },
        googleMyBusiness(state){
            return state.MarketingDigital.Fase2.GoogleBusiness.selecionado;
        },
        googleAds(state){
            return state.MarketingDigital.Fase2.GoogleAds.selecionado;
        },
        FacebookAds(state){
            return state.MarketingDigital.Fase2.FacebookAds.selecionado;
        },
        MarketingDigitalFase1(state){
            return state.MarketingDigital.Fase1.show;
        },
        MarketingDigitalFase2(state){
            return state.MarketingDigital.Fase2.show;
        },
        //variaveis de controlo e navegação da aplicação
        buttonBack(state){
            return state.buttonBack;
        },
        button1(state){
            return state.NavigationBar.button1.cssClass;
        },
        button2(state){
            return state.NavigationBar.button2.cssClass;
        },
        button3(state){
            return state.NavigationBar.button3.cssClass;
        },
        button4(state){
            return state.NavigationBar.button4.cssClass;
        },
        button5(state){
            return state.NavigationBar.button5.cssClass;
        },
        //--- fim dos getters de navegaçao
        fase4Selection(state){
            return state.SiteDinamico.Fase4.selection;
        },
        fase5(state){
            return state.SiteDinamico.Fase5.show;
        },
        fase(state){
            return state.fase;
        },
        isEstatico(state){
            return state.isEstatico;
        },
        isLoja(state){
            return state.isLoja;
        },
        produtosSelecionados(state){
            return state.SiteDinamico.produtosSelecionados;
        },
        pages1Selecionado(state){
            return state.SiteDinamico.Fase1.Pages1.selecionado;
        },
        pages2Selecionado(state){
            return state.SiteDinamico.Fase1.Pages2.selecionado;
        },
        pages3Selecionado(state){
            return state.SiteDinamico.Fase1.Pages3.selecionado;
        },
        precoFinal(state){
            return state.precoFinal;
        },
        precoDinamico(state){
            return state.fase1.siteDinamico.preco;
        },
        fase1Show(state){
            return state.fase1.show;
        },
        siteDinamicoFase1Show(state){
            return state.SiteDinamico.Fase1.show;
        },
        siteDinamicoFase2Show(state){
            return state.SiteDinamico.Fase2.show;
        },
        siteDinamicoFase3Show(state){
            return state.SiteDinamico.Fase3.show;
        },
        siteDinamicoFase4Show(state){
            return state.SiteDinamico.Fase4.show;
        },
        dominioSelecionado(state){
            return state.SiteDinamico.Fase1.Dominio.selecionado;
        },
        lojaSelecionada(state){
            return state.SiteDinamico.Fase1.lojaOnline.selecionado;
        },
        alojamentoSelecionado(state){
            return state.SiteDinamico.Fase1.Alojamento.selecionado;
        },
        redesSelecionado(state){
            return state.SiteDinamico.Fase2.RedesSociais.selecionado;
        },
        blogSelecionado(state){
            return state.SiteDinamico.Fase2.Blog.selecionado;
        },
        seoSelecionado(state){
            return state.SiteDinamico.Fase3.Seo.selecionado;
        },
        keyWordsSelecionado(state){
            return state.SiteDinamico.Fase3.KeyWords.selecionado;
        },
        facebookSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.FaceBook.selecionado;
        },
        twitterSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.Twitter.selecionado;
        },
        instagramSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.Instagram.selecionado;
        },
        linkedinSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.selecionado;
        },
        pinterestSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.Pinterest.selecionado;
        },
        adwordsSelecionado(state){
            return state.SiteDinamico.Fase4.MarketingDigital.AdWords.selecionado;
        },
        produtos1(state){
            return state.SiteDinamico.Fase2.produtos1.selecionado;
        },
        produtos2(state){
            return state.SiteDinamico.Fase2.produtos2.selecionado;
        },
        produtos3(state){
            return state.SiteDinamico.Fase2.produtos3.selecionado;
        },

    },
    mutations: {
        selecionaEstatico(state) {
            state.fase ++;
            state.NavigationBar.button1.cssClass = 'md-step active done';
            state.NavigationBar.button2.cssClass = 'md-step active';
            state.SiteDinamico.produtosSelecionados.push(state.fase1.siteEstatico.descricao);
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Pages1.descricao);
            state.isEstatico = true;
            state.fase1.siteEstatico.selecionado = true;
            state.SiteDinamico.Fase1.show = true;
            state.fase1.show = false;
            state.precoFinal= state.precoFinal + state.fase1.siteEstatico.preco;
        },
        selecionaDinamico(state) {
            state.fase ++;
            state.NavigationBar.button1.cssClass = 'md-step active done';
            state.NavigationBar.button2.cssClass = 'md-step active';
            state.SiteDinamico.produtosSelecionados.push(state.fase1.siteDinamico.descricao);
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Pages1.descricao);
            state.SiteDinamico.Fase1.show = true;
            state.fase1.show = false;
      
            state.precoFinal= state.precoFinal + state.fase1.siteDinamico.preco;
        },
        selecionaApp(state) {
            state.fase ++;
            state.NavigationBar.button1.cssClass = 'md-step active done';
            state.NavigationBar.button2.cssClass = 'md-step active done';
            state.NavigationBar.button3.cssClass = 'md-step active done';
            state.NavigationBar.button4.cssClass = 'md-step active done';
            state.NavigationBar.button5.cssClass = 'md-step active done';
            state.fase1.show = false;
        },
        selecionaMarketingDigital(state) {
            state.fase ++;
            //ver a barra de navegação!!!!
            state.NavigationBar.button1.cssClass = 'md-step active done';
            state.NavigationBar.button2.cssClass = 'md-step active';
            state.MarketingDigital.produtosSelecionados.push(state.fase1.marketingDigital.descricao);
            state.MarketingDigital.Fase1.show = true;
            state.fase1.show = false;
      
            state.precoFinal= state.precoFinal + state.fase1.marketingDigital.preco;
        },
        selecionaPublicidade(state){
            state.MarketingDigital.produtosSelecionados.push(state.MarketingDigital.Fase2.Publicidade.descricao);
            state.MarketingDigital.Fase2.Publicidade.selecionado = true;
            state.precoFinal= state.precoFinal + state.MarketingDigital.Fase2.Publicidade.preco;
        },
        selecionaGestao(state){
            state.MarketingDigital.produtosSelecionados.push(state.MarketingDigital.Fase1.Gestao.descricao);
            state.MarketingDigital.Fase1.Gestao.selecionado = true;
            state.precoFinal= state.precoFinal + state.MarketingDigital.Fase1.Gestao.preco;
        },
        selecionaGoogleBusiness(state){
            state.MarketingDigital.produtosSelecionados.push(state.MarketingDigital.Fase2.GoogleBusiness.descricao);
            state.MarketingDigital.Fase2.GoogleBusiness.selecionado = true;
            state.precoFinal= state.precoFinal + state.MarketingDigital.Fase2.GoogleBusiness.preco;
        },
        selecionaDominio(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Dominio.descricao);
            state.SiteDinamico.Fase1.Dominio.selecionado = true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase1.Dominio.preco;
        },
        selecionaLoja(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.lojaOnline.descricao);
            state.SiteDinamico.Fase1.lojaOnline.selecionado = true;
        },
        selecionaAlojamento(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Alojamento.descricao);
            state.SiteDinamico.Fase1.Alojamento.selecionado = true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase1.Alojamento.preco;
        },
        selecionaRedes(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase2.RedesSociais.descricao);
            state.SiteDinamico.Fase2.RedesSociais.selecionado = true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase2.RedesSociais.preco;
        },
        selecionaBlog(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase2.Blog.descricao);
            state.SiteDinamico.Fase2.Blog.selecionado = true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase2.Blog.preco;
        },
        selecionaSeo(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase3.Seo.descricao);
            state.SiteDinamico.Fase3.Seo.selecionado = true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase3.Seo.preco;
        },
        selecionaKeyWords(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase3.KeyWords.descricao);
            state.SiteDinamico.Fase3.KeyWords.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase3.KeyWords.preco;
        },
        selecionaFacebook(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.FaceBook.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.FaceBook.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.FaceBook.preco;
            state.SiteDinamico.Fase4.selection[0] = 1;
        },
        selecionaInstagram(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.Instagram.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.Instagram.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.Instagram.preco;
            state.SiteDinamico.Fase4.selection[1] = 1;
        },
        selecionaTwitter(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.Twitter.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.Twitter.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.Twitter.preco;
            state.SiteDinamico.Fase4.selection[2] = 1;
        },
        selecionaLinkedin(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.preco;
            state.SiteDinamico.Fase4.selection[3] = 1;
        },
        selecionaPinterest(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.Pinterest.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.Pinterest.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.Pinterest.preco;
            state.SiteDinamico.Fase4.selection[4] = 1;
        },
        selecionaAdwords(state) {
            state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase4.MarketingDigital.AdWords.descricao);
            state.SiteDinamico.Fase4.MarketingDigital.AdWords.selecionado =  true;
            state.precoFinal= state.precoFinal + state.SiteDinamico.Fase4.MarketingDigital.AdWords.preco;
            state.SiteDinamico.Fase4.selection[5] = 1;
        },
        desselecionaDominio(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Dominio.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase1.Dominio.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Dominio.preco;
        },
        desselecionaLoja(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.lojaOnline.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase1.lojaOnline.selecionado = false;
        },
        desselecionaPublicidade(state){
            for(var i = state.MarketingDigital.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.MarketingDigital.produtosSelecionados[i] == state.MarketingDigital.Fase2.Publicidade.descricao) {
                    state.MarketingDigital.produtosSelecionados.splice(i, 1);
                }
            }
            state.MarketingDigital.Fase2.Publicidade.selecionado = false;
            state.precoFinal = state.precoFinal - state.MarketingDigital.Fase2.Publicidade.preco;
        },
        desselecionaGestao(state){
            for(var i = state.MarketingDigital.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.MarketingDigital.produtosSelecionados[i] == state.MarketingDigital.Fase1.Gestao.descricao) {
                    state.MarketingDigital.produtosSelecionados.splice(i, 1);
                }
            }
            state.MarketingDigital.Fase1.Gestao.selecionado = false;
            state.precoFinal = state.precoFinal - state.MarketingDigital.Fase1.Gestao.preco;
        },
        desselecionaGoogleBusiness(state){
            for(var i = state.MarketingDigital.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.MarketingDigital.produtosSelecionados[i] == state.MarketingDigital.Fase2.GoogleBusiness.descricao) {
                    state.MarketingDigital.produtosSelecionados.splice(i, 1);
                }
            }
            state.MarketingDigital.Fase2.GoogleBusiness.selecionado = false;
            state.precoFinal = state.precoFinal - state.MarketingDigital.Fase2.GoogleBusiness.preco;
        },
        desselecionaAlojamento(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Alojamento.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase1.Alojamento.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Alojamento.preco;
        },
        desselecionaRedes(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.RedesSociais.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase2.RedesSociais.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.RedesSociais.preco;
        },
        desselecionaBlog(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.Blog.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase2.Blog.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.Blog.preco;
        },
        desselecionaSeo(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase3.Seo.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase3.Seo.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase3.Seo.preco;
        },
        desselecionaKeyWords(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase3.KeyWords.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                }
            }
            state.SiteDinamico.Fase3.KeyWords.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase3.KeyWords.preco;
        },
        desselecionaFacebook(state){
        for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
            if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.FaceBook.descricao) {
                state.SiteDinamico.produtosSelecionados.splice(i, 1);
              }
            }
            state.SiteDinamico.Fase4.MarketingDigital.FaceBook.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.FaceBook.preco;
            state.SiteDinamico.Fase4.selection[0] = 0;
        },
        desselecionaInstagram(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.Instagram.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                  }
                }
            state.SiteDinamico.Fase4.MarketingDigital.Instagram.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.Instagram.preco;
            state.SiteDinamico.Fase4.selection[1] = 0;
        },
        desselecionaTwitter(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.Twitter.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                  }
                }
                state.SiteDinamico.Fase4.selection[2] = 0;
            state.SiteDinamico.Fase4.MarketingDigital.Twitter.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.Twitter.preco;
        },
        desselecionaLinkedin(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                  }
                }
                state.SiteDinamico.Fase4.selection[3] = 0;
            state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.preco;
        },
        desselecionaPinterest(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.Pinterest.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                  }
                }
                state.SiteDinamico.Fase4.selection[4] = 0;
            state.SiteDinamico.Fase4.MarketingDigital.Pinterest.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.Pinterest.preco;
        },
        desselecionaAdwords(state){
            for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase4.MarketingDigital.AdWords.descricao) {
                    state.SiteDinamico.produtosSelecionados.splice(i, 1);
                  }
                }
            state.SiteDinamico.Fase4.MarketingDigital.AdWords.selecionado = false;
            state.precoFinal = state.precoFinal - state.SiteDinamico.Fase4.MarketingDigital.AdWords.preco;
            state.SiteDinamico.Fase4.selection[5] = 0;
        },

        restartApp(state){
            state.fase --;
            state.precoFinal = 0;
            state.SiteDinamico.Fase1.show = false;
            state.MarketingDigital.Fase1.show = false;
            state.fase1.show = true;
            state.SiteDinamico.produtosSelecionados = [];
            state.MarketingDigital.produtosSelecionados=[];
            state.isEstatico = false;
            state.NavigationBar.button1.cssClass = 'md-step active';
            state.NavigationBar.button2.cssClass = 'md-step';
            state.NavigationBar.button3.cssClass = 'md-step';
            state.NavigationBar.button4.cssClass = 'md-step';
            state.NavigationBar.button5.cssClass = 'md-step';
            //limpa tudo o que foi selecionado Na fase 1
            state.SiteDinamico.Fase1.Alojamento.selecionado= false;
            state.SiteDinamico.Fase1.lojaOnline.selecionado= false;
            state.SiteDinamico.Fase1.Dominio.selecionado= false;
            state.SiteDinamico.Fase1.Pages1.selecionado= true;
            state.SiteDinamico.Fase1.Pages2.selecionado= false;
            state.SiteDinamico.Fase1.Pages3.selecionado= false;
            //limpa tudo o que foi selecionado Na fase 2
            state.SiteDinamico.Fase2.Blog.selecionado= false;
            state.SiteDinamico.Fase2.RedesSociais.selecionado= false;
            state.SiteDinamico.Fase2.produtos1.selecionado= true;
            state.SiteDinamico.Fase2.produtos2.selecionado= false;
            state.SiteDinamico.Fase2.produtos3.selecionado= false;
            //limpa tudo o que foi selecionado Na fase 3
            state.SiteDinamico.Fase3.Seo.selecionado = false;
            state.SiteDinamico.Fase3.KeyWords.selecionado= false;
            //limpa tudo o que foi selecionado Na fase 4
            state.SiteDinamico.Fase4.MarketingDigital.FaceBook.selecionado = false;
            state.SiteDinamico.Fase4.MarketingDigital.Instagram.selecionado = false;
            state.SiteDinamico.Fase4.MarketingDigital.Twitter.selecionado = false;
            state.SiteDinamico.Fase4.MarketingDigital.Pinterest.selecionado = false;
            state.SiteDinamico.Fase4.MarketingDigital.LinkedIn.selecionado = false;
            state.SiteDinamico.Fase4.MarketingDigital.AdWords.selecionado = false;
            //limpa tudo o que foi selecionado Na fase 5
            state.SiteDinamico.Fase5.show = false;
            //limpa tudo o que for selecionado no apoio a marketing digital
            state.MarketingDigital.Fase2.Publicidade.selecionado = false;
            state.MarketingDigital.Fase1.Gestao.selecionado = false;
            state.MarketingDigital.Fase2.GoogleBusiness.selecionado = false;
        },
        selectFase2(state){
            state.fase ++;
            state.buttonBack = 'Voltar';
            state.SiteDinamico.Fase1.show = false;
            state.NavigationBar.button2.cssClass = 'is-complete';
            state.NavigationBar.button3.cssClass = 'is-active';
            state.SiteDinamico.Fase2.show = true;
        },
        selectMarketingFase2(state){
            state.fase ++;
            state.buttonBack = 'Voltar';
            state.MarketingDigital.Fase1.show = false;
            state.NavigationBar.button2.cssClass = 'md-step active done';
            state.NavigationBar.button3.cssClass = 'md-step active';
            state.MarketingDigital.Fase2.show = true;
        },
        selectFase3(state){
            state.fase ++;
            state.SiteDinamico.Fase2.show = false;
            state.NavigationBar.button3.cssClass = 'is-complete';
            state.NavigationBar.button4.cssClass = 'is-active';
            state.SiteDinamico.Fase3.show = true;
        },
        selectFase4(state){
            state.fase ++;
            state.SiteDinamico.Fase3.show = false;
            state.NavigationBar.button4.cssClass = 'is-complete';
            state.NavigationBar.button5.cssClass = 'is-active';
            state.SiteDinamico.Fase4.show = true;
        },
        selectFase5(state){
            state.fase ++;
            state.SiteDinamico.Fase4.show = false;
            state.NavigationBar.button5.cssClass = 'is-complete';
            state.SiteDinamico.Fase5.show = true;
        },
        deselectMarketingDigitalFase2(state){
            state.fase --;
            state.buttonBack = 'Inicio';
            state.MarketingDigital.Fase1.show = true;
            state.NavigationBar.button2.cssClass = 'md-step active';
            state.NavigationBar.button3.cssClass = 'md-step';
            state.MarketingDigital.Fase2.show = false;
        },
        deselectFase2(state){
            state.fase --;
            state.buttonBack = 'Inicio';
            state.SiteDinamico.Fase1.show = true;
            state.NavigationBar.button2.cssClass = 'is-active';
            state.NavigationBar.button3.cssClass = '';
            state.SiteDinamico.Fase2.show = false;
        },
        deselectFase3(state){
            state.fase --;
            state.SiteDinamico.Fase3.show = false;
            state.NavigationBar.button3.cssClass = 'is-active';
            state.NavigationBar.button4.cssClass = '';
            state.SiteDinamico.Fase2.show = true;
        },
        deselectFase4(state){
            state.fase --;
            state.SiteDinamico.Fase4.show = false;
            state.NavigationBar.button4.cssClass = 'is-active';
            state.NavigationBar.button5.cssClass = '';
            state.SiteDinamico.Fase3.show = true;
        },
        deselectFase5(state){
            state.fase --;
            state.SiteDinamico.Fase4.show = true;
            state.SiteDinamico.Fase5.show = false;
            state.NavigationBar.button5.cssClass = 'is-active';
        },
        selecionaSelectionPages1(state){
            if(state.SiteDinamico.Fase1.selection[0]==1){

            }else{
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Pages1.descricao);
                state.SiteDinamico.Fase1.selection[0] = 1;
                state.SiteDinamico.Fase1.Pages1.selecionado = true;
                state.precoFinal = state.precoFinal + state.SiteDinamico.Fase1.Pages1.preco;

                if(state.SiteDinamico.Fase1.selection[1]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages2.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[1] = 0
                    state.SiteDinamico.Fase1.Pages2.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages2.preco;
                }else if(state.SiteDinamico.Fase1.selection[2]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages3.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[2] = 0
                    state.SiteDinamico.Fase1.Pages3.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages3.preco;
                }
            }
             
        },
        selecionaSelectionPages2(state){
            if(state.SiteDinamico.Fase1.selection[1]==1){

            }else{
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Pages2.descricao);
                state.SiteDinamico.Fase1.selection[1] = 1;
                state.SiteDinamico.Fase1.Pages2.selecionado = true;
                state.precoFinal = state.precoFinal + state.SiteDinamico.Fase1.Pages2.preco;
                if(state.SiteDinamico.Fase1.selection[0]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages1.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[0] = 0
                    state.SiteDinamico.Fase1.Pages1.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages1.preco;
                }else if(state.SiteDinamico.Fase1.selection[2]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages3.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[2] = 0
                    state.SiteDinamico.Fase1.Pages3.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages3.preco;
                }
            }
        },
        selecionaSelectionPages3(state){
            if(state.SiteDinamico.Fase1.selection[2]==1){

            }else{
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase1.Pages3.descricao);
                state.SiteDinamico.Fase1.selection[2] = 1;
                state.SiteDinamico.Fase1.Pages3.selecionado = true;
                state.precoFinal = state.precoFinal + state.SiteDinamico.Fase1.Pages3.preco;

                if(state.SiteDinamico.Fase1.selection[1]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages2.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[1] = 0
                    state.SiteDinamico.Fase1.Pages2.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages2.preco;
                }else if(state.SiteDinamico.Fase1.selection[0]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase1.Pages1.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase1.selection[0] = 0
                    state.SiteDinamico.Fase1.Pages1.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase1.Pages1.preco;
                }
            }
        },
        selecionaProdutos1(state){
            if(state.SiteDinamico.Fase2.selection[0]==1){

            }else{
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase2.produtos1.descricao);
                state.SiteDinamico.Fase2.selection[0] = 1;
                state.SiteDinamico.Fase2.produtos1.selecionado = true;
                state.precoFinal = state.precoFinal + state.SiteDinamico.Fase2.produtos1.preco;

                if(state.SiteDinamico.Fase2.selection[1]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos2.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[1] = 0
                    state.SiteDinamico.Fase2.produtos2.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos2.preco;
                }else if(state.SiteDinamico.Fase2.selection[2]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos3.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[2] = 0
                    state.SiteDinamico.Fase2.produtos3.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos3.preco;
                }
            }
             
        },
        selecionaProdutos2(state){
            if(state.SiteDinamico.Fase2.selection[1]==1){
             
            }else{
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase2.produtos2.descricao);
                state.SiteDinamico.Fase2.selection[1] = 1;
                state.SiteDinamico.Fase2.produtos2.selecionado = true;
                state.precoFinal = state.precoFinal + state.SiteDinamico.Fase2.produtos2.preco;

                if(state.SiteDinamico.Fase2.selection[0]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos1.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[0] = 0
                    state.SiteDinamico.Fase2.produtos1.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos1.preco;
                }else if(state.SiteDinamico.Fase2.selection[2]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos3.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[2] = 0
                    state.SiteDinamico.Fase2.produtos3.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos3.preco;
                }
            }
             
        },
        selecionaProdutos3(state){
            if(state.SiteDinamico.Fase2.selection[2]==1){

            }else{
              
                state.SiteDinamico.produtosSelecionados.push(state.SiteDinamico.Fase2.produtos3.descricao);
                state.SiteDinamico.Fase2.selection[2] = 1;
                state.SiteDinamico.Fase2.produtos3.selecionado = true;

                if(state.SiteDinamico.Fase2.selection[1]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos2.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[1] = 0
                    state.SiteDinamico.Fase2.produtos2.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos2.preco;
                }else if(state.SiteDinamico.Fase2.selection[0]==1){
                    for(var i = state.SiteDinamico.produtosSelecionados.length - 1; i >= 0; i--) {
                        if(state.SiteDinamico.produtosSelecionados[i] == state.SiteDinamico.Fase2.produtos1.descricao) {
                            state.SiteDinamico.produtosSelecionados.splice(i, 1);
                          }
                        }
                    state.SiteDinamico.Fase2.selection[0] = 0
                   
                    state.SiteDinamico.Fase2.produtos1.selecionado = false;
                    state.precoFinal = state.precoFinal - state.SiteDinamico.Fase2.produtos1.preco;
                }
            }
             
        },
        incrementaFase(state){
            state.fase ++;
        },
        decrementaFase(state){
            state.fase --;
        },
        //Mutations da navigationBar
        button1Complete(state){
            state.NavigationBar.button1.cssClass = 'is-complete'
        },
        button2Complete(state){
            state.NavigationBar.button2.cssClass = 'is-complete'
        },
        button3Complete(state){
            state.NavigationBar.button3.cssClass = 'is-complete'
        },
        button4Complete(state){
            state.NavigationBar.button4.cssClass = 'is-complete'
        },
        button5Complete(state){
            state.NavigationBar.button5.cssClass = 'is-complete'
        },
        button1Activo(state){
            state.NavigationBar.button1.cssClass = 'is-active'
        },
        button2Activo(state){
            state.NavigationBar.button2.cssClass = 'is-active'
        },
        button3Activo(state){
            state.NavigationBar.button3.cssClass = 'is-active'
        },
        button4Activo(state){
            state.NavigationBar.button4.cssClass = 'is-active'
        },
        button5Activo(state){
            state.NavigationBar.button5.cssClass = 'is-active'
        },
        button1Empty(state){
            state.NavigationBar.button1.cssClass = ''
        },
        button2Empty(state){
            state.NavigationBar.button2.cssClass = ''
        },
        button3Empty(state){
            state.NavigationBar.button3.cssClass = ''
        },
        button4Empty(state){
            state.NavigationBar.button4.cssClass = ''
        },
        button5Empty(state){
            state.NavigationBar.button5.cssClass = ''
        },
        //---FIm das mutations da navigationBar
      
    },
    actions: {
        //actions da navigationBar
        button1Complete(context){
            context.commit('button1Complete');
        },
        button2Complete(context){
            context.commit('button2Complete');
        },
        button3Complete(context){
            context.commit('button3Complete');
        },
        button4Complete(context){
            context.commit('button4Complete');
        },
        button5Complete(context){
            context.commit('button5Complete');
        },
        button1Activo(context){
            context.commit('button1Activo');
        },
        button2Activo(context){
            context.commit('button2Activo');
        },
        button3Activo(context){
            context.commit('button3Activo');
        },
        button4Activo(context){
            context.commit('button4Activo');
        },
        button5Activo(context){
            context.commit('button5Activo');
        },
        button1Empty(context){
            context.commit('button1Empty');
        },
        button2Empty(context){
            context.commit('button2Empty');
        },
        button3Empty(context){
            context.commit('button3Empty');
        },
        button4Empty(context){
            context.commit('button4Empty');
        },
        button5Empty(context){
            context.commit('button5Empty');
        },
        //----fim das actions da navigationBar
        incrementaFase(context){
            context.commit('incrementaFase');
        },
        decrementaFase(context){
            context.commit('decrementaFase')
        },
        selecionaEstatico(context){
            context.commit('selecionaEstatico');
        },
        selecionaDinamico(context){
            context.commit('selecionaDinamico');
        },
        selecionaApp(context){
            context.commit('selecionaApp');
        },
        selecionaMarketingDigital(context){
            context.commit('selecionaMarketingDigital');
        },
        selecionaPublicidade(context){
            context.commit('selecionaPublicidade');
        },
        selecionaGestao(context){
            context.commit('selecionaGestao');
        },
        selecionaGoogleBusiness(context){
            context.commit('selecionaGoogleBusiness');
        },
        selecionaDominio(context){
            context.commit('selecionaDominio');
        },
        selecionaLoja(context){
            context.commit('selecionaLoja');
        },
        selecionaRedes(context){
            context.commit('selecionaRedes');
        },
        selecionaAlojamento(context){
            context.commit('selecionaAlojamento');
        },
        selecionaBlog(context){
            context.commit('selecionaBlog');
        },
        selecionaSeo(context){
            context.commit('selecionaSeo');
        },
        selecionaKeyWords(context){
            context.commit('selecionaKeyWords');
        },
        selecionaFacebook(context){
            context.commit('selecionaFacebook');
        },
        selecionaInstagram(context){
            context.commit('selecionaInstagram');
        },
        selecionaTwitter(context){
            context.commit('selecionaTwitter');
        },
        selecionaLinkedin(context){
            context.commit('selecionaLinkedin');
        },
        selecionaPinterest(context){
            context.commit('selecionaPinterest');
        },
        selecionaAdwords(context){
            context.commit('selecionaAdwords');
        },
        desselecionaDominio(context){
            context.commit('desselecionaDominio')
        },
        desselecionaLoja(context){
            context.commit('desselecionaLoja')
        },
        desselecionaAlojamento(context){
            context.commit('desselecionaAlojamento')
        },
        desselecionaRedes(context){
            context.commit('desselecionaRedes')
        },
        desselecionaBlog(context){
            context.commit('desselecionaBlog')
        },
        desselecionaPublicidade(context){
            context.commit('desselecionaPublicidade');
        },
        desselecionaGestao(context){
            context.commit('desselecionaGestao');
        },
        desselecionaGoogleBusiness(context){
            context.commit('desselecionaGoogleBusiness');
        },
        desselecionaSeo(context){
            context.commit('desselecionaSeo')
        },
        desselecionaKeyWords(context){
            context.commit('desselecionaKeyWords')
        },
        desselecionaFacebook(context){
            context.commit('desselecionaFacebook')
        },
        desselecionaInstagram(context){
            context.commit('desselecionaInstagram')
        },
        desselecionaTwitter(context){
            context.commit('desselecionaTwitter')
        },
        desselecionaLinkedin(context){
            context.commit('desselecionaLinkedin')
        },
        desselecionaPinterest(context){
            context.commit('desselecionaPinterest')
        },
        desselecionaAdwords(context){
            context.commit('desselecionaAdwords')
        },
        selectMarketingFase2(context){
            context.commit('selectMarketingFase2');
        },
        deselectMarketingDigitalFase2(context){
            context.commit('deselectMarketingDigitalFase2');
        },
        selectFase2(context){
            context.commit('selectFase2');
        },
        selectFase3(context){
            context.commit('selectFase3');
        },
        selectFase4(context){
            context.commit('selectFase4');
        },
        selectFase5(context){
            context.commit('selectFase5');
        },
        deselectFase2(context){
            context.commit('deselectFase2');
        },
        deselectFase3(context){
            context.commit('deselectFase3');
        },
        deselectFase4(context){
            context.commit('deselectFase4');
        },
        deselectFase5(context){
            context.commit('deselectFase5');
        },
        restartApp(context){
            context.commit('restartApp');
        },
        selecionaPages1(context){
            context.commit('selecionaSelectionPages1')
        },
        selecionaPages2(context){
            context.commit('selecionaSelectionPages2')
        },
        selecionaPages3(context){
            context.commit('selecionaSelectionPages3')
        },
        selecionaProdutos1(context){
            context.commit('selecionaProdutos1')
        },
        selecionaProdutos2(context){
            context.commit('selecionaProdutos2')
        },
        selecionaProdutos3(context){
            context.commit('selecionaProdutos3')
        },
        desselecionaPages1(context){
            context.commit('desselecionaSelectionPages1')
        },
        desselecionaPages2(context){
            context.commit('desselecionaSelectionPages2')
        },
        desselecionaPages3(context){
            context.commit('desselecionaSelectionPages3')
        },
    },
};