@extends('master-page')



@section('head')

    <title>Orcamento | Digitalinput</title>
    <meta name="description" content="">

    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layout.head') 
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.orcamento')

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