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
        $classes = "home";
        return view('pages.home', compact('classes'));
    }

    function redesSociais(){
        $classes = "redes";
        return view('pages.gestao-redes-sociais', compact('classes'));
    }
    function gestaoMarketing(){
        $classes = "gestao";
        return view('pages.gestao-marketing', compact('classes'));
    }
    function criacaoSites(){
        $classes = "sites";
        return view('pages.criacao-sites', compact('classes'));
    }
    function optimizacaoSites(){
        $classes = "optimizacao";
        return view('pages.optimizacao-sites', compact('classes'));
    }
    function criarLojaOnline(){
        $classes = "ecommerce";
        return view('pages.criar-loja-online', compact('classes'));
    }
    function empresaWebDesign(){
        $classes = "webdesign";
        return view('pages.empresas-web-design', compact('classes'));
    }
    function empresaDesign(){
        $classes = "design";
        return view('pages.empresas-design', compact('classes'));
    }
    function publicidadeFacebook(){
        $classes = "facebook";
        return view('pages.publicidade-facebook', compact('classes'));
    }
    function agenciaAdwords(){
        $classes = "adwords";
        return view('pages.agencia-adwords', compact('classes'));
    }
    function manutencaoWebsites(){
        $classes = "manutencao";
        return view('pages.manutencao-websites', compact('classes'));
    }
    function agenciaEmailMarketing(){
        $classes = "email-marketing";
        return view('pages.agencia-email-marketing', compact('classes'));
    }
    function consultoriaMarketing(){
        $classes = "consultoria";
        return view('pages.consultoria-marketing-digital', compact('classes'));
    }
    function blog(){
        $classes = "blog";
        return view('pages.blog', compact('classes'));
    }
    function portfolio(){
        $classes = "portfolio";
        return view('pages.portfolio', compact('classes'));
    }
    function orcamento(){
        $classes = "orcamento";
        return view('pages.orcamento', compact('classes'));
    }
    

}