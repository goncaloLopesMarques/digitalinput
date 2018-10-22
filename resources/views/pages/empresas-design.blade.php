@extends('master-page')



@section('head')

    <title>{{ $template_content->metaTitle }}</title>
    <meta name="description" content="{{ $template_content->metaDescription }}">

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
    @include('layout.scripts-css-template')
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection