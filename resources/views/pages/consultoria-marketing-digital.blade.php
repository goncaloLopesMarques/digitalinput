@extends('master-page')



@section('head')

    <title>Consultoria Marketing Digital Empresas | Micro | Pequenas | Médias | Digitalinput</title>
    <meta name="description" content="É proprietário de uma micro, pequena ou média Empresa?
     Obtenha já uma Consultoria Marketing Digital Empresas ao melhor Preço. Visite-nos!">

    <meta name="keywords" content="consultoria em marketing digital, consultoria marketing digital, consultor marketing digital,
     consultoria marketing digital, consultoria digital, especialista em marketing digital">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.consultoria-marketing-digital')
    
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