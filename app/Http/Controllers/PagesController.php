<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        return view('pages.home');
    }

    function redesSociais(){
        return view('pages.gestao-redes-sociais');
    }
    function gestaoMarketing(){
        return view('pages.gestao-marketing');
    }
    function criacaoSites(){
        return view('pages.criacao-sites');
    }
    function optimizacaoSites(){
        return view('pages.optimizacao-sites');
    }
    function criarLojaOnline(){
        return view('pages.criar-loja-online');
    }
    function empresaWebDesign(){
        return view('pages.empresas-web-design');
    }
    function empresaDesign(){
        return view('pages.empresas-design');
    }
    function publicidadeFacebook(){
        return view('pages.publicidade-facebook');
    }
    function agenciaAdwords(){
        return view('pages.agencia-adwords');
    }
    function manutencaoWebsites(){
        return view('pages.manutencao-websites');
    }
    function agenciaEmailMarketing(){
        return view('pages.agencia-email-marketing');
    }
    function consultoriaMarketing(){
        return view('pages.consultoria-marketing-digital');
    }
    function blog(){
        return view('pages.blog');
    }
    function portfolio(){
        return view('pages.portfolio');
    }
    

}