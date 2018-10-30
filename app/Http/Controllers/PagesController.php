<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use App\Post;
use App\Projeto;
use App\Cliente;
use App\Templatepagina;

use Mapper;


class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){

        $classes = "home";
        $recentwork = $this->mostRecentProjects();
        $clientes = $this->getClientes();

        return view('pages.home', compact('classes', 'recentwork', 'clientes'));
    }

    public function mostRecentProjects(){

        $mostRecentPosts = json_decode(Projeto::all(), true);
        $arrayAux = array();
        foreach ($mostRecentPosts as $key => $row)
        {
          $arrayAux[$key] = $row['created_at'];
        }
        array_multisort($arrayAux, SORT_DESC, $mostRecentPosts);
        //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos projetos queremos mostrar
        $mostRecentPosts = array_slice($mostRecentPosts, 0, 9);
        // ACABA AQUI A ORDENAÇÂO
        
        return $mostRecentPosts;
    }

    public function getClientes(){

        $clients = json_decode(Cliente::all(), true);
        $arrayAux = array();
        foreach ($clients as $key => $row)
        {
          $arrayAux[$key] = $row['created_at'];
        }
        array_multisort($arrayAux, SORT_DESC, $clients);
        //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos projetos queremos mostrar
        //$clients = array_slice($clients, 0, 9);
        // ACABA AQUI A ORDENAÇÂO
        
        return $clients;
    }


    
    public function getTemplateContent($page_filename){


        $template_content = Templatepagina::where('page_filename', '=', $page_filename)->first();


        $template_content->boostrap_class_grid = 'template-grid col';
        $template_content->boostrap_class_section_1 = 'template-section col-12';
        $template_content->boostrap_class_section_2 = 'template-section col-12';

        $template_content->num_colunas_grid = 0;
        $template_content->mostrar_coluna_1 = true;
        $template_content->mostrar_coluna_2 = true;
        $template_content->mostrar_coluna_3 = true;
        $template_content->mostrar_coluna_4 = true;

        $template_content = (object)$template_content;
        
        // echo "----------------------------------------------------";
        // echo ($template_content);
        // echo "----------------------------------------------------";
        // exit; 
        

        if (is_null($template_content->grid_coluna_1_h3) and is_null($template_content->grid_coluna_1_content)){
            $template_content->mostrar_coluna_1 = false;
        }
        else{
            $template_content->mostrar_coluna_1 = true;
            $template_content->num_colunas_grid++; 
        }
        if (is_null($template_content->grid_coluna_2_h3) and is_null($template_content->grid_coluna_2_content)){
            $template_content->mostrar_coluna_2 = false;
        }
        else{
            $template_content->mostrar_coluna_2 = true;
            $template_content->num_colunas_grid++; 
        }
        if (is_null($template_content->grid_coluna_3_h3) and is_null($template_content->grid_coluna_3_content)){
            $template_content->mostrar_coluna_3 = false;
        }
        else{
            $template_content->mostrar_coluna_3 = true;
            $template_content->num_colunas_grid++; 
        }
        if (is_null($template_content->grid_coluna_4_h3) and is_null($template_content->grid_coluna_4_content)){
            $template_content->mostrar_coluna_4 = false;
        }
        else{
            $template_content->mostrar_coluna_4 = true;
            $template_content->num_colunas_grid++; 
        }


        // RESPONSIVE GRID
        switch ($template_content->num_colunas_grid) {
           
            case 2:
                $template_content->boostrap_class_grid = "template-grid col-md-6 col-sm-12 mb-4";
                break;
            case 3:
                $template_content->boostrap_class_grid = "template-grid col-md-4 col-sm-12 mb-4";
                break;
            case 4:
                $template_content->boostrap_class_grid = "template-grid col-lg-3 col-md-6 col-sm-12 mb-4";
                break;
        }

        
        // RESPONSIVE SECTION 1
        $num_colunas_section_1 = substr_count($template_content->section1_content, '<td');

        switch ($num_colunas_section_1) {
           
            case 2:
                $template_content->boostrap_class_section_1 = "template-section col-md-6 col-sm-12";
                break;
            case 3:
                $template_content->boostrap_class_section_1 = "template-section col-md-4 col-sm-12";
                break;
            case 4:
                $template_content->boostrap_class_section_1 = "template-section col-lg-3 col-md-6 col-sm-12";
                break;
        }


        // RESPONSIVE SECTION 2
        $num_colunas_section_2 = substr_count($template_content->section2_content, '<td');


         // echo "----------------------------------------------------";
         // echo ($template_content->section2_content);
         // echo "----------------------------------------------------";
         // exit; 



        switch ($num_colunas_section_2) {
           
            case 2:
                $template_content->boostrap_class_section_2 = "template-section col-md-6 col-sm-12";
                break;
            case 3:
                $template_content->boostrap_class_section_2 = "template-section col-md-4 col-sm-12";
                break;
            case 4:
                $template_content->boostrap_class_section_2 = "template-section col-lg-3 col-md-6 col-sm-12";
                break;
        }



//        COLOCAR NOS TD da tabela ! ! ! 





    return $template_content;
    }




    /*public function allPosts(){
    return Post::all();
  }

    public function mostRecentPosts(){

        $classes = "home";
        $mostRecentPosts = json_decode($this->allPosts(),true);
        $arrayAux = array();
        foreach ($mostRecentPosts as $key => $row)
        {
          $mostRecentPosts[$key]["image"] = \Voyager::image($mostRecentPosts[$key]["image"]);
          $arrayAux[$key] = $row['created_at'];
        }
        array_multisort($arrayAux, SORT_DESC, $mostRecentPosts);
        //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos posts queremos mostrar
        $mostRecentPosts = array_slice($mostRecentPosts, 0, 9);
        // ACABA AQUI A ORDENAÇÂO
        
        return view('pages.home', compact('classes', 'mostRecentPosts'));
    }*/

    function redesSociais(){
        $classes = "gestao-redes-sociais my-background-services";
        $template_content = $this->getTemplateContent('gestao-redes-sociais');
        return view('pages.gestao-redes-sociais', compact('classes', 'template_content'));
    }
    function gestaoMarketing(){
        $classes = "gestao my-background-services";
        $template_content = $this->getTemplateContent('gestao-marketing');
        return view('pages.gestao-marketing', compact('classes', 'template_content'));
    }
    function criacaoSites(){
        $classes = "sites my-background-services";
        $template_content = $this->getTemplateContent('criacao-sites');
        return view('pages.criacao-sites', compact('classes', 'template_content'));
    }
    function optimizacaoSites(){
        $classes = "optimizacao my-background-services";
        $template_content = $this->getTemplateContent('optimizacao-sites');
        return view('pages.optimizacao-sites', compact('classes', 'template_content'));
    }
    function criarLojaOnline(){
        $classes = "ecommerce my-background-services";
        $template_content = $this->getTemplateContent('criar-loja-online');
        return view('pages.criar-loja-online', compact('classes', 'template_content'));
    }
    function empresaWebDesign(){
        $classes = "webdesign my-background-services";
        $template_content = $this->getTemplateContent('empresas-web-design');
        return view('pages.empresas-web-design', compact('classes', 'template_content'));
    }
    function empresaDesign(){
        $classes = "design my-background-services";
        $template_content = $this->getTemplateContent('empresas-design');
        return view('pages.empresas-design', compact('classes', 'template_content'));
    }
    function publicidadeFacebook(){
        $classes = "facebook my-background-services";
        $template_content = $this->getTemplateContent('publicidade-facebook');
        return view('pages.publicidade-facebook', compact('classes', 'template_content'));
    }
    function agenciaAdwords(){
        $classes = "agencia-adwords my-background-services";
        $template_content = $this->getTemplateContent('agencia-adwords');
        return view('pages.agencia-adwords', compact('classes', 'template_content'));
    }
    function manutencaoWebsites(){
        $classes = "manutencao my-background-services";
        $template_content = $this->getTemplateContent('manutencao-websites');
        return view('pages.manutencao-websites', compact('classes', 'template_content'));
    }
    function agenciaEmailMarketing(){
        $classes = "email-marketing my-background-services";
        $template_content = $this->getTemplateContent('agencia-email-marketing');
        return view('pages.agencia-email-marketing', compact('classes', 'template_content'));
    }
    function consultoriaMarketing(Request $request){
        $classes = "consultoria my-background-services";
        $template_content = $this->getTemplateContent('consultoria-marketing-digital');
        return view('pages.consultoria-marketing-digital', compact('classes', 'template_content'));
    }

    function orcamento(){
        $classes = "orcamento";
        return view('pages.orcamento', compact('classes'));
    }
    function contactos(){
        $classes = "contactos my-background";
     //   Mapper::map(39.767193, -8.794251);
        return view('pages.contactos', compact('classes'));
    }
    

}