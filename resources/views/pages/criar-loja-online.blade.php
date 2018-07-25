@extends('master-page')



@section('head')

    <title>Criar Loja Online | Site de Vendas | Loja Virtual</title>
    <meta name="description" content="Criar Loja Online, Site de Vendas, 
    Loja Virtual com base nas mais recentes técnicas SEO. Crie Websites que vendem online. Visite-nos!">

    <meta name="keywords" content="site de vendas, criar loja online, loja virtual, criação de lojas online,
    criar loja virtual, criar site de vendas online, desenvolvimento de sites e commerce, criar site vendas,
    criar site loja virtual">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.criar-loja-online')
    
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