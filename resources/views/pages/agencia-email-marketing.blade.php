@extends('master-page')



@section('head')

    <title>Agência Email Marketing | Agência Comunicação | Digitalinput</title>
    <meta name="description" content="Precisa de um Parceiro para implementação técnicas Email Marketing? Conheça as nossas soluções…">

    <meta name="keywords" content="email marketing, agencia email marketing">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.agencia-email-marketing')
    
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