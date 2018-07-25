@extends('master-page')



@section('head')

    <title>Manutenção Websites | Wordpress | Prestashop | Mangento | Digitalinput</title>
    <meta name="description" content="Precisa de manutenção website? Actualizamos e mantemos a sua plataforma sem erros. 
    Gerimos os seus conteúdos. Visite-nos!">

    <meta name="keywords" content="programador, hospedagem de sites, designer freelancer, manutenção de sites">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.manutencao-websites')
    
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