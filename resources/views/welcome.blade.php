<!DOCTYPE html>
    <html>
<head>
    <title>Test</title>
    <meta chatset="UTF-8">
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>
<body>
    <nav class="main-menu">
        @include('menu')
    </nav>
        <section>
            
                <article class="menu">
                    
                    @yield('content')
                </article>
           
        </section>
    <footer>
        
    </footer>
 
</body>
    
</html>