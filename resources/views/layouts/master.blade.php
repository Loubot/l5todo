<html>
    <head>
        {!! HTML::script('js/jquery.min.js') !!}
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}
        

        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>