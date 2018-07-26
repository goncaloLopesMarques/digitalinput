@extends('master-page')



@section('head')

    <title>Agência Marketing Digital | Empresa Web | Design Gráfico</title>
    <meta name="description" content="Agência Marketing Digital em Leiria,
    especializada em SEO, Webdesign e Design Gráfico. 
    Conheça as vantagens de ser Parceiro!">

    <meta name="keywords" content="agencia de comunicação,criar empresa,web marketing,
    agencia de marketing digital,marketing digital 360,marketing digital empresas,
    marketing digital portugal,micro e pequenas e médias empresas,estratégias de marketing digital,
    agência digital; franquia marketing digital,marketing digital para empresas,agencias de mkt digital
    serviços marketing digital,marketing digital para pequenas empresas">
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
    <script type="text/javascript" src="/js/home.js"></script>
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection