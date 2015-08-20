<html>
    <head>
        {!! HTML::script('js/jquery.min.js') !!}
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}
        

        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <!-- This is the master sidebar. -->
        @show

        <div class="container">
            <div class="content">
                @if (Session::has('mesage'))
                    <div class="flash alert-info">

                        <p>{{!! Session::get('message') !!}}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="flash alert-danger">
                        @foreach ( $errors->all() as $error )
                            <p>{{!! $error !!}}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            @yield('content')
        </div>
    </body>
</html>