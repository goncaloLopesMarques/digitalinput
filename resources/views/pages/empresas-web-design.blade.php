@extends('master-page')



@section('head')

    <title>{{ $template_content->metaTitle }}</title>
    <meta name="description" content="{{ $template_content->metaDescription }}">

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
    @include('layout.scripts-css-template')
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection