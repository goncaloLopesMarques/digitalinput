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
    <script>

      defer(function () {
    

        $(document).ready(function(){  
           
     
           var recentArray = <?php echo json_encode($recentwork); ?>;
           console.log(recentArray);

            //ciclo for para preencher a grid com posts  background:linear-gradient( rgba(0, 0, 0,96), rgba(0, 0, 0,0.6 ) ),url('+dataArray["data"][i]["image"]+');

            for(var i=0 ; i< recentArray.length ; i++){

                x=0;
                
                if(i< 3)
                    
                    x=1;

                else if (i<6)
                    
                    x=2;

                else if (i<9)
                    
                    x=3;



                                                    

             

                $("#posts-" + x).append('<div class="col-lg-4 col-sm-12 p-0 blogGrid">   <div class="flex-center waves-effect waves-light view overlay zoom">   <img style="height:100%" src="storage/'+recentArray[i]["thumbnail"]+'" alt="'+recentArray[i]["name"]+'"><div class="flex-center titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+recentArray[i]["name"]+'</p>   </div>   <div class="my-mask-over mask rgba-black-stronger flex-center waves-effect waves-light"><p class="white-text text-center">'+recentArray[i]["description"]+'</p></div></div></div>');
         
            }       
       
         
        });


    });
     
    </script>
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection