@extends('master-page')



@section('head')

    <title>Criação de Sites para Empresas | Criar WebSite Profissional | Digitalinput</title>
    <meta name="description" content="Criação de Sites para Empresas segundo as últimas técnicas de Mkt Digital. 
    Consulte os nossos serviços.">

    <meta name="keywords" content="analytics, webmaster tools, criar site,
    criação de sites, google webmaster, criar website, criar pagina web,
    site responsivo, empresa de sites, construção de sites, criação de sites para empresas,
    ferramentas google, site para empresas, site profissional, desenvolvimento de websites,
    fazer website, site institucional, sites em wordpress, empresa de criação de sites, 
    empresas de websites, preços de sites, orçamento site, sites modernos, site de serviços,
    fazer site profissional, quanto custa criar um site, criar site com dominio, agencia criação de sites,
    websites profissionais">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.criacao-sites')
    
@endsection



@section('footer')

    @include('layout.footer')

@endsection



@section('scripts-css')

    @include('layout.scripts-css')
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection