<?php


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//rotas para as views
// route::get('/', 'PagesController@index');

route::get('/', 'PagesController@mostRecentPosts');



route::get('/gestao-redes-sociais-preços', 'PagesController@redesSociais');
route::get('/gestao-marketing-conteudo', 'PagesController@gestaoMarketing');
route::get('/criacao-sites-empresas-profissionais', 'PagesController@criacaoSites');
route::get('/optimizacao-sites-tecnicas-seo-portugal', 'PagesController@optimizacaoSites');
route::get('/criar-loja-online-site-vendas', 'PagesController@criarLojaOnline');
route::get('/empresas-design-grafico-identidade-visual', 'PagesController@empresaDesign');
route::get('/empresa-web-design', 'PagesController@empresaWebDesign');
route::get('/publicidade-facebook-anunciar-empresas', 'PagesController@publicidadeFacebook');
route::get('/agencia-adwords-publicidade-anunciar-google', 'PagesController@agenciaAdwords');
route::get('/manutencao-websites', 'PagesController@manutencaoWebsites');
route::get('/agencia-email-marketing', 'PagesController@agenciaEmailMarketing');
route::get('/consultoria-marketing-digital-empresas', 'PagesController@consultoriaMarketing');

//ROTAS PARA FAZER O DISPLAY DOS POSTS
Route::get('/blog/search', 'BlogController@search');
Route::get('/blog', 'BlogController@show');
Route::get('blog/{slug}', 'BlogController@post');

//--------FIM DAS ROTAS DOS POSTS
route::get('/orcamento', 'PagesController@orcamento');

//-------PORTFOLIO ROUTES----------
route::get('/portfolio', 'PortfolioController@portfolio');
route::get('/portfolio/{slug}', 'PortfolioController@project');

//enviar emails
Route::post('/orcamento/site', 'SendMailController@enviarOrcamentoSite');
Route::post('/orcamento/app', 'SendMailController@enviarOrcamentoApp');
Route::post('/orcamento/info', 'SendMailController@enviarOrcamentoParaInfo');
