@extends('master-page')



@section('head')

    <title>Empresas Design Gráfico | Identidade Visual | Agência Design </title>
    <meta name="description" content="Procura Empresas Design Gráfico para criar Identidade Visual e 
    Agência Design para as suas estratégias, conheça-nos!">

    <meta name="keywords" content="logotipo, design grafico, criar logo, designer grafico,
    criar logotipos, empresas de design, identidade visual, agencia design, empresas de design grafico">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.empresas-design')
    
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