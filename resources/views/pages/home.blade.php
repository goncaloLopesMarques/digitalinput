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
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
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
    <script>

      defer(function () {

        $(document).ready(function(){  
           
     
           var trabalhosRecentes = <?php echo json_encode($recentwork); ?>;

           var clientes = <?php echo json_encode($clientes); ?>;



            // apresentação clientes 
            for(var i=0 ; i< clientes.length ; i++){
             

                $("#clientes-slider").append('<div class="flex-center waves-effect waves-light view overlay zoom">  <img src="storage/'+clientes[i]["image"]+'" alt="'+clientes[i]["name"]+'"><div class="titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+clientes[i]["name"]+'</p>   </div>   <div class="my-vertical-align my-mask-over mask rgba-black-stronger waves-effect waves-light">'+clientes[i]["description"].slice(0, 250)+'...</div></div>');
            } 



            // apresentação trabalhos recentes
            for(var i=0 ; i< trabalhosRecentes.length ; i++){



  
            
                $("#trabalhos-recentes").append('<div class="col-xl-3 col-lg-4 col-md-6 col-xs-12 p-0 blogGrid"><a href="/portfolio/'+trabalhosRecentes[i]["slug"]+'">  <div class="flex-center waves-effect waves-light view overlay zoom">   <img style="max-width: 100%;" src="storage/'+trabalhosRecentes[i]["thumbnail"]+'" alt="'+trabalhosRecentes[i]["name"]+'"><div class="titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+trabalhosRecentes[i]["name"]+'</p>   </div>   <div class="my-vertical-align my-mask-over mask rgba-black-stronger waves-effect waves-light"><p class="white-text text-center">'+trabalhosRecentes[i]["description"].slice(0, 400)+'...</p></div></div></a></div>');
            }      
       
         
        });


    });
     
    </script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/home.js"></script>

    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection