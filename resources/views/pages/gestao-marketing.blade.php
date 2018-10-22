@extends('master-page')



@section('head')

    <title>{{ $template_content->metaTitle }}</title>
    <meta name="description" content="{{ $template_content->metaDescription }}">

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
    @include('layout.scripts-css-template')
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection