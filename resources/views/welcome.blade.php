<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta chatset="UTF-8">
        <link rel="stylesheet" href="{{asset('main.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    </head>
    <body class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-xs-12">
                <nav class="main-menu">



                    @include('menu')
                </nav>
            </div> 
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-xs-12">

                <section>

                    <article class="menu">

                        @yield('content')
                    </article>

                </section>
            </div>
            <footer>

            </footer>

    </body>

</html>