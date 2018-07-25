@extends('master-page')



@section('head')

    <title>Marketing de Conteúdo | Gestão de Conteúdo | Digitalinput</title>
    <meta name="description" content="Marketing de Conteúdo é a mais recente tendência de 2017. 
    Saiba o que podemos fazer pela gestão do seu negócio. Visite-nos!">

    <meta name="keywords" content="motores de pesquisa, 
    marketing de conteúdo,gestão de conteúdo, como otimizar meu site">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.gestao-marketing')
    
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