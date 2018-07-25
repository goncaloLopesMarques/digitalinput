@extends('master-page')



@section('head')

    <title>Agência Adwords | Anunciar Google | Divulgar site</title>
    <meta name="description" content="Procura Agência Adwords, anunciar e divulgar o seu site no google? 
    Conheça as vantagens de ser nosso Parceiro.">

    <meta name="keywords" content="adwords, google adwords, publicidade na internet, anunciar no google,
     como anunciar no google, publicidade no google, Google Adwords Preço, divulgar site, Agência Adwords">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.agencia-adwords')
    
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