@extends('master-page')



@section('head')

    <title>Gestão de Redes Sociais Preços | Digitalinput | Marketing Digital</title>
    <meta name="description" content="Gestão de Redes Sociais Preços 
    - O Parceiro ideal para criar empatia e identidade de Marca junto dos seus Clientes. 
    Orçamentos rápidos.">

    <meta name="keywords" content="gestão de redes sociais,
    agencia de redes sociais, gestão de redes sociais preço, preço gestão redes sociais">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.home-page')
    
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