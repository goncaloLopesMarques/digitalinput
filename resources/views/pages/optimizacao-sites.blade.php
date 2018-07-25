@extends('master-page')



@section('head')

    <title>Optimização de Sites | Técnicas de SEO Portugal | Digitalinput</title>
    <meta name="description" content="Optimização de Sites com as mais recentes e inovadoras técnicas  
    SEO em Portugal. Descubra os nossos serviços!">

    <meta name="keywords" content="motores de pesquisa, seo google, otimização de sites, consultor seo, 
    consultoria seo, empresa de seo, otimização seo, tecnicas de seo, empresas seo portugal">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.optimizacao-sites')
    
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