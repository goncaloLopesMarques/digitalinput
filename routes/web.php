<?php


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//rotas para as views
route::get('/', 'PagesController@index');
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
Route::get('blog/{slug}', function($slug){
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('layout.post', compact('post'));
});
//--------FIM DAS ROTAS DOS POSTS
route::get('/portfolio', 'PagesController@portfolio');
route::get('/orcamento', 'OrcamentoController@index');

//enviar emails
Route::post('/orcamento/site', 'SendMailController@enviarOrcamentoSite');
Route::post('/orcamento/app', 'SendMailController@enviarOrcamentoApp');
Route::post('/orcamento/info', 'SendMailController@enviarOrcamentoParaInfo');
