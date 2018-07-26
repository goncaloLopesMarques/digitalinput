<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @yield('head')
    </head>

    <body class="{{ $classes }}">
           

        <!--Main Navigation-->
        <header>
            @yield('nav-bar')
        </header>   

        <main>
            @yield('main')
        </main>



        <!-- <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn"> -->
        @yield('footer')
        <!-- </footer> -->
               
        @yield('scripts-css')
            
        @yield('modals')


        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a href="#" class="btn-floating btn-lg white waves-effect waves-light" style="border: 1px solid #252e41;">
                <i class="fa fa-envelope-o" style="color:#252e41;"></i>
            </a>

            {{-- <ul class="list-unstyled">
                    <li><a class="btn-floating red waves-effect waves-light" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-star"></i></a></li>
                    <li><a class="btn-floating yellow darken-1 waves-effect waves-light" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-user"></i></a></li>
                    <li><a class="btn-floating green waves-effect waves-light" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="btn-floating blue waves-effect waves-light" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-shopping-cart"></i></a></li>
                </ul> --}}
        </div>


    </body>

</html>