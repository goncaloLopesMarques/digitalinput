@extends('master-page')



@section('head')

    <title>Blog | Digitalinput</title>
    <meta name="description" content="">

    <meta name="keywords" content="">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.blog')
    
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