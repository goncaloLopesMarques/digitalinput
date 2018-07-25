<?php


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//rotas para as views
route::get('/', 'PagesController@index');
route::get('/gestao-redes-sociais-preços', 'PagesController@redesSociais');
route::get('/gestao-marketing-conteudo', 'PagesController@gestaoMarketing');
route::get('/criacao-sites-sempresas-profissionais', 'PagesController@criacaoSites');
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
Route::get('/blog/search', 'SearchController@show');
Route::get('/blog', function(){
    //vai buscar todos os posts
    $posts = App\Post::all();
    //vai buscar todas as categorias
    $categories = App\Category::all();

    //ISTO SERVER PARA ODENAR O ARRAY DE POSTS DO MAIS RECENTE PARA O MAIS ANTIGO
    $mostRecentPosts = json_decode($posts,true);
    $arrayAux = array();
    foreach ($mostRecentPosts as $key => $row)
    {
      $arrayAux[$key] = $row['created_at'];
    }
    array_multisort($arrayAux, SORT_DESC, $mostRecentPosts);
    //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos posts queremos mostrar
    $mostRecentPosts = array_slice($mostRecentPosts, 0, 3);
    // ACABA AQUI A ORDENAÇÂO


 
    return view('pages.blog',compact('posts','mostRecentPosts','categories'));
});
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
