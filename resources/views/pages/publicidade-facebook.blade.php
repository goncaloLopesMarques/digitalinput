@extends('master-page')



@section('head')

    <title>Publicidade Facebook | Anunciar Empresas | FacebookAds</title>
    <meta name="description" content="Quer fazer Publicidade Facebook, anunciar a sua empresa com FacebookAds, 
    conheça os nossos serviços personalizados. Visite-nos!">

    <meta name="keywords" content="facebook para empresas, publicidade no facebook, anunciar no facebook,
     marketing no facebook, facebookads">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.publicidade-facebook')
    
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