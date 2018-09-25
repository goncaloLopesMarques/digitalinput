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
           
     
           var trabalhosRecentes = <?php echo json_encode($recentwork); ?>;

           var clientes = <?php echo json_encode($clientes); ?>;
           //console.log(recentArray);



            // apresentação clientes 
            for(var i=0 ; i< clientes.length ; i++){

                x=0;
                
                
                // slide 1
                if(i < 4) x=1;

                // slide 2 
                else if (i < 8) x=2;

                // slide 3
                else if (i < 12) x=3;


                /*
                if(recentArray[i]["images"]){

                    var imagens = JSON.parse(recentArray[i]["images"]);

                    for(var j=0 ; j< imagens.length ; j++){
           
                        console.log(imagens[j]);
                    }

                }
                */
             

                $("#posts-" + x).append('<div class="col-lg-3 col-sm-6 p-0 blogGrid"> <div class="flex-center waves-effect waves-light view overlay zoom" style="padding: 35px;">  <img style="height:calc(100% - 35px); margin-top:-35px;" src="storage/'+clientes[i]["image"]+'" alt="'+clientes[i]["name"]+'"><div class="titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+clientes[i]["name"]+'</p>   </div>   <div class="my-vertical-align my-mask-over mask rgba-black-stronger waves-effect waves-light">'+clientes[i]["description"].slice(0, 250)+'...</div></div></div>');
            } 



            // apresentação trabalhios recentes
            for(var i=0 ; i< trabalhosRecentes.length ; i++){
            
                $("#trabalhos-recentes").append('<div class="my-col-xxl-3 col-lg-4 col-md-6 col-xs-12 p-0 blogGrid">   <div class="flex-center waves-effect waves-light view overlay zoom">   <img src="'+trabalhosRecentes[i]["image"]+'" alt="zoom"><div class="flex-center titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+trabalhosRecentes[i]["title"]+'</p>   </div>   <div class="my-mask-over mask rgba-black-stronger flex-center waves-effect waves-light"><p class="white-text text-center">'+trabalhosRecentes[i]["description"]+'</p></div></div></div>');
            }      
       
         
        });


    });
     
    </script>










    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection