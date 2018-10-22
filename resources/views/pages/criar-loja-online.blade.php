@extends('master-page')



@section('head')

    <title>{{ $template_content->metaTitle }}</title>
    <meta name="description" content="{{ $template_content->metaDescription }}">

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
    @include('layout.scripts-css-template')
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection