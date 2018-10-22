
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: radial-gradient(circle at center top, rgb(66, 165, 245), rgb(39, 54, 84));">

                    <!-- Left -->
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::segment(1) == '' ? 'active' : null }}">
                            <a class="nav-link waves-effect" href="/">Home   <!-- / -->
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="dropdown {{ Request::segment(1) === 'blog' ? 'active' : null }}" ><!-- style="position: initial;" -->
                            <a class="nav-link waves-effect dropdown-toggle" data-toggle="dropdown" href="#" >Serviços</a>
                            <ul class="dropdown-menu animated slideInLeft" style="width: 100%;">
                                 <div class="container"> 
                                    <div class="row">

                                        <div class="col-md-6">
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/gestao-redes-sociais-preços" target="_self">Gestao de Redes Sociais</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/gestao-marketing-conteudo" target="_self">Gestão de Conteúdos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/criacao-sites-empresas-profissionais" target="_self">Website Profissional</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/optimizacao-sites-tecnicas-seo-portugal" target="_self">Integração SEO</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/criar-loja-online-site-vendas" target="_self">Loja Online</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/empresas-design-grafico-identidade-visual" target="_self">Design Gráfico</a>
                                            </li>
                                        </div>
                                        <div class="col-md-6">
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/empresa-web-design" target="_self">Web Design</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/publicidade-facebook-anunciar-empresas" target="_self">Facebook Adds</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/agencia-adwords-publicidade-anunciar-google" target="_self">Google Ads</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/manutencao-websites" target="_self">Manutenção / Otimização Websites</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/agencia-email-marketing" target="_self">Email Marketing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect" href="/consultoria-marketing-digital-empresas" target="_self">Consultoria Marketing Digital</a>
                                            </li>
                                        </div> 
                                    </div>
                                 </div> 
                            </ul>
                        </li>  
                        <li class="nav-item {{ Request::segment(1) === 'portfolio' ? 'active' : null }}">
                            <a class="nav-link waves-effect" href="/portfolio" target="_self">Portfólio</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'orcamento' ? 'active' : null }}">
                            <a class="nav-link waves-effect" href="/orcamento" target="_self">Orçamento</a>
                        </li>                                                                      
                    </ul>

                    <!-- Center -->
                    <div class="logo" >
                        <a href="/">
                            <img src="/images/Digitalinput-LOGO.png" alt="Digitalinput Logo">
                        </a>
                    </div>

                    <!-- Right -->
                    <ul class="navbar-nav">


                        <li class="nav-item {{ Request::segment(1) === 'blog' ? 'active' : null }}">
                            <a class="nav-link waves-effect" href="/blog" target="_self">Blog</a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) === 'contactos' ? 'active' : null }}">
                            <a class="nav-link waves-effect" href="/contactos" target="_self">Contactos</a>
                        </li>
                        <li class="nav-item flex-center">
                            <a href="https://www.facebook.com/digitalinputwebmarketing/" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/Digitalinputweb" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                             <a href="https://www.linkedin.com/company/digitalinput" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </li>
                        
                            
                    </ul>

                </div>

             <!-- </div> --> 
        </nav>