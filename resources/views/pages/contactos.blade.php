@extends('master-page')



@section('head')

    <title>Contactos</title>
    <meta name="description" content="">

    <meta name="keywords" content="">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.contactos')
    
@endsection



@section('footer')

    @include('layout.footer')

@endsection



@section('scripts-css')

    @include('layout.scripts-css')
    <script type="text/javascript" src="/js/contactos.js"></script>
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection