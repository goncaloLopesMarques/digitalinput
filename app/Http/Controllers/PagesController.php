<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Post;
use App\Projeto;
use App\Cliente;

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
        $classes = "redes my-background";
        return view('pages.gestao-redes-sociais', compact('classes'));
    }
    function gestaoMarketing(){
        $classes = "gestao my-background";
        return view('pages.gestao-marketing', compact('classes'));
    }
    function criacaoSites(){
        $classes = "sites my-background";
        return view('pages.criacao-sites', compact('classes'));
    }
    function optimizacaoSites(){
        $classes = "optimizacao my-background";
        return view('pages.optimizacao-sites', compact('classes'));
    }
    function criarLojaOnline(){
        $classes = "ecommerce my-background";
        return view('pages.criar-loja-online', compact('classes'));
    }
    function empresaWebDesign(){
        $classes = "webdesign my-background";
        return view('pages.empresas-web-design', compact('classes'));
    }
    function empresaDesign(){
        $classes = "design my-background";
        return view('pages.empresas-design', compact('classes'));
    }
    function publicidadeFacebook(){
        $classes = "facebook my-background";
        return view('pages.publicidade-facebook', compact('classes'));
    }
    function agenciaAdwords(){
        $classes = "campanhas my-background";
        return view('pages.agencia-adwords', compact('classes'));
    }
    function manutencaoWebsites(){
        $classes = "manutencao my-background";
        return view('pages.manutencao-websites', compact('classes'));
    }
    function agenciaEmailMarketing(){
        $classes = "email-marketing my-background";
        return view('pages.agencia-email-marketing', compact('classes'));
    }
    function consultoriaMarketing(){
        $classes = "consultoria my-background";
        return view('pages.consultoria-marketing-digital', compact('classes'));
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