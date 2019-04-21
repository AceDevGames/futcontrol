<html>
    <head>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Fut Control</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
    </head>
    <body>
        <div class="container">
            @component('component_navbar',["current"=>$current])
                @endcomponent
            <main role="main">
                @hasSection('body')
                    @yield('body')
                 @endif
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
   </body>

</html>