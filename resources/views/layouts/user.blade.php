<html>
    <head></head>
    <body>
        <h1>Welcome User</h1>
        @include('includes.user_topbar')
        <div>
            @yield('content')
        </div>
    </body>
</html>