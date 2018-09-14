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




            for(var i=0 ; i< recentArray.length ; i++){

                x=0;
                
                if(i< 3)
                    
                    x=1;

                else if (i<6)
                    
                    x=2;

                else if (i<9)
                    
                    x=3;


                /*
                if(recentArray[i]["images"]){

                    var imagens = JSON.parse(recentArray[i]["images"]);

                    for(var j=0 ; j< imagens.length ; j++){
           
                        console.log(imagens[j]);
                    }

                }
                */



             

                $("#posts-" + x).append('<div class="col-lg-4 col-sm-12 p-0 blogGrid"><a href="/portfolio/'+recentArray[i]["slug"]+'">   <div class="flex-center waves-effect waves-light view overlay zoom">   <img style="height:calc(100% - 35px)" src="storage/'+recentArray[i]["thumbnail"]+'" alt="'+recentArray[i]["name"]+'"><div class="titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+recentArray[i]["name"]+'</p>   </div>   <div class="my-mask-over mask rgba-black-stronger waves-effect waves-light"><p class="white-text text-center">'+recentArray[i]["description"]+'</p></div></div></a></div>');
         
            }       
       
         
        });


    });
     
    </script>
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection