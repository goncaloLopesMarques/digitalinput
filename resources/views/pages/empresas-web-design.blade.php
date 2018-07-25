@extends('master-page')



@section('head')

    <title>Empresa Web Design | Webdesign | Leiria | Lisboa | Coimbra</title>
    <meta name="description" content="Procura Empresa Web Design para melhorar a sua presença
     e comunicação digital? Conheça os nossos preços!">

    <meta name="keywords" content="web design, webdesign, web designer, web design lisboa, empresa web design,
     agencia web design, empresa de web design, web designer freelancer, web design leiria">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.empresas-web-design')
    
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