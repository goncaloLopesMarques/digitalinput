@extends('master-page')



@section('head')

    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">

    <meta name="keywords" content="{{ $post->meta_keywords }}">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

     @include('layout.post')

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